<div id="services"
    class="animate-fade-up section-horizontal-padding section-vertical-padding relative services-gradient overflow-hidden border-b-2 border-color">
    <h3 class="text-2xl sm:text-3xl md:text-5xl uppercase space-y-4 services-gradient-text font-small">
        {{ $heading }}</h3>
    <div class="services mt-[5rem]">
        <div class="relative flex flex-col items-center gap-16">
            <div class="absolute top-0 bottom-0 left-1/2 w-px bg-gray-700 z-0"></div>

            @foreach ($services as $index => $service)
                <div
                    class="relative z-10 w-full max-w-xl px-4 sm:px-0
    {{ $index % 2 == 0 ? 'text-left lg:ml-[-24rem] ml-0' : 'text-left lg:mr-[-24rem] mr-0' }}">
                    <livewire:components.service-card :service="$service" />
                </div>
            @endforeach
        </div>
        <style>
            .services-gradient::before {
                content: '';
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 500px;
                height: 400px;
                background: radial-gradient(circle, rgba(242, 93, 255, 0.15), transparent 70%);
                z-index: 0;
                filter: blur(60px);
                pointer-events: none;
            }

            .services-gradient::after {
                content: '';
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 600px;
                height: 500px;
                background: radial-gradient(circle, rgba(16, 22, 34, 0.3), transparent 70%);
                z-index: 0;
                filter: blur(100px);
                pointer-events: none;
            }

            @media (max-width: 640px) {

                .services-gradient::before,
                .services-gradient::after {
                    width: 250px;
                    height: 200px;
                }
            }
        </style>

    </div>
</div>
