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
    <h1>Nauja įmonė</h1>
    <form action="" method="POST" class="form-control">
        <input type="hidden" name="action" value="insert">
        <input class="form-control" type="text" name="name" placeholder="Įmonės vardas"> <br>
        <input class="form-control" type="text" name="adress" placeholder="Adresas"> <br>
        <input class="form-control" type="number" name="vat_code" placeholder="VAT Kodas"> <br>
        <input class="form-control" type="text" name="company_name" placeholder="Kompanijos pavadinimas"> <br>
        <input class="form-control" type="text" name="phone" placeholder="Telefono nr"> <br>
        <input class="form-control" type="text" name="email" placeholder="El paštas"> <br>
        <button class="btn btn-primary">Pridėti</button>
        <a class="btn btn-primary float-end" href="index.php">Atgal</a>
    </form>
</div>
</body>
</html>