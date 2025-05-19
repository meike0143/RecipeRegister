<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="sm:flex flex-basis">
                        <h1 class="font-semibold text-2xl text-gray-800 basis-5/6">{!! $recipe->name !!}</h1>
                        @Auth
                            <div class="flex flex-row basic-1/6">
                                <a href="{{ route('recipes.edit', $recipe) }}" class="align-middle bg-yellow-200 rounded-lg
                            px-5 py-2 mx-1">Edit</a>
                                <a href="{{ route('recipes.delete', $recipe) }}" class="align-middle bg-red-400 rounded-lg
                            px-5 py-2 mx-1" >Delete</a>
                            </div>
                        @endauth
                    </div>
                    <br>
                    <hr class="py-3">
                    <p>
                        {!! $recipe->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
