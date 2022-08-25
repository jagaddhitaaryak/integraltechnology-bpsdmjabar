<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/login.css">

    


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style> 
  </head>
  <body class="text-center">
    <div class="container">
      <main class="form-signin w-100 m-auto">

        {{-- Awal Form --}}
      <form>
        <img class="mb-4 mt-3" src="/img/integral-biru.png" width="150px" height="100">
      <div class="h1">
          <h1 class="h3 mb-3 fw-normal">Login</h1>
      </div>

  <!--Username  -->
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
      <input type="text" name="name" class="form-control" placeholder="Username" aria-label="name" aria-describedby="basic-addon1">
    </div>
  
    <!-- Password -->
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
      <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
    </div>

    {{-- Button --}}
  {{-- <button class="btn btn-lg btn-primary" type="submit">Masuk</button> --}}
  <div class="row">
    <div class="d-flex justify-content-end">
      <button type="submit" class="btn btn-lg btn-primary">Login</button>
    </div>
  </div>

  {{-- Footer --}}
  <footer class="mt-auto text-center">
      <p>Integral Tecnology</p>
    </footer>

  </form>
  {{-- Akhir Form --}}
</main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
     
  </body>
</html>


   








    
