<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add/Edit/Remove Specials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Was</th>
                                    <th>Now</th>
                                    <th>Brand</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specials as $special)
                                <tr>
                                    <td>{{ $special->name }}</td>
                                    <td>{{ $special->description }}</td>
                                    <td>${{ $special->was_price }}</td>
                                    <td>${{ $special->current_price }}</td>
                                    <td>{{ $special->brand }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/" class="btn btn-primary">Add new Special</a>
                    </div>
                </div>
                

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="post" action="/admin/specials/create">
                                @CSRF
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input @keyup="buttonText = name" v-model="name" type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea v-model="description" type="text" class="form-control" id="description" placeholder="Enter description" name="description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="brand">Brand:</label>
                                    <input value="{{ $special->brand }}" v-model="brand" type="text" class="form-control" id="brand" placeholder="Enter new brand" name="brand" required>
                                </div>
                                <div class="form-group">
                                    <label for="meswas_pricesage">Old Price:</label>
                                    <input step="0.01" v-model="was_price" type="number" class="form-control" id="was_price" placeholder="Enter old price" name="was_price" required>
                                </div>
                                <div class="form-group">
                                    <label for="current_price">New Price:</label>
                                    <input step="0.01" v-model="current_price" type="number" class="form-control" id="current_price" placeholder="Enter new price" name="current_price" required>
                                </div>

                                <a href="/admin/specials" class="btn btn-default">Go Back</a>
                                <button v-if="!formSending" type="submit" class="btn btn-primary">Add New Special</button>
                                <!-- <button v-if="!!formSending" class="btn btn-primary">Updating Special...</button> -->
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
