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
    <h2 class="title-table" style="text-align: center;">All data (Officer)</h2>
    <div style="display:flex; justify-content: center; margin-bottom: 30px;">
    <a href="/logout" style="text-align: center;" class="btn btn-info">Logout</a>
    <a href="/" style="text-align: center; margin: 0 10px; " class="btn btn-info">Home</a>
</div>
<div style="display: flex; justify-content: space-between;">
<div class="btn-group ms-3" role="group" aria-label="Basic mixed styles example  display: flex; justify-content: flex-end; align-item: center;">
  <a href="" type="button" class="btn btn-outline-primary">Send Response</a>
  <a href="" type="button" class="btn btn-outline-primary">By Type</a>
</div>

<div class="d-flex">
<form action="" method="GET">
        @csrf
<div class="dropdown">          
  <select class="btn btn-outline-secondary" name="search" id="search" data-bs-toggle="dropdown" aria-expanded="false">
  <option selected hidden disabled>Short By Type</option>
    <option><a class="dropdown-item" value="diterima">diterima</a></option>
    <option><a class="dropdown-item" value="ditolak">ditolak</a></option>
    <option><a class="dropdown-item" value="proses">proses</a></option>
  </select>
  <button type="submit" class="btn btn-outline-secondary">Search</button>
  <a href="{{route('data')}}" class="btn btn-outline-secondary" type="submit">Refresh</a>
</div>
    </form>
</div>
</div>
<div class="m-4">
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
                <th></th>

            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp

            @foreach ($lamarans as $lamaran)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$lamaran['nama']}}</td>
                <td>{{$lamaran ['email']}}</td>
                <td>{{$lamaran ['age']}}</td>
                <td>{{$lamaran ['phone_number']}}</td>
                <td>{{$lamaran ['last_education']}}</td>
                <td>{{$lamaran ['education_name']}}</td>
                <td><a href="../assets/cv/{{$lamaran->cv_file}}" target="_blank">
                    Lihat CV
                    </a>
                </td>
                <td>{{$lamaran['response'] ? $lamaran['response']['status'] : '-'}}</td>
                <td>{{$lamaran['response'] ? \Carbon\Carbon::parse($lamaran['response']['date'])->format('j F, Y') : '-'}}</td>
                <td><a href="{{route('response.edit', $lamaran->id)}}" class="btn btn-success">Send Response</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>