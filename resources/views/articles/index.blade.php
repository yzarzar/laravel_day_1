<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}">+ New Article</a>
    <ul>
        @foreach ($articles as $data)
            <li>
                <h1>{{ $data['title'] }}</h1>
                <p>{{ $data['content'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
