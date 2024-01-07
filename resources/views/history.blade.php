<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Dashboard</a>
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

            </div>
        </div>
    </nav>
    <div class="container mt-4">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Temperature 1 </th>
                    <th scope="col">Temperature 2 </th>
                    <th scope="col">fan status 1</th>
                    <th scope="col">fan status 2</th>
                    <th scope="col">fan status 3</th>
                    <th scope="col">Heater Status</th>
                </tr>

            </thead>
            <tbody>


                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->temperature_1}}</td>
                        <td>{{$item->temperature_2}}</td>
                        <td>{{$item->fan_status_1}}</td>
                        <td>{{$item->fan_status_2}}</td>
                        <td>{{$item->fan_status_3}}</td>
                        <td>{{$item->heater_status}}</td>
                    </tr>
                    @endforeach


            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @if ($data->onFirstPage())
                <li class="page-item disabled"><span class="page-link">Previous</span></li>
                @else
                <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}">Previous</a></li>
                @endif

                @for ($page = 1; $page <= $data->lastPage(); $page++)
                    <li class="page-item {{ ($page == $data->currentPage()) ? 'active' : '' }}">
                        <a class="page-link" href="{{ $data->url($page) }}">{{ $page }}</a>
                    </li>
                    @endfor
                    @if ($data->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() }}">Next</a></li>
                    @else
                    <li class="page-item disabled"><span class="page-link">Next</span></li>
                    @endif
            </ul>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
