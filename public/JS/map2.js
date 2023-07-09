var element = document.getElementById('myMap');
var latitude = element.getAttribute('latitude');
var longitude = element.getAttribute('longitude');


var myMap = L.map('myMap').setView([latitude, longitude], 13);

// Ajouter une couche de tuiles d'OpenStreetMap à la carte
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(myMap);

// Ajouter un marqueur à la carte
var marker = L.marker([latitude, longitude]).addTo(myMap);

const apiKey = '53a734feb4505137732e295ca0be8cd7'; // Remplacez par votre clé d'API WeatherAPI

const url = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${apiKey}`;

fetch(url)
    .then(response => response.json())
    .then(data => {
        // Utilisez les données météorologiques récupérées
        console.log(data);
        const temperature = data.main.temp;
        const humidity = data.main.humidity;
        const pressure = data.main.pressure;

        // Affichage des données dans la vue
        const weatherInfoContainer = document.getElementById('weather-info');

        // Création des éléments HTML
        const temperatureElement = document.createElement('td');
        temperatureElement.textContent = `Température : ${temperature} K`;
        temperatureElement.classList.add('temperature'); // Ajout de la classe CSS

        const humidityElement = document.createElement('td');
        humidityElement.textContent = `Humidité : ${humidity}%`;
        humidityElement.classList.add('humidity'); // Ajout de la classe CSS

        const pressureElement = document.createElement('td');
        pressureElement.textContent = `Pression : ${pressure} hPa`;
        pressureElement.classList.add('pressure'); // Ajout de la classe CSS

        // Ajout des éléments à la vue
        weatherInfoContainer.appendChild(temperatureElement);
        weatherInfoContainer.appendChild(humidityElement);
        weatherInfoContainer.appendChild(pressureElement);
    })
