<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetch Data</title>
</head>
<body>
    <table border = '1' width="50%">

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Email</th>
            <!----<th>Action</th>-->
        </tr>
        @foreach ($detail as $x)
        <tr>
            <td> {{$x['id']}} </td>
            <td> {{$x['name']}} </td>
            <td> {{$x['username']}} </td>
            <td> {{$x['email']}} </td>
            <!---<td><a href={{"delete/".$x['id']}}>Delete</a></td>-->
        </tr>
        @endforeach


    </table>

</body>
</html>