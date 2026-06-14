<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>
<body>

<h1>Movies</h1>

<a href="{{ route('movies.create') }}">
    Add movie
</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Genre</th>
        <th>Director</th>
        <th>Year</th>
        <th>Rating</th>
    </tr>

    @foreach($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->genre->name }}</td>
            <td>{{ $movie->director }}</td>
            <td>{{ $movie->release_year }}</td>
            <td>{{ $movie->rating }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>