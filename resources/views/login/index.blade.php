<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Integral Technology | {{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body class="text-center d-flex justify-content-center">
    <div class="container">
        {{-- <h1>Halaman Login</h1> --}}
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-blue login-box">
                {{-- error message --}}
                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show mx-4 my-3" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
    
                <main class="form-signin w-100 m-auto flex-shrink-0">
                    <!-- Awal Form -->
                    <form method="POST" action="/login">
                        @csrf
                        <img class="mb-4 mt-3" src="/img/integral-putih.png" width="150" height="100">
                        <div class="h1">
                            <h1 class="h3 mb-3 fw-normal">Login</h1>
                        </div>
    
                        <!--Username  -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Username" aria-label="name" required>
                        </div>
    
                        <!-- Password -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                aria-label="Password" required>
                        </div>
    
                        {{-- Button --}}
                        <div class="row">
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-dark text-light">Login</button>
                            </div>
                        </div>
                    </form>
                </main>
                {{-- Akhir Form --}}
    
                {{-- Footer --}}
                <footer class="mt-auto py-3">
                    <div class="container">
                        <span class="text-white">&copy Integral Technology. 2022.</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
