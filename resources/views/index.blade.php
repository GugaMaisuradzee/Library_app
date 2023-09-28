<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
            <br>
            <br>
            <a href="{{ route('authors') }}">View the authors</a>
            <br>
            <a href="{{ route('create') }}">+ Create New Book</a>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Year</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td><a href="{{ route('show', $book) }}">{{ $book->title }}</a></td>
                                    <td>{{ $book->year }}</td>
                                    <td>{{ $book->status }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

