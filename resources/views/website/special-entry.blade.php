<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add/Edit/Remove Specials') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $special->name }}</td>
                                    <td>{{ $special->description }}</td>
                                    <td>${{ $special->was_price }}</td>
                                    <td>${{ $special->current_price }}</td>
                                    <td>{{ $special->brand }}</td>
                                    <td>
                                        <a href="/admin/specials/{{ $special->id }}/edit" 
                                            class="btn btn-xs btn-primary">Edit</a>
                                        <form method="post" action="/admin/specials/{{ $special->id }}">
                                            @method('post')
                                            @CSRF
                                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="/page/1" class="btn">Go Back</a>
                        <a href="/admin/specials/create" class="btn btn-primary">Add new Special</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
