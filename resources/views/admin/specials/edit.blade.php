<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add/Edit/Remove Specials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="/admin/specials/{{ $special->id }}">
                                @method('patch') <!-- This is a patch root -->
                                @CSRF
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input value="{{ $special->name }}" v-model="name" type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea v-model="description" type="text" class="form-control" id="description" placeholder="Enter description" name="description" required>{{ $special->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand:</label>
                                    <input value="{{ $special->brand }}" v-model="brand" type="text" class="form-control" id="brand" placeholder="Enter new brand" name="brand" required>
                                </div>
                                <div class="form-group">
                                    <label for="meswas_pricesage">Old Price:</label>
                                    <input value="{{ $special->was_price }}" step="0.01" v-model="was_price" type="number" class="form-control" id="was_price" placeholder="Enter old price" name="was_price" required>
                                </div>
                                <div class="form-group">
                                    <label for="current_price">New Price:</label>
                                    <input value="{{ $special->current_price }}" step="0.01" v-model="current_price" type="number" class="form-control" id="current_price" placeholder="Enter new price" name="current_price" required>
                                </div>

                                <a href="/admin/specials" class="btn btn-default">Go Back</a>
                                <button v-if="!formSending" type="submit" class="btn btn-primary">Update Special</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
