<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang {{ $first_name }}</title>
</head>
<body>
    <h1>Selamat Datang {{ $first_name }} {{ $last_name }}!</h1>
    <h2>Terima kasih telah bergabung di SanberBook. Social Media kita bersama!</h2>
    <a href="{{ url('/') }}">Kembali ke Home</a>
</body>
</html>
