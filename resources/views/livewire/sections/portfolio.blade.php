<div id="portfolio" class="section-horizontal-padding section-vertical-padding relative overflow-hidden border-[2px] border-color">
    <h3 class="text-2xl sm:text-3xl md:text-5xl uppercase space-y-4 services-gradient-text font-small">
        {{ $portfolio_heading }}</h3>
        @livewire('components.portfolio-card')
    <style>
                    #portfolio::before {
                content: '';
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 500px;
                height: 400px;
                background: radial-gradient(circle, rgba(45, 89, 179, 0.527), transparent 70%);
                z-index: 0;
                filter: blur(70px);
                pointer-events: none;
            }

            #portfolio::after {
                content: '';
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 600px;
                height: 500px;
                background: radial-gradient(circle, rgba(16, 22, 34, 0.3), transparent 70%);
                z-index: 0;
                filter: blur(70px);
                pointer-events: none;
            }

            @media (max-width: 640px) {

                #portfolio::before,
                #portfolio::after {
                    width: 250px;
                    height: 200px;
                }
            }
    </style>
</div>
