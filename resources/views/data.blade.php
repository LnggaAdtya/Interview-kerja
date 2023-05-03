<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interview Kerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="assets/img/favicon.png" rel="icon">
</head>

<body>
    <br>
    <h2 class="title-table" style="text-align: center;">All data</h2>
    <div style="display:flex; justify-content: center; margin-bottom: 30px;">
        <a href="/logout" style="text-align: center;" class="btn btn-info">Logout</a>
        <a href="/" style="text-align: center; margin: 0 10px; " class="btn btn-info">Home</a>

    </div>
    <div style="display: flex; justify-content: space-between; float: left;">
        <div class="d-flex">
            <form action="" method="GET" class="d-flex">
                @csrf
                <div class="dropdown ml-5 ">
                    <select class="btn btn-outline-secondary" name="search" id="search" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <option selected hidden disabled>Short By Type</option>
                        <option><a class="dropdown-item" value="diterima">diterima</a></option>
                        <option><a class="dropdown-item" value="ditolak">ditolak</a></option>
                        <option><a class="dropdown-item" value="proses">proses</a></option>
                    </select>
                </div>
                <button type="submit" class="btn btn-outline-secondary">Search</button>
            </form>
            <div>
                <a href="{{ route('data') }}" class="btn btn-outline-secondary" type="submit">Refresh</a>
            </div>
        </div>
    </div>
    <div style="float: right; ">
        <div class="d-flex mb-3">
            <a href="{{ route('export.excel') }}" class="btn btn-success">Export to Excel</a>
            <a href="{{ route('export-pdf') }}" class="btn btn-danger">Export to PDF</a>
        </div>
    </div>
    <div style="clear: both;" class="m-4">

        <table class="table table-hover table-success">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Telp</th>
                    <th>Last Education</th>
                    <th>Education Name</th>
                    <th>CV</th>
                    <th>Status</th>
                    <th>Schedule</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                    $search = '';
                    if (@$_GET['search']) {
                        $search = $_GET['search'];
                    }
                @endphp


                @foreach ($lamarans as $lamaran)
                    @if ($search !== '')
                        @if ($lamaran->response)
                            @if ($lamaran->response['status'] == $search)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $lamaran['nama'] }}</td>
                                    <td>{{ $lamaran['email'] }}</td>
                                    <td>{{ $lamaran['age'] }}</td>
                                    @php
                                        $number = substr_replace($lamaran->phone_number, '62', 0, 1);
                                    @endphp

                                    @php
                                        if ($lamaran->response) {
                                            $pesanWa = 'Hello ' . $lamaran->nama . '! lamaran anda di ' . $lamaran->response['status'];
                                        } else {
                                            $pesanWa = 'Belum ada data response';
                                        }
                                    @endphp
                                    <td><a href="https://wa.me/{{ $number }}?text={{ $pesanWa }}"
                                            target="_blank"> {{ $number }} </a></td>
                                    <td>{{ $lamaran['last_education'] }}</td>
                                    <td>{{ $lamaran['education_name'] }}</td>
                                    <td><a href="../assets/cv/{{ $lamaran->cv_file }}" target="_blank">
                                            Lihat CV
                                        </a>
                                    </td>
                                    <td>
                                        @if ($lamaran->response)
                                            {{ $lamaran->response['status'] }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($lamaran['created_at'])->format('j F, Y') }}</td>
                                    <td>
                                        <form action="{{ route('delete', $lamaran->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endif
                    @else
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $lamaran['nama'] }}</td>
                            <td>{{ $lamaran['email'] }}</td>
                            <td>{{ $lamaran['age'] }}</td>
                            @php
                                $number = substr_replace($lamaran->phone_number, '62', 0, 1);
                            @endphp

                            @php
                                if ($lamaran->response) {
                                    $pesanWa = 'Hello ' . $lamaran->nama . '! lamaran anda di ' . $lamaran->response['status'];
                                } else {
                                    $pesanWa = 'Belum ada data response';
                                }
                            @endphp
                            <td><a href="https://wa.me/{{ $number }}?text={{ $pesanWa }}" target="_blank">
                                    {{ $number }} </a></td>
                            <td>{{ $lamaran['last_education'] }}</td>
                            <td>{{ $lamaran['education_name'] }}</td>
                            <td><a href="../assets/cv/{{ $lamaran->cv_file }}" target="_blank">
                                    Lihat CV
                                </a>
                            </td>
                            <td>
                                @if ($lamaran->response)
                                    {{ $lamaran->response['status'] }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($lamaran['created_at'])->format('j F, Y') }}</td>
                            <td>

                                <form action="{{ route('delete', $lamaran->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
