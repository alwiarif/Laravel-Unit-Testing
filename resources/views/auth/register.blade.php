<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

    <form action="/register" method="post">
    
        @csrf

        <label for="name">name:
            <input type="text" name="name" id="name">
        </label>

        <label for="email">Email:
            <input type="email" name="email" id="email">
        </label>
        <label for="password">Password:
            <input type="password" name="password" id="password">
        </label>
        <label for="confirm_password">Confirm Password:
            <input type="password" name="confirm_password" id="confirm_password">
        </label>

        <input type="submit" value="Kirim">

    </form>
    
</body>
</html>