<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mosyen AI - AI 3D Integrated</title>
     <link href="../css/main.css" rel="stylesheet" />
    <link rel="icon" href="/assets/logomosyen-icon.svg" type="image/svg+xml">

    @vite('resources/css/app.css')
     <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
      <style>
        html {
        scroll-behavior: smooth;
        }

      </style>

</head>
<body class="overflow-x-hidden font-['Product_Sans']">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @vite('resources/js/app.js')
</body>
</html>