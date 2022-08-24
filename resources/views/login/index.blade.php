<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
      body {
        background-color: rgb(204, 204, 204);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card px-5 py-3 bg-white">

            <h1 class="text-dark text-center" style="margin-bottom: 50px">LOGIN BRO!!</h1>
            <form action="/login" method="POST">
              @csrf
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                <input type="text" name="name" class="form-control" placeholder="Name" aria-label="name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
              </div>
              
              <button class="btn btn-warning" type="submit">Login</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>

    <footer class="mt-auto text-center">
      <p>&copy UNCHPAS 2022</p>
    </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>