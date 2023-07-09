<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/testc.css') }}">
	<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
	<script src="https://js.arcgis.com/4.19/"></script>
	<script src="{{ asset('js/map2.js') }}" async></script>
</head>
<body class="gestion2">

@if ($parcelle->onFirstPage())

<h2 class='gerer'>Mes parcelles</h2>
<style>
#myMap{
top :120px
}
.gerer{
    width:150%
}
</style>

@endif

<div class="pa2">
@foreach($parcelle as $parcelles)
<div id="myMap" latitude="{{ $parcelles->latitude }}" longitude="{{ $parcelles->longitude }}">
@endforeach
</div>
<table class="tablee">
<tr>
<th colspan="2">Parcelle</th>
</tr>
@foreach($parcelle as $parcelles)

<tr>
<td>Description de la parcelle</td>
<td>{{$parcelles->description}}</td>
</tr>
<tr>
<td>Superficie</td>
<td>{{$parcelles->superficie}}</td>
</tr>
<tr>
<td>Types de cultures</td>
<td>{{$parcelles->typedeculture}}</td>
</tr>
<tr>
<td >météo</td>
<td><div id="weather-info" class="deplacement"></div></td>
</tr>
<tr>

<td colspan="2">
<div class="f1">
<form action="{{ route('parcelle.destroy', $parcelles->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="hm">Supprimer</button>
        </form>
        <a href="{{ route('parcelles.edit', ['id' => $parcelles->id]) }}" class="hm hm1">Modifier</a>
        <a href="/formulaire" class="hm hm1">Ajouter</a>
        </div>
</td></tr>
@endforeach



</table>

<div class='toop'>
<div class="defileur">
@if (! $parcelle->onFirstPage())
    <!-- Afficher uniquement le lien "Next" -->

    <!-- Afficher uniquement le lien "Previous" -->
    <a href="{{ $parcelle->previousPageUrl() }}" rel="prev" class="defil de1">Précédent</a>
@endif
<div class="espace">
<p>  </p>
</div>
@if ($parcelle->hasMorePages())
        <a href="{{ $parcelle->nextPageUrl() }}" rel="next" class="defil de2">Suivant</a>
@endif
</div>
</div>
</div>

<form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="decon hm" >Déconnexion</button>
</form>

</body>
