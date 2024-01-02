<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images_2/favicon.ico">
  <title>EVSU Information System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&family=Roboto&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  @vite([ 'resources/css/app.css', 'resources/js/app.js'])
  <style type="text/css">
      .app-icon-container {
          background-image: url({{ asset('images_2/bg-logo.png') }});
          background-size: auto 100%;
          background-position: top right;
          background-repeat: no-repeat;
      }
  </style>
</head>
<body>
  {{ $slot }}
</body>
</html>