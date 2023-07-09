<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<script src="{{ asset('js/map.js') }}" async></script>
	<title>Formulaire</title>
</head>

<body class="forms">

<form action="{{ route('parcelles.update', $parcelle->id) }}" method="POST" class="form3">
    @csrf
    @method('PUT')
    <div class="barre">
    	<h2>Modifier parcelle</h2>
    </div>
    <div class="formss">
        <div class="col1">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="col longg" required></textarea>
        </div>

        <div class="col2">
            <label for="superficie">Superficie:</label>
            <input type="text" id="superficie" name="superficie" class="col" required>
        </div>

        <div  class="col4" >
            <label> Localisation : </label>
            <div id="map"> </div>
            <input type="text" id="longitude" name="longitude" placeholder="Longitude" class='affi' readonly>
            <input type="text" id="latitude" name="latitude" placeholder="Latitude" class='affi' readonly>

        </div>


        <div class="col3">
            <label for="typedeculture">Type de culture:</label>
            <input type="text" id="typedeculture" name="typedeculture" class="col" required>
        </div>
    </div>



    <button type="submit" class="bouton">Modifier la parcelle :</button>

     </form>
     <a href="" class="bouton2"> Retour</a>
