document.addEventListener("DOMContentLoaded", function () {
    const apiKey = "905c11edfcd4e34e0448db2e2d7b52e9"; // Ganti dengan kunci API OpenWeatherMap Anda

    // First City: Cianjur
    const city1 = "Cianjur";
    document.getElementById("weather-city1").innerHTML = city1;
    const weatherIconElement1 = document.getElementById("weather-icon1");
    const weatherDescriptionElement1 = document.getElementById(
        "weather-description1"
    );
    const temperatureElement1 = document.getElementById("temperature1");
    const apiUrl1 = `https://api.openweathermap.org/data/2.5/weather?q=${city1}&appid=${apiKey}&units=metric`;

    // Ambil data cuaca dari OpenWeatherMap API - City 1
    fetch(apiUrl1)
        .then((response) => response.json())
        .then((data) => {
            // Tampilkan ikon cuaca
            const iconCode = data.weather[0].icon;
            const iconUrl = `http://openweathermap.org/img/w/${iconCode}.png`;
            weatherIconElement1.innerHTML = `<img src="${iconUrl}" alt="Weather Icon">`;

            // Tampilkan deskripsi cuaca
            const weatherDescription = data.weather[0].description;
            weatherDescriptionElement1.textContent = `Weather: ${weatherDescription}`;

            // Tampilkan suhu
            const temperature = data.main.temp;
            temperatureElement1.textContent = `Temperature: ${temperature} °C`;
        })
        .catch((error) => {
            console.error("Error fetching weather data for City 1:", error);
        });

    // Second City: Depok
    const city2 = "Depok";
    document.getElementById("weather-city2").innerHTML = city2;
    const weatherIconElement2 = document.getElementById("weather-icon2");
    const weatherDescriptionElement2 = document.getElementById(
        "weather-description2"
    );
    const temperatureElement2 = document.getElementById("temperature2");
    const apiUrl2 = `https://api.openweathermap.org/data/2.5/weather?q=${city2}&appid=${apiKey}&units=metric`;

    // Ambil data cuaca dari OpenWeatherMap API - City 2
    fetch(apiUrl2)
        .then((response) => response.json())
        .then((data) => {
            // Tampilkan ikon cuaca
            const iconCode = data.weather[0].icon;
            const iconUrl = `http://openweathermap.org/img/w/${iconCode}.png`;
            weatherIconElement2.innerHTML = `<img src="${iconUrl}" alt="Weather Icon">`;

            // Tampilkan deskripsi cuaca
            const weatherDescription = data.weather[0].description;
            weatherDescriptionElement2.textContent = `Weather: ${weatherDescription}`;

            // Tampilkan suhu
            const temperature = data.main.temp;
            temperatureElement2.textContent = `Temperature: ${temperature} °C`;
        })
        .catch((error) => {
            console.error("Error fetching weather data for City 2:", error);
        });

    // Third City: Depok
    const city3 = "Bogor";
    document.getElementById("weather-city3").innerHTML = city3;
    const weatherIconElement3 = document.getElementById("weather-icon3");
    const weatherDescriptionElement3 = document.getElementById(
        "weather-description3"
    );
    const temperatureElement3 = document.getElementById("temperature3");
    const apiUrl3 = `https://api.openweathermap.org/data/2.5/weather?q=${city3}&appid=${apiKey}&units=metric`;

    // Ambil data cuaca dari OpenWeatherMap API - City 3
    fetch(apiUrl3)
        .then((response) => response.json())
        .then((data) => {
            // Tampilkan ikon cuaca
            const iconCode = data.weather[0].icon;
            const iconUrl = `http://openweathermap.org/img/w/${iconCode}.png`;
            weatherIconElement3.innerHTML = `<img src="${iconUrl}" alt="Weather Icon">`;

            // Tampilkan deskripsi cuaca
            const weatherDescription = data.weather[0].description;
            weatherDescriptionElement3.textContent = `Weather: ${weatherDescription}`;

            // Tampilkan suhu
            const temperature = data.main.temp;
            temperatureElement3.textContent = `Temperature: ${temperature} °C`;
        })
        .catch((error) => {
            console.error("Error fetching weather data for City 2:", error);
        });

    // Fourth City: Depok
    const city4 = "Jakarta";
    document.getElementById("weather-city4").innerHTML = city4;
    const weatherIconElement4 = document.getElementById("weather-icon4");
    const weatherDescriptionElement4 = document.getElementById(
        "weather-description4"
    );
    const temperatureElement4 = document.getElementById("temperature4");
    const apiUrl4 = `https://api.openweathermap.org/data/2.5/weather?q=${city4}&appid=${apiKey}&units=metric`;

    // Ambil data cuaca dari OpenWeatherMap API - City 4
    fetch(apiUrl4)
        .then((response) => response.json())
        .then((data) => {
            // Tampilkan ikon cuaca
            const iconCode = data.weather[0].icon;
            const iconUrl = `http://openweathermap.org/img/w/${iconCode}.png`;
            weatherIconElement4.innerHTML = `<img src="${iconUrl}" alt="Weather Icon">`;

            // Tampilkan deskripsi cuaca
            const weatherDescription = data.weather[0].description;
            weatherDescriptionElement4.textContent = `Weather: ${weatherDescription}`;

            // Tampilkan suhu
            const temperature = data.main.temp;
            temperatureElement4.textContent = `Temperature: ${temperature} °C`;
        })
        .catch((error) => {
            console.error("Error fetching weather data for City 4:", error);
        });
});
