<!DOCTYPE html>
<html lang="id">
<head>
    <title>Home</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
    </style>
</head>
<body>
    <h2>Selamat datang, {{ Auth::user()->name }}</h2>
    
    <form action="/logout" method="GET">
        <button type="submit">Logout</button>
    </form>
</body>
</html>