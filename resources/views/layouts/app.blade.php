<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->

    @vite('resources/css/app.css')

    {{-- npm i
    npm run dev --}}

    <title> @yield('title') </title>
</head>
<body>

    <header>        
        <a href="{{route('contacts.create')}}" class="nav_link">Ajouter un particulier</a>
        <a href="{{route('contacts.index')}}" class="nav_link">Voir les particuliers</a>
        <a href="{{route('entreprises.create')}}" class="nav_link">Ajouter une entreprise</a>
        <a href="{{route('entreprises.index')}}" class="nav_link">Voir les entreprises</a>
        <a href="{{route('factures.index')}}" class="nav_link">Voir les factures</a>

</header>

    <h1> @yield('title-page') </h1>

    <main>

        @yield('content')

    </main>
    
</body>
</html>