@extends ('layouts.app')

@section('title', 'NOS ENTREPRISES')

@section('title-page', 'Entreprise')

@section('content')

<h2>Votre entreprise modifiée</h2>

<p>{{$infos->name}}</p>
<p>{{$infos->status}}</p>
<p>{{$infos->siren}}</p>
<p>{{$infos->email}}</p>
<p>{{$infos->phone}}</p>

@endsection