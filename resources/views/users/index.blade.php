<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/testc.css') }}">
</head>


<body class="gestion">

	<h2 class='gerer'>Gestion des utilisateurs </h2>
		<br>
	<h4>Vous pouvez consulter, ou mettre à jour les utilisateurs de l'application</h4>

<table>
<tr>
<th>Nom de l'utilisateur</th>
<th>Email</th>
<th colspan="2">Actions</th>
</tr>
<tr>
@foreach ($users as $user)
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <!-- Autres informations d'utilisateur à afficher -->
    <td> <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
             @csrf
             @method('DELETE')

            <button type="submit" class="boutt lar"> Supprimer le compte</button>
         </form></td>
         <td>
        <div class="lar">
             <a href="{{ route('users.edit', $user->id) }}", class="boutt" >Modifier</a>
        </div>
        </td>
    </tr>
@endforeach

	<div class="actions ajout"><form action="{{ route('add') }}" method="POST">
                                   @csrf
                                   <button type="submit" class="hm2">Ajouter un utilisateur</button>
                               </form></div>

    <div class="bas">
	<form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="hm" >Déconnexion</button>
    </form>
    </div>


</body>
