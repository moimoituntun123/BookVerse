@props(['name' => 'book'])
<svg {{ $attributes->merge(['class' => 'h-5 w-5']) }} xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @switch($name)
        @case('search') <circle cx="10.8" cy="10.8" r="7.1"/><path d="m16.2 16.2 4.1 4.1"/> @break
        @case('cart') <path d="M3 4h2l2 11h12l2-8H6"/><circle cx="9" cy="20" r="1"/><circle cx="18" cy="20" r="1"/> @break
        @case('user') <circle cx="12" cy="8" r="4"/><path d="M4 21c0-5 3-8 8-8s8 3 8 8"/> @break
        @case('heart') <path d="M20.5 8.5c0 4.4-8.5 10-8.5 10s-8.5-5.6-8.5-10A4.7 4.7 0 0 1 12 5.9a4.7 4.7 0 0 1 8.5 2.6Z"/> @break
        @case('menu') <path d="M4 6h16M4 12h16M4 18h16"/> @break
        @case('chevron-right') <path d="m9 5 7 7-7 7"/> @break
        @case('chevron-left') <path d="m15 5-7 7 7 7"/> @break
        @case('chevron-down') <path d="m6 9 6 6 6-6"/> @break
        @case('arrow-right') <path d="M4 12h16m-7-7 7 7-7 7"/> @break
        @case('plus') <path d="M12 5v14M5 12h14"/> @break
        @case('minus') <path d="M5 12h14"/> @break
        @case('trash') <path d="M4 7h16M9 7V4h6v3M7 7l1 13h8l1-13M10 11v5m4-5v5"/> @break
        @case('truck') <path d="M3 6h12v10H3zM15 10h3l3 4v2h-6M6.5 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm12 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/> @break
        @case('check-circle') <circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/> @break
        @case('shield') <path d="M12 2 4 6v6c0 5 3.5 8 8 10 4.5-2 8-5 8-10V6Z"/><path d="m9 12 2 2 4-4"/> @break
        @case('return') <path d="M9 7H4v5M4 12a8 8 0 1 1 2.4 5.7"/> @break
        @case('book') <path d="M12 5c-2-1.6-5-2-9-1v15c4-1 7-.5 9 1 2-1.5 5-2 9-1V4c-4-1-7-.6-9 1Zm0 0v15"/> @break
        @case('sparkles') <path d="m12 2 2.3 6.7L21 11l-6.7 2.3L12 20l-2.3-6.7L3 11l6.7-2.3L12 2ZM19 19l.6 1.4L21 21l-1.4.6L19 23l-.6-1.4L17 21l1.4-.6L19 19Z"/> @break
        @case('chart') <path d="M4 20V10m6 10V5m6 15v-8m5 8H3"/> @break
        @case('smile') <circle cx="12" cy="12" r="9"/><path d="M8 14c2 3 6 3 8 0M8.5 9h.01M15.5 9h.01"/> @break
        @case('sun') <circle cx="12" cy="12" r="4"/><path d="M12 2v3M12 19v3M2 12h3m14 0h3M5 5l2 2m10 10 2 2m0-14-2 2M7 17l-2 2"/> @break
        @case('bulb') <path d="M9 18h6m-5 3h4m-7-9a5 5 0 1 1 10 0c0 2-1 3-2 4H9c-1-1-2-2-2-4Z"/> @break
        @case('mail') <rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/> @break
        @case('lock') <rect x="5" y="10" width="14" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/> @break
        @case('eye') <path d="M2 12s4-6 10-6 10 6 10 6-4 6-10 6S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/> @break
        @case('eye-off') <path d="m3 3 18 18M10 6.2A11 11 0 0 1 12 6c6 0 10 6 10 6a18 18 0 0 1-3 3.6M7.1 7.2C4 8.8 2 12 2 12s4 6 10 6a10 10 0 0 0 4-.8"/> @break
        @case('tag') <path d="M3 4h9l9 9-8 8-10-10V4Z"/><circle cx="7.5" cy="8" r="1"/> @break
        @case('filter') <path d="M3 5h18l-7 8v6l-4 2v-8L3 5Z"/> @break
        @case('star') <path d="m12 2 3.1 6.5 7.1 1-5.2 5.1 1.2 7.2L12 18.4l-6.2 3.4 1.2-7.2-5.2-5.1 7.1-1L12 2Z"/> @break
        @default <circle cx="12" cy="12" r="9"/> @break
    @endswitch
</svg>
