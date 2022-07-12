@extends ('layouts.app')

@section('title', 'NOS ENTREPRISES')

@section('title-page', 'Liste des Entreprises')

@section('content')


@foreach ($entreprises as $info)

<div class="div_entreprises">

    <div class="p">
    <p>Entreprise : {{$info->name}}</p>
    <p>Statuts : {{$info->status}}</p>
    <p>N° SIREN : {{$info->siren}}</p>
    <p>{{$info->email}}</p>
    <p>Tél : {{$info->phone}}</p>
    </div>

    <div class="liens">
    <a href="{{route('entreprises.edit', [$info->id])}}">Editer</a>
    <br>
    <a href="{{route('factures.create', [$info->id])}}">Créer une Facture</a>
    </div>

    <div class="button_delete">
    <form action="{{route('entreprises.destroy', [$info->id])}}" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="Supprimer" class="input_delete" />
    </form>
    </div>

</div>

@endforeach

@endsection