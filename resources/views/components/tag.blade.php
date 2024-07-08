@props(['tag', 'size' => 's'])

@php
  $style = "bg-white/10 hover:bg-white/20 font-bold rounded-xl transition-colors duration-300";

  if ("l" === $size) {
    $style .= " px-5 py-1.5 text-s";
  } else {
    $style .= " px-3 py-1 text-2xs";
  }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $style }}">
  {{ $tag->name }}
</a>


<!-- @switch($size)
  @case('l')
    <a href="#" class="bg-white/10 hover:bg-white/20 font-bold px-4 py-2 rounded-xl text-s
            transition-colors duration-300">{{ $slot }}</a>
    @break
  @default
    <a href="#" class="bg-white/10 hover:bg-white/20 font-bold px-3 py-1 rounded-xl text-2xs
              transition-colors duration-300">{{ $slot }}</a>
    @break
@endswitch -->