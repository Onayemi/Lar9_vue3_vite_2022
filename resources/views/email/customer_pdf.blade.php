<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - remlextech.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table,th,td { border: 1px solid black;}
    </style>
</head>
<body>
    <!-- <h1>{{ $name }}</h1> -->
    <p>{{ $date }}</p>
    <p>Welcome to Remlex Technologies Online registration</p>
  
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $name }}</td>
            <td>{{ $email }}</td>
        </tr>
    </table>
  
</body>
</html>