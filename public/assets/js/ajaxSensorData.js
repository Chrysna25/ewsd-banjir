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
                $('#sensor-card').html(data.v0);

                let status = 'AMAN';
                let background = 'bg-gradient-success';

                if(data.v0 < 700){
                    status = 'AMAN'
                    background = 'bg-gradient-success'
                }else if(data.v0 >= 700 && data.v0 < 800) {
                    status = 'SIAGA'
                    background = 'bg-gradient-warning'
                }else if(data.v0 >= 800 && data.v0 < 900) {
                    status = 'WASPADA'
                    background = 'bg-gradient-secondary'
                }else {
                    status = 'BAHAYA'
                    background = 'bg-gradient-danger'
                }

                $('#status').text(status);
                $('#card-status').removeClass(['bg-gradient-success', 'bg-gradient-warning', 'bg-gradient-secondary', 'bg-gradient-danger'])
                $('#card-status').addClass(background);
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
