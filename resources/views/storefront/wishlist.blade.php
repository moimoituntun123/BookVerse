@extends('layouts.bookverse')
@section('title', 'Sách yêu thích - BookVerse')
@section('content')
<section class="container-shop pt-10">
    <h1 class="heading-serif">Danh sách yêu thích</h1>
    <p class="mt-2 text-sm text-muted">Những cuốn sách bạn muốn lưu lại.</p>
    @if($items->isEmpty())
        <div class="mt-8 rounded-md border border-line bg-white px-6 py-16 text-center"><p class="text-sm text-muted">Bạn chưa lưu cuốn sách nào.</p><a href="{{ route('home') }}" class="btn-primary mt-5">Khám phá sách</a></div>
    @else
        <div class="mt-8 grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 sm:gap-5">@foreach($items as $book)<x-book-card :book="$book" />@endforeach</div>
    @endif
</section>
@endsection
