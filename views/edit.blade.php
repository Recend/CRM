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
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="{{$customer->id}}">
        <label for="" class="form-label">Vardas</label>
        <input class="form-control" type="text" name="name" value="{{$customer->name}}">
        <label for="" class="form-label">Pavardė</label>
        <input class="form-control" type="text" name="surname" value="{{$customer->surname}}">
        <label for="" class="form-label">Telefonor nr.</label>
        <input class="form-control" type="number" name="phone" value="value="{{$customer->phone}}">
        <label for="" class="form-label">Elektroninis paštas</label>
        <input class="form-control" type="text" name="email" value="{{$customer->email}}" >
        <label for="" class="form-label">Adresas</label>
        <input class="form-control" type="text" name="adress" value="{{$customer->adress}}">
        <label for="" class="form-label">Pozicija</label>
        <input class="form-control" type="text" name="position" value="{{$customer->position}}">
        <label for="" class="form-label">Įmonė</label>
        <select class="form-control" name="company_id">
            <option selected>Pasrinkti</option>
            @foreach($companies as $company)
                <option value="{{$company->id}}" {{$customer->company_id == $company->id ? 'selected' : ''}}>{{$company->name}} </option>
            @endforeach
        </select>
        <label for="" class="form-label">Kalbėjo apie</label>
        <input class="form-control" type="text" name="conversation" value="{{$conversation->conversation}}">
        <button class="btn btn-primary">Atnaujinti</button>
        <a class="btn btn-primary float-end" href="index.php">Atgal</a>
    </form>
</div>
</body>
</html>
