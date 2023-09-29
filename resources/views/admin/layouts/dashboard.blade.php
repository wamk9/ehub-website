<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>eHud - Painel Administrativo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"/>
    @vite([
        'resources/css/admin/app.css',
        'resources/js/admin/app.js'
    ])
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>
        <div class="header_img">
            <img src="https://i.imgur.com/hczKIze.jpg" alt="" />
        </div>
    </header>

    @component('components.sidebar')

    @endcomponent

    @section('sidebar')
    @show

    <main class="height-100">
        @yield('content')
    </main>

    @section('footer')
    @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
