<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/testc.css') }}">
</head>

<body class="forms">

<div class="barre2">
        <h2>MODIFICATION</h2>
</div>

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flexi laire">

                <div class="flexi2">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}"  class="col" required>
                </div>

                <div class="flexi2">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="col" required>
                </div>


    <div class="flexi2 rou" >
    <button type="submit" class="rou2">Modifier</button>
    </div>
    </div>
</form>
