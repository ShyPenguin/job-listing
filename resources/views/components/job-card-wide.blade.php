@props(['job'])

<x-panel class="flex gap-x-6">
  <div>
    <x-employer-logo wide="100"/>
  </div>


  <div class="flex-1 flex flex-col">
    <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
    <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300 mt-3">{{ $job->title }}</h3>
    <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule . " - " . $job->salary }}</p>
  </div>

  <div>
    @foreach ($job->tags as $tag)
      <x-tag size="l" :tag="$tag" />
    @endforeach
  </div>
</x-panel>