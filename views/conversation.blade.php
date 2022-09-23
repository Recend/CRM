<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
<div class="container">
    <table class="table">
        <thead>
        <th>Klientas</th>
        <th>Data</th>
        <th>Konversacija</th>
        <th></th>
        </thead>
        @foreach($conversation as $con)
            <tr>
                <td>{{ $con->customer_id }}</td>
                <td>{{ $con->date }}</td>
                <td>{{ $con->conversation }}</td>
            </tr>
        @endforeach
    </table>

</div>
</body>
</html>