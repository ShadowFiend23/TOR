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
   <!-- For Datatables-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  <!-- For Datatables Export Button-->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <script defer src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script defer src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script defer src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  @vite([ 'resources/css/app.css', 'resources/js/app.js', 'resources/js/datatable.js'])
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

