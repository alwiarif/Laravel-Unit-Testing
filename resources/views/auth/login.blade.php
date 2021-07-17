<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    @if (session('message'))

        {{ session('message') }}
        
    @endif
    <form action="/login" method="post">
    
        @csrf

        <label for="email">Email:
            <input type="email" name="email" id="email">
        </label>
        <label for="password">Password:
            <input type="password" name="password" id="password">
        </label>

        <input type="submit" value="Login">

    </form>
    
</body>
</html>