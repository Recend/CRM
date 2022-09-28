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
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        @if($user->canEdit())
        <a class="navbar-brand" href="#">Super Admin</a>
        @else
        <a class="navbar-brand" href="#">Admin</a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach($user->getNavigation() as $item)
                <li class="nav-item">
                        <a class="navbar-brand"href="{{$item['link']}}"> {{$item['name']}}</a>
                </li>
                @endforeach
                <li> <a class="btn btn-warning float-end" href="login.php?action=logout">Atsijungti</a></li>
            </ul>

        </div>
    </div>
</nav>
<div class="container">

    <h1>Klientai</h1>
<table class="table">
    <thead>
    <th>Vardas</th>
    <th>Pavardė</th>
    <th>Telefono nr</th>
    <th>Emailas</th>
    <th>Adresas</th>
    <th>Pozicija</th>
    <th>Bendarvo su įmone</th>
    <th>Kalbėjo apie</th>
    <th></th>
    </thead>
    @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->surname }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->adress }}</td>
            <td>{{ $customer->position }}</td>
            <td>{{($customer->getCompany()->name)}}</td>
            <td>{{$customer->getConversations($customer->id)->conversation}}</td>
            @if($user->canEdit())
            <td><a class="btn btn-info" href="edit.php?id={{$customer->id}}">Redaguoti</a></td>
            <td><a class="btn btn-danger" href="?deletee={{$customer->id}}">Ištrinti</a></td>
            @endif
        </tr>
    @endforeach
</table>
</div>
</body>
</html>