<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/testc.css') }}">
</head>
<body class="gestion">
	<div>
	<h2 class='gerer'>Bienvenue </h2>
		<br>
	<h4>Vous pouvez consulter, ou mettre à jour l'état de vos parcelles ici.</h4>

	<table>
		<tr>
			<th>
				Nom de la parcelle
			</th>
			<th colspan="3">
				Actions
			</th>
		</tr>
		<tr>
			<td>
				Parcelle 1
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Explorer</a>
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Modifier</a>
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Supprimer</a>
			</td>
		</tr>
		<tr>
			<td>
				Parcelle 2
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Explorer</a>
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Modifier</a>
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Supprimer</a>
			</td>
		</tr>
		<tr>
			<td>
				Parcelle 3
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Explorer</a>
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Modifier</a>
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Supprimer</a>
			</td>
		</tr>
		<tr>
			<td>
				Parcelle 4
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Explorer</a>
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Modifier</a>
			</td>
			<td>
				<div class="actions"><a href="#" class="action">Supprimer</a>
			</td>
		</tr>

	</table>
	<div class="sef">
		<div class="exp"><span class="hid"> Niveau : </span>  3</div>
		<br>
		<div class="acces 1">
			<div>
				<img src="parcelle.png">
			</div>
			<div class="hid">
				Parcelle
			</div>
		</div>
		<br>
		<div class="acces">
			<div>
				<img src="stat.png">
			</div>
			<div class="hid">
				Statistiques
			</div>
		</div>
		<br>
		<div class="acces">
			<div>
				<img src="parcelle.png">
			</div>
			<div class="hid">
				Parcelle
			</div>
		</div>
		<br>
		<div class="acces">
			<div>
				<img src="blog.png">
			</div>
			<div class="hid">
				Blog
			</div>
		</div>
		<br>
	</div>

	<div class="actions ajout"><a href="#" class="action">Ajouter parcelle</a></div>

	<form class="bas" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Déconnexion</button>
    </form>
</body>
</html>

