<!DOCTYPE html>
<html>
<head>
    <title>Create movie</title>
</head>
<body>

<h1>Create movie</h1>

<form method="POST" action="{{ route('movies.store') }}">
    @csrf

    <div>
        <label>Genre</label>

        <select name="genre_id">
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <input
            type="text"
            name="title"
            placeholder="Title"
        >
    </div>

    <br>

    <div>
        <input
            type="text"
            name="director"
            placeholder="Director"
        >
    </div>

    <br>

    <div>
        <input
            type="number"
            name="release_year"
            placeholder="Year"
        >
    </div>

    <br>

    <div>
        <input
            type="number"
            step="0.1"
            name="rating"
            placeholder="Rating"
        >
    </div>

    <br>

    <button type="submit">
        Save
    </button>
</form>

</body>
</html>