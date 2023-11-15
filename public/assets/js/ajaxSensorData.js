function updateSensorData() {
    // Make an AJAX request to get real-time data
    $.ajax({
        url: '/get-sensor',
        method: 'GET',
        success: function (data) {
            // Check if the data is not empty
            if (data && Object.keys(data).length > 0) {
                // Update the DOM with the new data
                $('#ketinggian-air').text(data.v0 + ' m');
                $('#kecepatan-arus').text(data.v1 + ' ml/min');
            } else {
                console.warn('Empty data received.');
            }
        },
        error: function (error) {
            console.error('Error fetching real-time data:', error);
        }
    });
}

// Update data every 5 seconds (adjust as needed)
setInterval(updateSensorData, 5000);

// Initial data update
updateSensorData();