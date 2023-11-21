<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/history">History</a>
                </div>
            </div>
            <div class="mx-auto">
                <h1 id="countdown">30s</h1>
            </div>
        </div>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="card col rounded-0">
                <div class="row g-0">
                    <div class="col-md-4 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-thermometer-half" viewBox="0 0 16 16">
                            <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z" />
                            <path
                                d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z" />
                        </svg>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body m-5 p-4">
                            <h5 class="card-title">Temperature 1</h5>
                            <p class="card-text h4" id="temperature_1">
                                0c
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col rounded-0">
                <div class="row g-0">
                    <div class="col-md-4 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-thermometer-half" viewBox="0 0 16 16">
                            <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z" />
                            <path
                                d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z" />
                        </svg>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body m-5 p-4">
                            <h5 class="card-title">Temperature 2</h5>
                            <p class="card-text h4" id="temperature_2">
                                0c
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card col rounded-0">
                <div class="row g-0" style="margin: auto">
                    <div class="col-md-4 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-wind" viewBox="0 0 16 16">
                            <path
                                d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body m-5 p-4">
                            <h5 class="card-title">Fan Status 1</h5>
                            <p class="card-text h4" id="fan_status_1">
                                On
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col rounded-0">
                <div class="row g-0" style="margin: auto">
                    <div class="col-md-4 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-wind" viewBox="0 0 16 16">
                            <path
                                d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body m-5 p-4">
                            <h5 class="card-title">Fan Status 2</h5>
                            <p class="card-text h4" id="fan_status_2">
                                On
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col card rounded-0">
                <div class="card rounded-0" style="border: none;">
                    <div class="row g-0">
                        <div class="col-md-4 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-wind" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body m-4 p-2">
                                <h5 class="card-title">Fan Status 3</h5>
                                <p class="card-text h4" id="fan_status_3">
                                    On
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card rounded-0" style="border: none;">
                    <div class="row g-0">
                        <div class="col-md-4 p-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                                class="bi bi-fire" viewBox="0 0 16 16">
                                <path
                                    d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                            </svg>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body m-4 p-2">
                                <h5 class="card-title">Heater Status</h5>
                                <p class="card-text h4" id="heater_status">
                                    On
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-4">
        <div class="card text-center">
            <div class="card-header">
                {{$data->device_id ?? "Your Device"}} {{$data->heater_status ?? "heater Off"}}
            </div>
            <form id="form-timer">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Timer</label>
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Input The Time</button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#" id="menit-30">30m</a></li>
                              <li><a class="dropdown-item" href="#" id="satu-jam">1h</a></li>
                              <li><a class="dropdown-item" href="#" id="dua-jam">2h</a></li>
                              <li><a class="dropdown-item" href="#" id="tiga-jam">3h</a></li>
                            </ul>
                            <input type="number" class="form-control" name="time" aria-describedby="emailHelp"
                            placeholder="123" id="timerTIme">
                          </div>

                        <small id="emailHelp" class="form-text text-muted">Input Your Timer To Device</small>
                    </div>
                </div>
                <div class="card-footer text-body-secondary">
                    <button class="btn btn-primary" id="send-divace" type="button">Start</button>
                    <button class="btn btn-danger" id="send-btn-danger" type="button">End</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/interaktif.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
