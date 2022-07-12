@extends ('layouts.app')

@section('title', 'NOS FACTURES')

@section('title-page', 'Modifications')

@section('content')

<h2>Modifier votre facture</h2>


<form action="{{route('factures.update', [$facture_edit->id])}}" method="post" class="form_edit">

    @csrf
    @method('PUT')
    
    <div>
    <label for="titre"></label>
    <input type="text" name="titre" placeholder="Titre Facture" value="{{$facture_edit->titre}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="date"></label>
    <input type="date" name="date" value="{{$facture_edit->date}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="montantHT"></label>
    <input type="text" name="montantHT" placeholder="Montant HT" value="{{$facture_edit->montantHT}}" class="input_edit">
    </div>
<br>
    <input type="submit" value="Valider" class="input_validate">

@endsection