@extends ('layouts.app')

@section('title', 'NOS ENTREPRISES')

@section('title-page', "Ajouter une Entreprise")

@section('content')

 <a href="/" class="lien_home">Accueil</a>


<form action="{{ route('entreprises.store')}}" method="post" class="form_create">

    @csrf

    <div>
    <label for="name"></label>
    <input type="text" name="name" placeholder="Nom" class="input_class">
    </div>
<br>
    <div>
    <label for="status"></label>
    <input type="text" name="status" placeholder="Status Entreprise" class="input_class">
    </div>
<br>
    <div>
    <label for="siren"></label>
    <input type="number" name="siren" placeholder="Numéro Siren 9 caractères" class="input_class">
    </div>
<br>
    <div>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email" class="input_class">
    </div>
<br>
    <div>
    <label for="phone"></label>
    <input type="text" name="phone" placeholder="Téléphone" class="input_class">
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