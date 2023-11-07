

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
let countdownValue = 30; // Nilai awal hitungan mundur (dalam detik)

send_divace.addEventListener('click', function (event) {
    const timer = parseInt(document.getElementById('timerTIme').value);
    const form = document.querySelectorAll('form#form-timer');
    axios.post(`/startoven/${timer}`).then(function(response) {})
    if (!isNaN(timer)) {
        countdownValue = timer;
        updateCountdown(); // Mulai atau perbarui hitungan mundur saat tombol diklik
    }
});

function updateCountdown() {
    countdownElement.textContent = countdownValue + 's';

    const countdownInterval = setInterval(function () {
        countdownValue--;

        if (countdownValue < 0) {
            clearInterval(countdownInterval); // Hentikan hitungan mundur saat mencapai 0
        } else {
            countdownElement.textContent = countdownValue + 's';
        }
    }, 1000); // Perbarui hitungan mundur setiap 1 detik
}
