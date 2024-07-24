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
                $('#sensor-data1').text(data.v0 + " meter");
                $('#sensor-data2').text(data.v1 + " m / Menit");
                $('#sensor-data3').text(data.v2 + " L / Detik");
                $('#sensor-card').html(data.v0);

                let status = 'AMAN';
                let background = 'bg-gradient-success';

                if(data.v0 < 5){
                    status = 'AMAN'
                    background = 'bg-gradient-success'
                }else if(data.v0 >= 6 && data.v0 < 8) {
                    status = 'SIAGA'
                    background = 'bg-gradient-warning'
                }else if(data.v0 >= 8 && data.v0 < 12) {
                    status = 'WASPADA'
                    background = 'bg-gradient-waspada'
                }else {
                    status = 'BAHAYA'
                    background = 'bg-gradient-danger'
                }

                $('#status').text(status);
                $('#card-status').removeClass(['bg-gradient-success', 'bg-gradient-warning', 'bg-gradient-waspada', 'bg-gradient-danger'])
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
