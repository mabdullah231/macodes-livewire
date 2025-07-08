<div class="section-horizontal-padding pt-[4vh]">
    <header class="border-[2px] border-color rounded-2xl w-full py-6 px-6 flex justify-between items-center">
        <!-- Brand -->
        <h3
            class="text-mono-primary text-lg hover:text-secondary transition duration-150 uppercase font-light cursor-pointer">
            {{ $brand }}
        </h3>

        <!-- Hamburger (mobile only) -->
        <button wire:click="toggle" class="md:hidden cursor-pointer text-mono-secondary">
            @if (!$open)
                <!-- Hamburger icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>


            @else
                <!-- X icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            @endif
        </button>

        <!-- Desktop Links -->
        <ul class="hidden md:flex space-x-6 text-md">
            @foreach ($navLinks as $link)
                <li>
                    <a href="#{{ $link->link }}"
                        class="text-mono-secondary transition duration-150 hover:text-secondary uppercase cursor-pointer">
                        {{ $link->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </header>

    <div class="md:hidden transition-all duration-500 ease-in-out overflow-hidden mt-2 rounded-2xl px-6
           {{ $open ? 'border-[2px] border-color pt-4 pb-4' : 'border-[2px] border-hidden-color pt-0 pb-0' }}"
        style="{{ $open ? 'max-height: 500px;' : 'max-height: 0;' }}">
        <ul class="space-y-4">
            @foreach ($navLinks as $link)
                <li>
                    <a href="{{ $link->link }}"
                        class="block text-mono-secondary transition duration-150 hover:text-secondary uppercase">
                        {{ $link->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
