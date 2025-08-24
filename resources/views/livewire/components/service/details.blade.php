<div class="animate-fade-up section-horizontal-padding section-vertical-padding border-b-2 border-color">
    <div class="bg-primary ">
        <h2 class="text-2xl font-semibold hero-gradient-text mb-4">
            About {{ $service['title'] }}
        </h2>

        <p class="text-mono-secondary leading-relaxed mb-6">
            {{ $service['details'] }}
        </p>

        <div class="flex flex-wrap gap-2">
            @foreach ($service['highlights'] as $highlight)
                <span class="px-3 py-1 service-card-gradient text-white text-sm hover:shadow-[0_0_10px_rgba(255,255,255,0.6)] transition duration-300 hover:cursor-pointer rounded-full shadow">
                    {{ $highlight }}
                </span>
            @endforeach
        </div>
    </div>
</div>
