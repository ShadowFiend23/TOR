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

  @vite([ 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="app">
  <x-navbar/>
  <div class="app-wrapper">
	  <div class="app-content pt-3 p-md-3 p-lg-4">
      <x-sidenav/>
      {{ $slot }}
    </div>
  </div>
</body>
</html>

