<div class="md:pl-[9vw] md:pr-0 px-[6vw] md:pt-[3rem] pt-[0rem]  relative gradient-bg border-b-2 border-color">
    <div class="mx-auto grid min-h-[35rem] grid-cols-1 md:grid-cols-2 items-end gap-0 md:gap-5">
        <!-- Changed items-center to items-end -->
        {{-- Left Side --}}
        <div
            class="order-2 md:order-1 md:mb-40 md:border-none md:p-0 border-[2px] border-color md:mx-0  ml-0   text-center md:text-start p-5 mt-[-100px] mb-20 md:mt-0 bg-[#101622] md:bg-transparent  z-30 rounded-lg">
            <!-- Added order classes -->
            <div class="text-4xl sm:text-5xl md:text-7xl uppercase space-y-4 hero-gradient-text font-medium">
                <h3 id="typed-text" wire:ignore></h3>
                <h3>Developer</h3>
            </div>

            <p class="text-lg sm:text-xl text-mono-secondary md:mt-[4rem] mt-[1rem] mb-[1.5rem] w-full">
                I'm Muhammad Abdullah, a <span class="text-secondary">developer</span> with passion for building
                modern web applications, scalable SaaS solutions, AI
                based applications.
            </p>

            <a href="#portfolio"
                class="gradient-outline-btn transition px-[2rem] sm:px-[3rem] py-3 uppercase text-sm">View My
                Work</a>
        </div>

        <div class="relative flex items-center mt-5 justify-center order-1 md:order-2"> <!-- Added order classes -->
            <!-- Gradient circles behind -->
            <div class="absolute inset-0 gradient-circles z-0"></div>

            <!-- Container for aligned images -->
            <div class="relative w-full h-full flex items-end justify-center">
                <!-- Raster image (behind vector) -->
                <img src="/images/heroRaster.png" alt="Hero Raster"
                    class="absolute h-[90%] object-contain object-center opacity-50 z-10">

                <!-- Vector image (yourself on top) -->
                <img src="{{ asset('images/heroVector.png') }}" alt="Hero Vector"
                    class="relative z-20 w-full md:h-[35rem] h-[25rem] object-contain">
            </div>
        </div>

        <style>
            .gradient-bg::before {
                content: '';
                position: absolute;
                right: 5%;
                bottom: 20%;
                width: 400px;
                height: 300px;
                background: radial-gradient(circle, rgba(241, 46, 142, 0.2), transparent 70%);
                z-index: 0;
                filter: blur(40px);
            }

            .gradient-bg::after {
                content: '';
                position: absolute;
                right: 25%;
                bottom: 20%;
                width: 400px;
                height: 300px;
                background: radial-gradient(circle, rgba(93, 174, 255, 0.2), transparent 70%);
                z-index: 0;
                filter: blur(40px);
            }

            @media (max-width: 640px) {
                .gradient-bg::before {
                    width: 250px;
                    height: 200px;
                }

                .gradient-bg::after {
                    width: 250px;
                    height: 200px;
                }
            }
        </style>
    </div>
</div>

<!-- Script remains exactly the same -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const typedText = document.getElementById('typed-text');
        const roles = ['SaaS Solution', 'AI Chatbot', 'AI Agents', 'Full Stack'];
        let roleIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typingTimeout;

        // Initialize with &nbsp; to prevent empty space
        typedText.innerHTML = '&nbsp;';

        function type() {
            const currentRole = roles[roleIndex];
            let displayText;

            if (isDeleting) {
                charIndex--;
                displayText = currentRole.substring(0, charIndex);
            } else {
                charIndex++;
                displayText = currentRole.substring(0, charIndex);
            }

            // Use innerHTML and fallback to &nbsp; when empty
            typedText.innerHTML = displayText || '&nbsp;';

            if (!isDeleting && charIndex < currentRole.length) {
                typingTimeout = setTimeout(type, 100);
            } else if (isDeleting && charIndex > 0) {
                typingTimeout = setTimeout(type, 50);
            } else {
                isDeleting = !isDeleting;
                if (!isDeleting) {
                    roleIndex = (roleIndex + 1) % roles.length;
                }
                typingTimeout = setTimeout(type, isDeleting ? 1500 : 500);
            }
        }

        type();

        // Clean up on Livewire updates
        document.addEventListener('livewire:update', function() {
            clearTimeout(typingTimeout);
            typedText.innerHTML = '&nbsp;'; // Reset to &nbsp; on update
        });
    });
</script>
