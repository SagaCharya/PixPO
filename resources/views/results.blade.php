<x-layout>
    <x-page-heading> Results</x-page-heading>
    <div class=" space-y-6">
        @if ($jobs)
            @foreach ($jobs as $job)
            <x-job-card-wide :$job />
            @endforeach
        @endif
        @if($jobs->isEmpty())
            <p class="text-center text-2xl text-bold">No jobs found</p>
        @endif
    </div>
    
</x-layout>