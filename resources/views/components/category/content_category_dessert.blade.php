<div class="container mx-auto text-4xl text-black font-bold py-8 pl-16">
    Kategori Dessert
</div>
<div class="bg-white flex items-center justify-around">
    <div class="grid grid-cols-1 sm:grid-cols-4 gap-8 mx-16">
        @foreach ($dataRecipes as $recipe)            
            <div onclick="window.location='{{ route('recipe.show', ['id' => $recipe['id'] ?? 0]) }}'" class="flex items-center bg-white border border-purple-400 rounded-lg shadow-md relative cursor-pointer">
                <div class="bg-white h-80 rounded-lg shadow-lg p-4 text-center">
                    <img src="{{ $recipe['image'] ?? asset('asset/default_image.svg')}}" class="w-64 h-48 rounded-lg object-cover">    
                    <h3 class="text-lg font-semibold mt-2">{{ $recipe['title'] ?? 'No Title' }}</h3>
                  </div>
            </div>
        @endforeach
    </div>
</div>