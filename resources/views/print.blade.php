<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Interview Kerja</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 10pt;
        }
    </style>
    <div class="container">
        <center>
            <h4>Data Interview Kerja</h4>
        </center>
        <br>
        
    </div>
<div class="m-4">
    <table class="table table-bordered" style="width: 100%;">
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
                <td><a href="../assets/cv/{{$lamaran['cv_file']}}">
                    Lihat CV
                    </a>
                </td>
                <td></td>
                <td>{{\Carbon\Carbon::parse($lamaran['created_at'])->format('j F, Y')}}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>