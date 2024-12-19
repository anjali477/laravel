<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="">
    <form action="emp" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter your name"><br><br>
        <input type="email" name="email" placeholder="enter your email"><br><br>
        <input type="tel" name="phone" placeholder="enter your number"><br><br>
        <input type="text" name="address" placeholder="enter your address"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
