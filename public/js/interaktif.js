

function getAlldata() {
    axios.get('/request')
        .then(function(response) {
            const temperatureData = response.data.temperature_1; // Ganti ini sesuai dengan respon API yang sesuai
            const temperatureElement = document.getElementById('temperature_1');
            temperatureElement.textContent = temperatureData + '°C';

            const temperatureData2 = response.data.temperature_2;
            const idtemperature_2 = document.getElementById('temperature_2');
            idtemperature_2.textContent = temperatureData2 + '°C';

            const fan_status_1 = response.data.fan_status_1;
            const idfan_status_1 = document.getElementById('fan_status_1');
            idfan_status_1.textContent = fan_status_1;

            const fan_status_2 = response.data.fan_status_2;
            const idfan_status_2 = document.getElementById('fan_status_2');
            idfan_status_2.textContent = fan_status_2;

            const fan_status_3 = response.data.fan_status_3;
            const idfan_status_3 = document.getElementById('fan_status_3');
            idfan_status_3.textContent = fan_status_3;

            const heater_status = response.data.heater_status;
            const idheater_status = document.getElementById('heater_status');
            idheater_status.textContent = heater_status;
        })
}
setInterval(getAlldata, 1000);

const send_divace = document.getElementById('send-divace');
const countdownElement = document.getElementById('countdown');
let countdownValue = 30; // Initial countdown value in seconds
let timer; // Declare timer globally

send_divace.addEventListener('click', function (event) {
    timer = parseInt(document.getElementById('timerTIme').value);
    const form = document.querySelectorAll('form#form-timer');
    axios.post(`http://192.168.19.75/startoven${timer}`).then(function (response) {})
    if (!isNaN(timer)) {
        countdownValue = timer;
        updateCountdown(); // Start or update countdown when the button is clicked
    }
});

const stop_divace = document.getElementById('send-btn-danger');

stop_divace.addEventListener('click', function (event) {
    axios.post(`http://192.168.19.75/stopoven`).then(function (response) {});
    clearInterval(countdownInterval); // Stop the countdown
    countdownElement.textContent = 'Countdown Stopped';
});

let countdownInterval; // Declare countdownInterval globally

function updateCountdown() {
    countdownElement.textContent = formatTime(countdownValue);

    countdownInterval = setInterval(function () {
        countdownValue--;

        if (countdownValue < 0) {
            clearInterval(countdownInterval);
            countdownElement.textContent = 'Countdown Expired';
        } else {
            countdownElement.textContent = formatTime(countdownValue);
        }
    }, 1000); // Update countdown every 1 second
}

function formatTime(seconds) {
    const hours = Math.floor(seconds / 3600);
    const minutes = Math.floor((seconds % 3600) / 60);
    const remainingSeconds = seconds % 60;

    return `${hours}h ${minutes}m ${remainingSeconds}s`;
}


document.getElementById('menit-30').addEventListener('click', function () {
    updateTimerValue(1800); // Set timer value to 30 minutes
});

document.getElementById('satu-jam').addEventListener('click', function () {
    updateTimerValue(3600); // Set timer value to 1 hour (60 minutes)
});

document.getElementById('dua-jam').addEventListener('click', function () {
    updateTimerValue(7200); // Set timer value to 2 hours (120 minutes)
});

document.getElementById('tiga-jam').addEventListener('click', function () {
    updateTimerValue(10800); // Set timer value to 3 hours (180 minutes)
});

function updateTimerValue(value) {
    const timerInput = document.getElementById('timerTIme');
    const currentTimerValue = parseInt(timerInput.value) || 0; // Get the current value or default to 0
    timerInput.value = currentTimerValue + value; // Add the new value to the current value
}
