<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Interview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="assets/img/favicon.png" rel="icon">
</head>
<body>

<form action="{{route('response.update', $lamaranId)}}" method="POST" style="width: 515px; margin: 55px auto; display:block;">
@csrf
@method('PATCH')
  <div class="card-body">
    <h2 class="card-title" style="text-align:center;"><strong>Response</strong></h2>
    <br>
    <div class="mb-3">
      <select class="form-select" required aria-label="select example" name="status" id="status">
    @if ($lamaran)
        <option value="ditolak" {{ $lamaran['status'] == 'ditolak' ? 'selected' : ''}}>ditolak</option>
        <option value="diterima" {{ $lamaran['status'] == 'diterima' ? 'selected' : ''}}>diterima</option>
        <option value="proses" {{ $lamaran['status'] == 'proses' ? 'selected' : ''}}>proses</option>
   @else
      <option selected hidden disabled>Pilih status</option>
      <option value="ditolak">ditolak</option>
      <option value="diterima">diterima</option>
      <option value="proses">proses</option>
    @endif 
    </select>
<br>
  <div class="mb-3">
    <input type="date" name="date" class="form-control" required>
  </div>

  <div class="mb-3">
    <a href="/data/petugas" class="btn btn-primary" type="submit" disabled>Cancel</a> 
    <button class="btn btn-primary" type="submit">Send Response</button>
  </div>
</form>

  </div>



    
</body>
</html>