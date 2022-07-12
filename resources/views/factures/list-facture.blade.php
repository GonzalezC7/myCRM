@extends ('layouts.app')

@section('title', 'NOS FACTURES')

@section('title-page', 'Factures')

@section('content')

<h2>Votre entreprise</h2>

<p>{{$facture->titre}}</p>
<p>{{$facture->date}}</p>
<p>{{$facture->numero}}</p>
<p>{{$facture->montantHT}}</p>
<p>{{$facture->tva}}</p>
<p>{{$facture->montantTTC}}</p>

@endsection