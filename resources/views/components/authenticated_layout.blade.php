<!DOCTYPE>
<html lang="en">
<head>
  <title>EVSU Information System</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TOR Webbased System">
  <meta name="author" content="Team Rosalinda">
  <link rel="shortcut icon" href="{{ asset('images_2/favicon.ico') }}">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/simplebar.css'])
</head>

<body>
  <x-sidenav/>
  <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <x-navbar/>
	  <div class="app-content pt-3 p-md-3 p-lg-4">
      {{ $slot }}
    </div>
  </div>
</body>
</html>

