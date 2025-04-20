<!DOCTYPE html>
<html>
<head>
    <title>Daftar Makanan Favorit</title>
</head>
<body>
    <h1>Daftar Makanan Favorit</h1>

    <ul>
        @foreach ($foods as $food)
            <li>{{ $food->favorite_food }}</li>
        @endforeach
    </ul>
</body>
</html>
