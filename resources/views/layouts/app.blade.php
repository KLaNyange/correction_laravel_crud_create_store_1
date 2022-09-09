<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Pokemon - Correction</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c325.png" alt="logo avec pikachu"
                    width="50" height="44" class="d-inline-block align-text-center">
                Pokemon
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item ">
                    <a class="nav-link active text-dark" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('formulaire') }}">Add Your Pokemon</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>
