@php
    $words = explode(' ', $contact_heading);
    $lastWord = array_pop($words);
    $headingWithoutLast = implode(' ', $words);
@endphp

<div id="contact" class="section-horizontal-padding section-vertical-padding relative overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 ">
        <!-- Left: Heading -->
        <div class="space-y-4 px-6">
            <h3 class="text-xl/7 sm:text-2xl/10 md:text-4xl/12 uppercase space-y-4 hero-gradient-text font-small leading-tight">
                {{ $headingWithoutLast }}
                <span class="block">{{ $lastWord }}</span>
            </h3>
            <div class="flex gap-1 items-center mb-4">
                <h3 class="text-lg/7 sm:text-xl/10 md:text-3xl/12 uppercase space-y-4 text-mono-secondary font-small leading-tight">
                    {{ $contact_cta }} 
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12l-4-4-4 4m0 0l4 4m-4-4h12" />
                </svg>
            </div>
            <div class="grid grid-cols-2 md:gap-6 sm:gap-4 text-white">
                <!-- Contact -->
                <div>
                    <h4 class="text-2xl font-light tracking-wide text-mono-secondary mb-3">CONTACT</h4>
                    <a href="mailto:web.smm.zty@gmail.com" class="text-secondary hover:underline text-lg">
                        info@macodes.dev
                    </a>
                </div>
            
                <!-- Social Media -->
                <div>
                    <h4 class="text-2xl font-light tracking-wide text-mono-secondary mb-1">SOCIAL MEDIA</h4>
                    <div class="flex items-center space-x-4 text-xl mt-4">
                        <!-- LinkedIn -->
                        <a href="#" class="hover:text-blue-500 text-mono-secondary" aria-label="LinkedIn">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 
                                0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-9h3v9zm-1.5-10.28c-.97 
                                0-1.75-.79-1.75-1.75s.78-1.75 1.75-1.75 1.75.78 
                                1.75 1.75-.78 1.75-1.75 1.75zm13.5 10.28h-3v-4.5c0-1.08-.02-2.47-1.5-2.47s-1.73 
                                1.17-1.73 2.38v4.59h-3v-9h2.89v1.23h.04c.4-.76 
                                1.38-1.56 2.84-1.56 3.03 0 3.59 1.99 3.59 4.58v4.75z"/>
                            </svg>
                        </a>
                
                        <!-- Facebook -->
                        <a href="#" class="hover:text-blue-600 text-mono-secondary" aria-label="Facebook">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.729 0-1.325.597-1.325 
                                1.326v21.348c0 .729.596 1.326 1.325 
                                1.326h11.494v-9.294h-3.125v-3.622h3.125v-2.672c0-3.1 
                                1.894-4.788 4.659-4.788 1.325 0 
                                2.463.099 2.794.143v3.24l-1.918.001c-1.504 
                                0-1.796.715-1.796 1.763v2.313h3.59l-.467 
                                3.622h-3.123v9.294h6.127c.729 0 1.325-.597 
                                1.325-1.326v-21.349c0-.729-.596-1.326-1.325-1.326z"/>
                            </svg>
                        </a>
                
                        <!-- Instagram -->
                        <a href="#" class="hover:text-pink-500 text-mono-secondary" aria-label="Instagram">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 
                                1.97.24 2.43.403a4.92 4.92 0 
                                011.675 1.09 4.92 4.92 0 011.09 
                                1.675c.163.46.347 1.26.403 
                                2.43.058 1.266.07 1.646.07 
                                4.85s-.012 3.584-.07 4.85c-.056 
                                1.17-.24 1.97-.403 2.43a4.92 4.92 
                                0 01-1.09 1.675 4.92 4.92 0 
                                01-1.675 1.09c-.46.163-1.26.347-2.43.403-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.43-.403a4.92 
                                4.92 0 01-1.675-1.09 4.92 4.92 
                                0 01-1.09-1.675c-.163-.46-.347-1.26-.403-2.43-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.056-1.17.24-1.97.403-2.43a4.92 
                                4.92 0 011.09-1.675 4.92 4.92 0 
                                011.675-1.09c.46-.163 1.26-.347 
                                2.43-.403 1.266-.058 1.646-.07 
                                4.85-.07zm0-2.163c-3.257 
                                0-3.667.012-4.947.07-1.281.059-2.153.25-2.91.53a7.19 
                                7.19 0 00-2.6 1.69 7.19 7.19 0 
                                00-1.69 2.6c-.28.757-.471 1.629-.53 
                                2.91-.058 1.28-.07 1.69-.07 
                                4.947s.012 3.667.07 4.947c.059 
                                1.281.25 2.153.53 2.91a7.19 7.19 
                                0 001.69 2.6 7.19 7.19 0 
                                002.6 1.69c.757.28 1.629.471 
                                2.91.53 1.28.058 1.69.07 
                                4.947.07s3.667-.012 
                                4.947-.07c1.281-.059 2.153-.25 
                                2.91-.53a7.19 7.19 0 
                                002.6-1.69 7.19 7.19 0 
                                001.69-2.6c.28-.757.471-1.629.53-2.91.058-1.28.07-1.69.07-4.947s-.012-3.667-.07-4.947c-.059-1.281-.25-2.153-.53-2.91a7.19 
                                7.19 0 00-1.69-2.6 7.19 7.19 
                                0 00-2.6-1.69c-.757-.28-1.629-.471-2.91-.53-1.28-.058-1.69-.07-4.947-.07zm0 
                                5.838a6.162 6.162 0 100 
                                12.324 6.162 6.162 0 000-12.324zm0 
                                10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 
                                1.44 0 11-2.881 0 1.44 
                                1.44 0 012.881 0z"/>
                            </svg>
                        </a>
                
                        <!-- WhatsApp -->
                        <a href="#" class="hover:text-green-500 text-mono-secondary" aria-label="WhatsApp">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 448 512">
                                <path d="M380.9 97.1C339-22.9 174.4-33.4 103.2 50.6 
                                37.3 128.4 37.1 246.1 107.3 321.3l-8.4 84.1 85.3-8.2c70.6 
                                38.3 158.9 24.6 213.5-35.6 61.6-67.2 59.3-172.2-17.8-264.5zm-53.9 
                                204.6c-6.9 19.5-33.7 36.3-46.4 
                                38.6-12 2.3-26.6 3.3-86.2-18.5-72.3-25.2-118.9-112.3-122.5-117.6-3.4-5.3-29.1-39-27.8-74.5 
                                1.3-35.1 22.2-52.1 30.3-59.1 4.3-3.8 9.3-4.8 12.5-4.8h15.4c4.5 
                                0 10.7-.8 16.3 12.4 6.9 16.3 23.3 
                                55.8 25.4 59.8 2 4 3.3 8.6.7 13.8-5.6 
                                11.2-11.5 12.2-17.6 11.6-4.5-.4-9.7-.9-13.9-.6-4.2.3-8.8 
                                1.5-13.3 8.3-4.4 6.7-6.7 15.8-1.4 
                                25.6 5.3 9.8 23.6 40.3 54.5 65.2 37.4 
                                30.8 69 40.5 77.2 44.2 8.2 3.7 15.9 
                                3.2 21.8-1.9 5.7-4.8 20.1-18.3 
                                25.5-24.5 5.4-6.2 9.2-5.1 15.2-3 
                                6 2.1 37.6 17.7 44.1 20.9 6.5 
                                3.2 10.8 4.7 12.4 7.3s1.6 13.5-.7 
                                26.4z"/>
                            </svg>
                        </a>
                
                        <!-- Telegram -->
                        <a href="#" class="hover:text-blue-400 text-mono-secondary" aria-label="Telegram">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 496 512">
                                <path d="M248,8C111,8,0,119,0,256s111,248,248,248s248-111,248-248S385,8,248,8z M372.2,169.2
                                l-47.3,223.2c-3.6,16.1-13.1,20-26.6,12.4l-73.7-54.3l-35.5,34.1c-3.9,3.9-7.2,7.2-14.7,7.2l5.3-74.9l136.4-123
                                c5.9-5.3-1.3-8.3-9.1-3l-168.5,106.2l-72.6-22.7c-15.8-5-16.1-15.8,3.3-23.4l283.3-109.4
                                C364.9,143.7,376.2,151.6,372.2,169.2z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
            </div>
            
        </div>
        

        <!-- Right: Contact Form -->
        <div class="px-6 rounded-xl shadow-md">
            <h3 class="text-xl/7 sm:text-2xl/10 md:text-3xl/12 mb-8 uppercase space-y-4 text-white font-small leading-tight">
                Contact form
            </h3>
            <form action="#" method="POST" class="space-y-4">
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-white">Name</label>
                    <input type="text" id="name" name="name" class="w-full mt-1 text-mono-secondary p-2 border-[1.5px] border-color rounded-2xl" />
                </div>
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-white">Email</label>
                    <input type="email" id="email" name="email" class="w-full mt-1 text-mono-secondary p-2 border-[1.5px] border-color rounded-2xl" />
                </div>
                <div class="space-y-2">
                    <label for="message" class="block text-sm font-medium text-white">Message</label>
                    <input type="text" id="message" name="message" class="w-full mt-1 text-mono-secondary p-2 border-[1.5px] border-color rounded-2xl" />
                </div>
                <button class="gradient-outline-btn mt-2 transition px-[3rem] sm:px-[4rem] py-3 uppercase text-sm">Send</button>
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
