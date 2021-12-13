<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Medicine Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css?ver=7.2.3">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <a class="navbar-brand" href="/">Simple Medicine Management</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <br>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-3">
        <a class="btn btn-info" href="/medicines">Show Medicines</span></a>
      </div>
      <div class="col-3">
        <a class="btn btn-info" href="{{ route('medicines.create') }}">Add New Medicine</span></a>
      </div>
      <div class="col-3"></div>
    </div>
    <br>
    
@yield('content')
    <footer class="row">
        <div class="col-4"></div>
        <div class="col-4 myfoot">
          <p>&copy; All rights reserved by <a href="#" target="_blank">Lukman Hakim</a> | {{ date('Y') }}</p>
        </div>
        <div class="col-4"></div>
    </footer>
</div>
</body>
</html>
