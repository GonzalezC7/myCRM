@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Profil individuel')

@section('content')

<h2>Votre profil modifié</h2>

<div class="div_particuliers">

    <p>Prénom : {{$profil->firstname}}</p>
    <p>Nom : {{$profil->lastname}}</p>
    <p>Tél : {{$profil->phone}}</p>
    <p>Email : {{$profil->email}}</p>

</div>

@endsection