@props(['employer', 'wide' => '90'])

<!-- <img src="http://picsum.photos/seed/{{ rand(0, 1000)}}/{{ $wide }}" alt="" class="rounded-xl"/> -->

@if($employer->logo && substr($employer->logo, 0, 4) === 'logo')
  <img src="{{ asset('storage/'.$employer->logo) }}" alt="" class="rounded-xl" width="{{ $wide }}"/>
@else
  <img src="http://picsum.photos/seed/{{ rand(0, 1000)}}/{{ $wide }}" alt="" class="rounded-xl"/>
@endif