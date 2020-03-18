<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel Store Data To Json Format In Database - Tutsmake.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <style>
   .error{ color:red; } 
  </style>
</head>
 
<body>
 
<div class="container">
    <h2 style="margin-top: 10px;">Apps No SQL</h2>
    <form id="laravel_json" method="post" action="{{ route('kategori.store') }}">
      @csrf
      <div class="form-group">
        <label for="formGroupExampleInput">Nama</label>
        <input type="text" name="nama_lengkap" class="form-control" id="formGroupExampleInput" placeholder="">
      </div> 
      <div class="form-group">
        <label for="formGroupExampleInput">Phoe</label>
        <input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="">
      </div>      
      <div class="form-group">
       <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
 
</div>
 
</body>
</html>