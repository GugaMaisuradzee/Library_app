<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Book {{ $book->name }}
            <br>
            <br>
            <a href="{{ route('index') }}">View the books</a>
            <br>
            <a href="{{ route('create') }}">+ Create New Book</a>
            <form method="post" action="{{ route('destroy', $book) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Book</button>
            </form>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">

                        <table class="table" style="margin: 20px">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Year</th>
                                <th>Status</th>
                                <th>Author</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->year }}</td>
                                <td>{{ $book->status }}</td>
                                <td>
                                    @foreach($book->authors as $author)
                                        {{ $author->name }}
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



