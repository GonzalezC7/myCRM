@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Liste des Particuliers')

@section('content')

@foreach ($infos as $info)

<div class="div_particuliers">

    <div class="p">
    <p>Prénom : {{$info->firstname}}</p>
    <p>Nom : {{$info->lastname}}</p>
    <p>Tél : {{$info->phone}}</p>
    <p>Email : {{$info->email}}</p>
    </div>

    <div class="liens">
    <a href="{{route('contacts.edit', [$info->id])}}">Editer</a>
    <br>
    <a href="{{route('factures.create', [$info->id])}}">Créer une Facture</a>
    </div>

    <div class="button_delete">
    <form action="{{route('contacts.destroy', [$info->id])}}" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="Supprimer" class="input_delete"/>
    </form>
    </div>

</div>

@endforeach

@endsection