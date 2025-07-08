<div class="rounded-xl service-card-gradient p-4 sm:p-6 shadow-md border-[2px] border-color">
    <div class="flex items-center gap-4 mb-3">
        <div class="w-6 h-6 text-blue-500">
            {!! $service['svg'] !!}
        </div>
        {{-- <h3 class="text-3xl text-mono-primary font-semibold">{{ $service['title'] }}</h3> --}}
        <h3 class="text-xl sm:text-2xl md:text-3xl text-mono-primary font-semibold">{{ $service['title'] }}</h3>
    </div>
    <p class="text-mono-secondary text-sm leading-relaxed">
        {{-- {{ $service['description'] }} --}}
        <p class="text-sm sm:text-base text-mono-secondary leading-relaxed">{{ $service['description'] }}</p>
    </p>
</div>
