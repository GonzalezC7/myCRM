@extends ('layouts.app')

@section('title', 'NOS FACTURES')

@section('title-page', 'Ajouter une facture')

@section('content')

<a href="/" class="lien_home">Accueil</a>


<form action="{{ route('factures.store')}}" method="post" class="form_create">

    @csrf
    
    <div>
    <label for="titre"></label>
    <input type="text" name="titre" placeholder="Titre Facture" class="input_class">
    </div>
<br>
 <div>
    <label for="date"></label>
    <input type="date" name="date" class="input_class">
    </div>
<br>
    <div>
    <label for="montantHT"></label>
    <input type="text" name="montantHT" placeholder="Montant HT" class="input_class">
    </div>
<br>
    <div>
    <label for="tva"></label>
    <input type="text" name="tva" placeholder="Taux de TVA" value="5.5" class="input_class">
    </div>
<br>
    <div>
    <label for="montantTTC"></label>
    <input type="text" name="montantTTC" placeholder="Montant TTC" class="input_class">
    </div>
<br>
    <input type="submit" value="Valider" class="input_sub">

     <div class="error">
@if ($errors->any())
    @foreach ($errors->all() as $error)
    <p> {{ $error }} </p>
    @endforeach
    @endif
     </div>

</form>



@endsection