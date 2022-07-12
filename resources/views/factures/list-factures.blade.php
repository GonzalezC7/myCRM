@extends ('layouts.app')

@section('title', 'NOS FACTURES')

@section('title-page', 'Liste des Factures')

@section('content')

@foreach ($factures as $facture)

<div class="div_factures">

    <div class="p">
    <p>Au nom de : {{$facture->titre}}</p>
    <p>Date : {{$facture->date}}</p>
    <p>Facture N° {{$facture->numero}}</p>
    <p>Montant HT = {{$facture->montantHT}} $</p>
    <p>TVA = {{$facture->tva}} %</p>
    <p>Montant TTC = {{$facture->montantTTC}} $</p>
    </div>
    
    <div class="liens">
    <a href="{{route('factures.edit', [$facture->id])}}">Editer</a>
    </div>

     <div class="button_delete">
     <form action="{{route('factures.destroy', [$facture->id])}}" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="Supprimer" class="input_delete" />
    </form>
    </div>

</div>

@endforeach

@endsection