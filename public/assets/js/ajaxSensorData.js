function updateSensorData() {
    // Make an AJAX request to get real-time data
    $.ajax({
        url: '/get-sensor',
        method: 'GET',
        success: function (data) {
            // Check if the data is not empty
            if (data && Object.keys(data).length > 0) {
                // Update the DOM with the new data for each sensor
                // Assuming there is a span with class 'sensor-value' inside the card
                $('#sensor-data1').text(data.v0 + " m");
                $('#sensor-data2').text(data.v1 + " ml/l");
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
setInterval(function () {
    // Update sensor data without refreshing the entire page
    updateSensorData();
}, 1000);

// Initial data update
updateSensorData();
