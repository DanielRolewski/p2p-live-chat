<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <style>
        button {
            background-color: red;
        }
    </style>
</head>
<body>
    <form action="/users" method="POST">
        @csrf
        <label>
            <span>Nickname: </span>
            <input type="text" name="nickname">
            <button type="submit">Create Room</button>
        </label>
    </form>
</body>
</html>
