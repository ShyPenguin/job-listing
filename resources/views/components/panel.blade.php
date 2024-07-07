@php
  $style = "p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-300"
@endphp

<div {{ $attributes(['class' => $style])}}>{{ $slot }}</div>