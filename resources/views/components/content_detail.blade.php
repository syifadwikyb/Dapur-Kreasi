<div class="max-w-6xl mx-auto">
    <div class="overflow-hidden flex justify-center">
        <div class="w-1/2 p-6">
            <h2 class="text-2xl font-semibold mb-2">{{ $dataRecipes['title'] ?? 'No Title' }}</h2>
            <p class="text-gray-600 mb-4">By Fausta Raihan M.</p>
            <hr>
            <p class="text-gray-700 mb-4">{{ strip_tags($dataRecipes['summary'] ?? 'No Summary') }}</p>
            <div class="flex items-center space-x-2">
                <span class="bg-gray-200 text-orange-600 px-6 py-2 gap-2 rounded-full flex items-center">
                    <img src="{{ asset('asset/time.svg') }}" alt="" class="h-5 w-5">
                    <p class="text-lg font-semibold">{{ $dataRecipes['readyInMinutes'] ?? '-' }} Menit</p>
                </span>
            </div>
        </div>

        <div class="w-1/2 p-6 flex flex-col items-center justify-center">
            <div class="rounded-lg">
                <img src="{{ $dataRecipes['image'] ?? asset('asset/default_image.svg') }}" class="w-[32rem] h-72 rounded-lg"
                    alt="">
            </div>
            <div class="mt-6 flex space-x-4">
                <button class="bg-gray-200 text-orange-600 px-6 py-2 gap-2 rounded-full flex items-center">
                    <img src="{{ asset('asset/save.svg') }}" alt="" class="h-5 w-5">
                    <p class="text-lg font-semibold">Favorite</p>
                </button>
                <button class="bg-gray-200 p-4 rounded-full flex items-center">
                    <img src="{{ asset('asset/share.svg') }}" alt="" class="h-5 w-5">
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto mb-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-xl font-bold mb-4">Alat dan Bahan</h2>
            <hr class="border-t border-gray-300 mb-4">
            <ul class="space-y-3">
                @php
                    $counter = 1; 
                @endphp
                @foreach ($dataRecipes['extendedIngredients'] as $ingredients)
                    <li class="flex items-start">
                        <div class="flex-shrink-0 w-6 h-6 bg-orange-500 text-white font-bold rounded-full flex items-center justify-center">
                            {{ $counter }} 
                        </div>
                        <p class="ml-3 text-gray-700">
                            {{ $ingredients['original'] }}
                        </p>
                    </li>
                    @php
                        $counter++; 
                    @endphp
                @endforeach
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-4">Langkah-Langkah</h2>
            <hr class="border-t border-gray-300 mb-4">
            <ul class="space-y-3">
                @php
                    $counter = 1; 
                @endphp
                @foreach ($dataRecipes['analyzedInstructions'][0]['steps'] as $instructions)
                    <li class="flex items-start">
                        <div class="flex-shrink-0 w-6 h-6 bg-orange-500 text-white font-bold rounded-full flex items-center justify-center">
                            {{ $counter }} 
                        </div>
                        <p class="ml-3 text-gray-700">
                            {{ $instructions['step'] }}
                        </p>
                    </li>
                    @php
                        $counter++; 
                    @endphp
                @endforeach
            </ul>
        </div>
    </div>
</div>
