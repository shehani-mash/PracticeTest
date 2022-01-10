<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Form</title>
</head>
<body>
    <form action="adduser" method="post">
        @csrf
        Name:
        <input type="text" name="name" id="name"><br><br>

        User Name:
        <input type="text" name="uname" id="uname"><br><br>

        E-mail:
        <input type="email" name="email" id="email"><br><br>

        Password:
        <input type="password" name="pass" id="pass"><br><br>

        <input type="submit" value="Add Data">
    </form>




    </form>
</body>
</html>