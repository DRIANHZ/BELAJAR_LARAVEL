<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>

<body>

    <h1>biodata</h1>
    <p>nama : {{ $nama }}</p>
    <p>Mata Pelajaran</p>
    <ul>

        @foreach ($matkul as $m)
            <li>{{ $m }}</li>
        @endforeach

    </ul>
    </p>
    <a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
</body>

</html>
