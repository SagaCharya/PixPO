@props(['job'])
<x-panal class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employee->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-400 text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
            {{ $job->title }}
        </a>
        </h3>
        <p class='text-sm mt-4'>{{ $job->salary }}</p>
    </div>
    <div class="flex  justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                
            
            <x-tag size='small' :$tag />
            @endforeach
        </div>
        <x-employeer-logo :employee="$job->employee" :width="42"/>

    </div>
</x-panal>