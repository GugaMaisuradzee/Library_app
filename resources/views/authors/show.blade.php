<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Books by {{ $author->name }}
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
                            </thead>
                            <tbody>
                            <tr>
                                <h2 class="text-2xl font-semibold">Books by {{ $author->name }}</h2>
                                <ul>
                                    @forelse($author->books as $book)
                                        <li>{{ $book->title }}</li>
                                    @empty
                                        <p>No books found for {{ $author->name }}</p>
                                    @endforelse
                                </ul>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


