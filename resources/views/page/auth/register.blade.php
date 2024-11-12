<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Baru</title>
    <meta name="author" content="Libertus lin">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="description" content="Tugas membuat halaman website yang bisa diarahkan ke halaman daftar member">
</head>
<body>
    <div id="content">
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="{{ url('/simpan') }}" method="post">
            @csrf
            <div>
                <label for="first_name">First Name:</label> <br>
                <input type="text" id="first_name" name="first_name" minlength="3" autofocus required>
            </div> <br>
            <div>
                <label for="last_name">Last Name:</label> <br>
                <input type="text" id="last_name" name="last_name" required>
            </div> <br>
            <div>
                <label for="gender">Gender:</label> <br>
                <input type="radio" name="gender">Male <br>
                <input type="radio" name="gender">Female <br>
                <input type="radio" name="gender">Other
            </div> <br>
            <div>
                <label for="nationallity">Nationallity:</label> <br>
                <select name="nationallity">
                    <option value="Indonesian">Indonesian</option>
                    <option value="Singapura">Singapura</option>
                    <option value="Malaysian">Malaysian</option>
                    <option value="Korean">Korean</option>
                </select>
            </div> <br>
            <div>
                <label for="language_spoken">Language Spoken:</label> <br>
                <input type="checkbox" name="language_spoken">Bahasa Indonesia <br>
                <input type="checkbox" name="language_spoken">English <br>
                <input type="checkbox" name="language_spoken">Other
            </div> <br>
            <div>
                <label for="bio">Bio:</label> <br>
                <textarea name="bio" id="bio" rows="8"></textarea>
            </div>
            <div>
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>
