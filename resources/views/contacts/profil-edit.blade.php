@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Profil individuel')

@section('content')

<h2>Modifier votre profil</h2>


<form action="{{route('contacts.update', [$profil_edit->id])}}" method="post" class="form_edit">

    @csrf
    @method('PUT')

    <div>
    <label for="firstname"></label>
    <input type="text" name="firstname" placeholder="Prénom" value="{{$profil_edit->firstname}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="lastname"></label>
    <input type="text" name="lastname" placeholder="Nom" value="{{$profil_edit->lastname}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="phone"></label>
    <input type="text" name="phone" placeholder="Phone" value="{{$profil_edit->phone}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email" value="{{$profil_edit->email}}" class="input_edit">
    </div>
<br>
    <input type="submit" value="Valider" class="input_validate">


@endsection