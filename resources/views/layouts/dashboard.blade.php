<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="my-5">PROJET EPREUVE</h1>
        @yield('content')
        <div class="row">
                <a  href="{{ route('matieres.index') }}">Liste des Matières</a>
                <a  href="{{ route('epreuves.index') }}">Liste des Epreuves</a> 
        </div>
    </div>
</body>
</html>