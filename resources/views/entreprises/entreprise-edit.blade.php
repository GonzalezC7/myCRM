@extends ('layouts.app')

@section('title', 'NOS ENTREPRISES')

@section('title-page', 'Modifications')

@section('content')

<h2>Modifier votre entreprise</h2>


<form action="{{route('entreprises.update', [$entreprise_edit->id])}}" method="post" class="form_edit">

    @csrf
    @method('PUT')

    <div>
    <label for="name"></label>
    <input type="text" name="name" placeholder="Nom de l'entreprise" value="{{$entreprise_edit->name}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="status"></label>
    <input type="text" name="status" placeholder="Status de l'entreprise" value="{{$entreprise_edit->status}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="siren"></label>
    <input type="number" name="siren" placeholder="Numéro de siren" value="{{$entreprise_edit->siren}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email" value="{{$entreprise_edit->email}}" class="input_edit">
    </div>
<br>
    <div>
    <label for="phone"></label>
    <input type="text" name="phone" placeholder="Téléphone" value="{{$entreprise_edit->phone}}" class="input_edit">
    </div>
<br>
    <input type="submit" value="Modifier" class="input_validate">


@endsection