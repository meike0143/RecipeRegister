<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('recipes.update', $recipe) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <br>
                        <h2 class="font-semibold text-xl text-gray-800">Edit the recipe</h2>
                        <p>Please fill out all the form fields and click 'Submit'</p>
                        <br>

                        <div class="p-2">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $recipe)"
                                          required autofocus autocomplete="name" placeholder="Enter the journey's name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="slug" :value="__('Slug')" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug', $recipe)"
                                          required autofocus autocomplete="slug" placeholder="Enter the journey's slug" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-recipe.text-area name="description" rows="5" class="mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm"
                                                 placeholder="Enter the journey's description..."
                                                 value="{{ old('description', $recipe) }}" ></x-recipe.text-area>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="preparation_time" :value="__('Preparation time')" />
                            <x-text-input id="preparation_time" name="preparation_time" type="text" class="mt-1 block w-full" :value="old('preparation_time', $recipe)"
                                          required autofocus autocomplete="preparation_time" placeholder="Enter the journey's preparation time" />
                            <x-input-error class="mt-2" :messages="$errors->get('preparation_time')" />
                        </div>
                        <div class="sm:flex sm:items-center">
                            <button type="submit" class="btn bg-green-600 rounded m-1 py-1 px-4">Save</button>
                            <a type="button" href="{{ route('recipes.show', $recipe) }}" class="btn bg-yellow-200 rounded m-1 py-1 px-4">Cancel</a>
                            <button type="reset" class="btn bg-red-500 rounded m-1 py-1 px-4">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
