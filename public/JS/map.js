var map = L.map('map').setView([33.9816903645803,  -6.862759823725889], 10);


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
}).addTo(map);




/*require([
  "esri/Map",
  "esri/views/MapView"
], function(Map, MapView) {
  var map = new Map({
    basemap: "streets"
  });

  var view = new MapView({
    container: "map",
    map: map,
    center: [longitude, latitude], // Remplacez longitude et latitude par les coordonnées de votre emplacement initial
    zoom: 12 // Niveau de zoom initial
  });
});





if ("geolocation" in navigator) {
  navigator.geolocation.getCurrentPosition(function(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    // Utilisez les coordonnées obtenues pour centrer la carte
    view.center = [longitude, latitude];
  });
}



require([
  "esri/widgets/Search"
], function(Search) {
  var searchWidget = new Search({
    view: view // spécifiez votre vue Esri
  });

  // Ajoutez le widget de recherche à votre application
  view.ui.add(searchWidget, {
    position: "bottom-right" // spécifiez la position souhaitée du widget
  });
});*/

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 18,
}).addTo(map);

// Fonction de gestion du clic sur la carte
function onMapClick(e) {
    // Récupérer les coordonnées du clic
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    var marker;



    var coor = lat +',' + lng;

    const apiKey = '53a734feb4505137732e295ca0be8cd7'; // Remplacez par votre clé d'API WeatherAPI



    const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lng}&appid=${apiKey}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            // Utilisez les données météorologiques récupérées
            console.log(data);
        })
        .catch(error => {
            console.log('Une erreur s\'est produite lors de la récupération des données météorologiques:', error);
        });

    console.log(lat,lng);

    var latInput = document.getElementById('latitude');
    var lngInput = document.getElementById('longitude');

// Mettre à jour les valeurs des champs de formulaire
    latInput.value = lat;
    lngInput.value = lng;



    // Créer un marqueur sélectionnable
    var marker = L.marker([lat, lng], { draggable: true }).addTo(map);

    map.on('click', function(e) {
        if (marker) {
            map.removeLayer(marker);
        }

        marker = L.marker(e.latlng).addTo(map);})

    marker.on('click', function () {

        // Afficher une boîte de dialogue pour confirmer la suppression
        var confirmDelete = confirm('Voulez-vous supprimer ce marqueur ?');
        if (marker) {
            map.removeLayer(marker);
        }
        // Si l'utilisateur confirme la suppression
        if (confirmDelete) {
            // Supprimer le marqueur de la carte
            map.removeLayer(marker);
        }
    });
}
map.on('click', onMapClick);








$(document).ready(function() {
    $('#resizable-image').resizable({
        aspectRatio: true, // Maintient le ratio de l'image lors du redimensionnement
        containment: '.image-container', // Limite le redimensionnement à l'intérieur du conteneur
        handles: "all" // Permet le redimensionnement depuis tous les côtés de l'image
    });
});









