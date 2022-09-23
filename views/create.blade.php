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

        <form action="" method="POST" class="form-control">
            <input type="hidden" name="action" value="insert">
            <input class="form-control" type="text" name="name" placeholder="Vardas"> <br>
            <input class="form-control" type="text" name="surname" placeholder="Pavardė"> <br>
            <input class="form-control" type="number" name="phone" placeholder="Telefono numeris"> <br>
            <input class="form-control" type="text" name="email" placeholder="El paštas"> <br>
            <input class="form-control" type="text" name="adress" placeholder="Adresas"> <br>
            <input class="form-control" type="text" name="position" placeholder="Pozicija"> <br>
            <select class="form-control" name="company_id">
                <option selected>Pasrinkti</option>
                @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select> <br>
            <input class="form-control" type="text" name="conversation" placeholder="Kalbejo apie">
            <button class="btn btn-primary">Pridėti</button>
            <a class="btn btn-primary float-end" href="index.php">Atgal</a>
        </form>
    </div>
</body>
</html>

