<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="sm:flex flex-basis sm:items-center">
                        <h1 class="font-semibold text-2xl text-gray-800 basis-3/4">
                            {{ __('Recipes') }}
                        </h1>
                        @Auth
                            <a type="button" href="{{ route('recipes.create') }}" class="align-middle bg-blue-200
                            rounded-lg py-2 px-4 basis-1/4 text-center">Create a New Recipe</a>
                        @endauth
                    </div>
                    <br>
                    @foreach($recipes as $recipe)
                        <x-recipe.list-item :recipe="$recipe"></x-recipe.list-item>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
