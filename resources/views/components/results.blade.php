<x-layout>
  <x-page-heading>Results</x-page-heading>

  <div class="space-y-6">
  @foreach ( $jobs as $job)
    <x-job-card-wide :job="$job"/>
  @endforeach
  
  @if ($jobs->isEmpty())
    <p>No jobs found.</p>
  @endif
  </div>

</x-layout>