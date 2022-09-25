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
    <h1>Įmonės</h1>
    <a class="btn btn-success float-end" href="createcomp.php">Nauja kompanija</a>
    <table class="table">
        <thead>
        <th>Įmonės pavadinimas</th>
        <th>Adresas</th>
        <th>VAT kodas</th>
        <th>Kompanijos pavadinimas </th>
        <th></th>
        <th></th>
        </thead>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->adress }}</td>
                <td>{{ $company->vat_code }}</td>
                <td>{{ $company->company_name }}</td>
                <td><a class="btn btn-info" href="editcompany.php?id={{$company->id}}">Redaguoti</a></td>
                <td><a class="btn btn-danger" href="?delete={{$company->id}}">Ištrinti</a></td>
            </tr>
        @endforeach
    </table>

</div>
</body>
</html>




