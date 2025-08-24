<div id="skills"
    class="animate-fade-up section-horizontal-padding section-vertical-padding relative skills-gradient overflow-hidden border-b-2 border-color">
    <h3 class="text-2xl sm:text-3xl md:text-5xl uppercase space-y-4 services-gradient-text font-small">
        {{ $skill_heading }}</h3>
    <div class="skills mt-[5rem]">
        <h3 class="text-3xl text-center text-mono-secondary mb-8">
            The skills, tools and technologies I use:
        </h3>

        <div class="flex flex-wrap justify-center gap-6 max-w-4xl mx-auto">
            @foreach ($skills as $skill)
                <div class="relative group">
                    <img src="{{ $skill }}" alt="Skill logo"
                        class="w-16 h-16 object-contain transition-transform duration-300 group-hover:scale-110 relative z-10" />
                    
                    <!-- Glow effect -->
                    <div class="absolute inset-0 rounded-lg bg-white/10 blur-md opacity-0 group-hover:opacity-100 transition duration-300 z-0"></div>
                </div>
            @endforeach
        </div>
        
        <style>
            .skills-gradient::before {
                content: '';
                position: absolute;
                left: 30%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 500px;
                height: 400px;
                background: radial-gradient(circle, rgba(45, 89, 179, 0.527), transparent 70%);
                z-index: 0;
                filter: blur(60px);
                pointer-events: none;
            }

            .skills-gradient::after {
                content: '';
                position: absolute;
                left: 40%;
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

                .skills-gradient::before,
                .skills-gradient::after {
                    width: 250px;
                    height: 200px;
                }
            }
        </style>
    </div>


</div>
