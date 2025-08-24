@php
    $words = explode(' ', $contact_heading);
    $lastWord = array_pop($words);
    $headingWithoutLast = implode(' ', $words);
@endphp

<div id="contact" class="animate-fade-up section-horizontal-padding section-vertical-padding relative overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 ">
        <!-- Left: Heading -->
        <div class="space-y-4 px-6">
            <h3
                class="text-xl/7 sm:text-2xl/10 md:text-4xl/12 uppercase space-y-4 hero-gradient-text font-small leading-tight">
                {{ $headingWithoutLast }}
                <span class="block">{{ $lastWord }}</span>
            </h3>
            <div class="flex gap-1 items-center mb-4">
                <h3
                    class="text-lg/7 sm:text-xl/10 md:text-3xl/12 uppercase space-y-4 text-mono-secondary font-small leading-tight">
                    {{ $contact_cta }}
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12l-4-4-4 4m0 0l4 4m-4-4h12" />
                </svg>
            </div>
            <div class="grid grid-cols-2 md:gap-6 sm:gap-4 text-white">
                <!-- Contact -->
                <div>
                    <h4 class="text-2xl font-light tracking-wide text-mono-secondary mb-3">CONTACT</h4>
                    <a href="mailto:info@macodes.dev" class="text-secondary hover:underline text-lg">
                        info@macodes.dev
                    </a>
                </div>

                <!-- Social Media -->
                <div>
                    <h4 class="text-2xl font-light tracking-wide text-mono-secondary mb-1">LINKS</h4>
                    <div class="flex items-center space-x-4 text-xl mt-4">
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/macodes/" target="_blank"
                            class="text-mono-secondary transition-transform duration-300 hover:scale-110" aria-label="Linkedin">
                            <svg class="w-6 h-6 text-mono-secondary" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                    clip-rule="evenodd" />
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                            </svg>
                        </a>


                        <!-- Whatsapp -->
                        <a href="https://wa.me/923234183909" target="_blank"
                            class=" text-mono-secondary transition-transform duration-300 hover:scale-110" aria-label="Whatsapp">
                            <svg class="w-6 h-6 text-mono-secondary" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                    clip-rule="evenodd" />
                                <path fill="currentColor"
                                    d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                            </svg>

                        </a>


                        <!-- Github -->
                        <a href="https://github.com/mabdullah231" target="_blank"
                            class="text-mono-secondary transition-transform duration-300 hover:scale-110" aria-label="Github">
                            <svg class="w-6 h-6 text-mono-secondary" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </a>

                    </div>
                </div>

            </div>

        </div>


        <!-- Right: Contact Form -->
        <div class="px-6 rounded-xl shadow-md">
            <h3
                class="text-xl/7 sm:text-2xl/10 md:text-3xl/12 mb-8 uppercase space-y-4 text-white font-small leading-tight">
                Contact form
            </h3>
            <form action="#" method="POST" class="space-y-4">
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-white">Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full mt-1 text-mono-secondary p-2 border-[1.5px] border-color rounded-2xl 
                               transition duration-300 ease-in-out 
                               hover:border-white hover:shadow-[0_0_10px_rgba(255,255,255,0.6)]" />
                </div>
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-white">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full mt-1 text-mono-secondary p-2 border-[1.5px] border-color rounded-2xl 
                               transition duration-300 ease-in-out 
                               hover:border-white hover:shadow-[0_0_10px_rgba(255,255,255,0.6)]" />
                </div>
                <div class="space-y-2">
                    <label for="message" class="block text-sm font-medium text-white">Message</label>
                    <input type="text" id="message" name="message"
                        class="w-full mt-1 text-mono-secondary p-2 border-[1.5px] border-color rounded-2xl 
                               transition duration-300 ease-in-out 
                               hover:border-white hover:shadow-[0_0_10px_rgba(255,255,255,0.6)]" />
                </div>
                <button
                    class="gradient-outline-btn mt-2 transition px-[3rem] sm:px-[4rem] py-3 uppercase text-sm">Send</button>
            </form>
            
        </div>
        <style>
            #contact::before {
                content: '';
                position: absolute;
                left: 10%;
                top: 75%;
                transform: translate(-50%, -50%);
                width: 500px;
                height: 400px;
                background: radial-gradient(circle, rgba(45, 89, 179, 0.527), transparent 70%);
                z-index: 0;
                filter: blur(100px);
                pointer-events: none;
            }

            #contact::after {
                content: '';
                position: absolute;
                left: 10%;
                top: 75%;
                transform: translate(-50%, -50%);
                width: 600px;
                height: 500px;
                background: radial-gradient(circle, rgba(16, 22, 34, 0.3), transparent 70%);
                z-index: 0;
                filter: blur(100px);
                pointer-events: none;
            }

            @media (max-width: 640px) {

                #contact::before,
                #contact::after {
                    width: 250px;
                    height: 200px;
                }
            }
        </style>
    </div>
</div>
