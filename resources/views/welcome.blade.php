<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    
<h1>* W E L C O M E *</h1>

<button class="bouton_accueil">
    <a href="{{route('contacts.index')}}">PARTICULIERS</a>
</button>

<button class="bouton_accueil">
    <a href="{{route('entreprises.index')}}">ENTREPRISES</a>
</button>

<button class="bouton_accueil">
    <a href="{{route('factures.index')}}">FACTURES</a>
</button>

<h2>Make a choice</h2>

</body>
</html>

