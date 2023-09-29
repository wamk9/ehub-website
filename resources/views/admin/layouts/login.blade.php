<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>eHud - Login Painel Administrativo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"/>
    @vite(['resources/css/admin/login.css', 'resources/admin/js/app.js'])
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div id="form-div" class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">
                        <div class="pb-5 ms-xl-4">
                            <span class="h1 fw-bold">eHub</span>
                        </div>

                        <form name="login-form" style="width: 90%;" action="{{ url('admin/login') }}" method="post">
                            @csrf
                            <div class="form-outline mb-4">
                                <label class="form-label" for="email">Email address</label>
                                <input type="email" name="email" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg" />
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-ehub-flat" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img id="banner-img" src="{{ Vite::asset('resources/img/admin/login/login-img.jpg') }}"
                    alt="Login image" class="w-100 vh-100">
                </div>
            </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
