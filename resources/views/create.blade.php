<div class="container">
        <h2>Create a New Book</h2>

        <form method="POST" action="{{ route('store') }}">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="year">Year:</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="open">Open</option>
                    <option value="held">Held</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            @endif
        </form>
    </div>

