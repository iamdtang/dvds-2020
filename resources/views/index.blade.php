<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>DVDs</title>
</head>
<body>
    <div class="container">
        <h1>DVDs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dvds as $dvd)
                    <tr>
                        <td>{{$dvd->title}}</td>
                        <td>{{$dvd->genre->name}}</td>
                        <td>{{$dvd->rating->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
