<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('recipes.store') }}" method="POST">
                        @csrf
                        <br>
                        <h2 class="font-semibold text-xl text-gray-800">Create a new recipe</h2>
                        <p>Please fill out all the form fields and click 'Submit'</p>
                        <br>

                        <div class="p-2">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')"
                                          required autofocus autocomplete="name" placeholder="Enter the recipe's name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="slug" :value="__('Slug')" />
                            <x-text-input id="slug" name="slug" type="text" class="mt-1 block w-full" :value="old('slug')"
                                          required autofocus autocomplete="slug" placeholder="Enter the recipe's slug" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-recipe.text-area name="description" rows="5" class="mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm"
                                                 placeholder="Enter the recipe's description..."
                                                 value="{{ old('description') }}" ></x-recipe.text-area>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>
                        <div class="p-2">
                            <x-input-label for="preparation_time" :value="__('Preparation time')" />
                            <x-text-input id="preparation_time" name="preparation_time" type="text" class="mt-1 block w-full" :value="old('preparation_time')"
                                          required autofocus autocomplete="preparation_time" placeholder="Enter the recipe's preparation time" />
                            <x-input-error class="mt-2" :messages="$errors->get('preparation_time')" />
                        </div>
                        <div class="sm:flex sm:items-center m-5 gap-4">
                            <button type="submit" class="btn bg-green-600 rounded m-1 py-2 px-8">Save</button>
                            <a type="button" href="{{ route('recipes.index') }}" class="btn bg-yellow-200 rounded m-1 py-2 px-8">Cancel</a>
                            <button type="reset" class="btn bg-red-500 rounded m-1 py-2 px-8">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
