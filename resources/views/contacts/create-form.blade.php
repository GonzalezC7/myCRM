@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Ajouter un Particulier')

@section('content')

<a href="/" class="lien_home">Accueil</a>

<form action="{{ route('contacts.store')}}" method="post" class="form_create">

    @csrf

    <div>
    <label for="firstname"></label>
    <input type="text" name="firstname" placeholder="Prénom" class="input_class">
    </div>
<br>
    <div>
    <label for="lastname"></label>
    <input type="text" name="lastname" placeholder="Nom" class="input_class">
    </div>
<br>
    <div>
    <label for="phone"></label>
    <input type="text" name="phone" placeholder="Phone" class="input_class">
    </div>
<br>
    <div>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email" class="input_class">
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