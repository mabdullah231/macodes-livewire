<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-8 mt-[5rem]">
    @foreach ($items as $item)
        <div class="bg-[#0F0F1C] text-white rounded-xl overflow-hidden shadow-md transition-transform hover:-translate-y-1 hover:shadow-lg">
            <div class="p-4">
                <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="rounded-md w-full h-48 object-contain" />
            </div>
            <div class="p-4 border-t border-white/10 bg-gray-950">
                <h4 class="text-lg font-semibold mb-2">{{ $item['title'] }}</h4>
                <p class="text-sm text-white/70">{{ $item['description'] }}</p>
                {{-- <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm italic">Website Coding</span>
                    <a href="{{ $item['link'] }}" target="_blank" class="text-white hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M14 3h7v7m0 0L10 21l-7-7L21 3z"/>
                        </svg>
                    </a>
                </div> --}}
            </div>
        </div>
    @endforeach
</div>
