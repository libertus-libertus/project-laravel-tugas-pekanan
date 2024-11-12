<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <meta name="author" content="Libertus lin">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="description" content="Tugas membuat halaman website yang bisa diarahkan ke halaman daftar member">
</head>
<body>
    <div id="content">
        <h1>SaberBook</h1>
        <h2>Social Media Developer Santai Berkualitas</h2>
        <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>

        <h3>Benefit Join di SanberBook</h3>
        <ul>
            <li>Mendapatkan motivasi dari sesama developer</li>
            <li>Sharing knowledge dari para mastah Sanber</li>
            <li>Dibuat oleh calon web developer terbaik</li>
        </ul>

        <h3>Cara Bergabung di SanberBook</h3>
        <ol>
            <li>Mengunjungi Website ini</li>
            <li>Mendaftar di <a href="{{ url('/register') }}">Form Sign Up</a></li>
            <li>Selesai!</li>
        </ol>
    </div>
</body>
</html>
