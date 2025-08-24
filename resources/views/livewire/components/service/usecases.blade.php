<div class="animate-fade-up section-vertical-padding section-horizontal-padding" id="usecases">
    <h2 class="text-2xl font-semibold services-gradient-text text-center mb-8">
        Use Cases
    </h2>
    <div class="grid sm:grid-cols-3 gap-6">
        @forelse($service['usecases'] as $case)
            <div class="p-6 rounded-2xl service-card-gradient border border-color">
                <h3 class="text-lg font-medium text-mono-primary mb-2">{{ $case }}</h3>
                <p class="text-mono-secondary">
                    Discover how {{ strtolower($service['title']) }} powers {{ strtolower($case) }} with efficiency and innovation.
                </p>
            </div>
        @empty
            <p class="text-center text-mono-secondary">No use cases available.</p>
        @endforelse
    </div>
</div>