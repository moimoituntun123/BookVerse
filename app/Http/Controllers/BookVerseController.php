<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookVerseController extends Controller
{
    private function books()
    {
        return collect(config('bookverse.books', []));
    }

    private function categories()
    {
        return collect(config('bookverse.categories', []));
    }

    public function index(Request $request)
    {
        $keyword = trim((string) $request->query('q', ''));
        $category = (string) $request->query('category', '');
        $books = $this->books();
        $categories = $this->categories();

        $filtered = $books->filter(function ($book) use ($keyword, $category) {
            if ($category !== '' && ($book['category'] ?? '') !== $category) {
                return false;
            }

            if ($keyword === '') {
                return true;
            }

            $haystack = Str::lower(Str::ascii(($book['title'] ?? '') . ' ' . ($book['author'] ?? '')));
            return str_contains($haystack, Str::lower(Str::ascii($keyword)));
        })->values();

        return view('storefront.home', [
            'keyword' => $keyword,
            'category' => $category,
            'categories' => $categories,
            'results' => $filtered,
            'bestBooks' => $books->take(10),
            'saleBooks' => $books->sortByDesc(fn ($book) => ($book['original_price'] - $book['price']) / $book['original_price'])->take(5)->values(),
            'newBooks' => $books->reverse()->take(5)->values(),
            'spotlight' => $books->firstWhere('slug', 'cay-cam-ngot-cua-toi'),
        ]);
    }

    public function show(string $slug)
    {
        $books = $this->books();
        $book = $books->firstWhere('slug', $slug);
        abort_unless($book, 404);

        return view('storefront.show', [
            'book' => $book,
            'categoryName' => $this->categories()->firstWhere('slug', $book['category'])['name'] ?? 'Sách',
            'relatedBooks' => $books->where('category', $book['category'])->where('slug', '!=', $slug)->take(5),
        ]);
    }

    public function cart(Request $request)
    {
        $stored = $request->session()->get('bookverse_cart', []);
        $books = $this->books()->keyBy('slug');
        $items = collect($stored)->map(function ($quantity, $slug) use ($books) {
            $book = $books->get($slug);
            if (! $book) {
                return null;
            }
            $quantity = max(1, min(20, (int) $quantity));
            return ['book' => $book, 'quantity' => $quantity, 'lineTotal' => $quantity * $book['price']];
        })->filter()->values();

        $subtotal = $items->sum('lineTotal');
        $shipping = $subtotal === 0 || $subtotal >= 250000 ? 0 : 30000;
        return view('storefront.cart', compact('items', 'subtotal', 'shipping'));
    }

    public function addToCart(Request $request, string $slug)
    {
        abort_unless($this->books()->contains('slug', $slug), 404);
        $validated = $request->validate(['quantity' => 'required|integer|min:1|max:20']);
        $cart = $request->session()->get('bookverse_cart', []);
        $cart[$slug] = min(20, max(0, (int) ($cart[$slug] ?? 0)) + $validated['quantity']);
        $request->session()->put('bookverse_cart', $cart);

        return redirect()->route('cart')->with('success', 'Đã thêm sách vào giỏ hàng.');
    }

    public function updateCart(Request $request, string $slug)
    {
        $validated = $request->validate(['quantity' => 'required|integer|min:1|max:20']);
        $cart = $request->session()->get('bookverse_cart', []);
        if (array_key_exists($slug, $cart) && $this->books()->contains('slug', $slug)) {
            $cart[$slug] = $validated['quantity'];
            $request->session()->put('bookverse_cart', $cart);
        }
        return redirect()->route('cart')->with('success', 'Đã cập nhật số lượng.');
    }

    public function removeFromCart(Request $request, string $slug)
    {
        $cart = $request->session()->get('bookverse_cart', []);
        unset($cart[$slug]);
        $request->session()->put('bookverse_cart', $cart);
        return redirect()->route('cart')->with('success', 'Đã xóa sách khỏi giỏ hàng.');
    }

    public function login()
    {
        return view('storefront.login');
    }

    public function register()
    {
        return view('storefront.register');
    }

    // Hai biểu mẫu demo không tạo tài khoản, không truy vấn DB, không lưu mật khẩu.
    public function demoAuth()
    {
        return back()->with('notice', 'Đây là giao diện minh họa. Chưa kết nối hệ thống tài khoản.');
    }
}
