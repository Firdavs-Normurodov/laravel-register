<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div
            class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
            <h5 class="my-0 mr-md-auto font-weight-normal">Firdavs</h5>
            <nav class="my-2 mx-auto my-md-0 mr-md-3">
                <a class="p-2 text-decoration-none text-dark" href="#">Features</a>
                <a class="p-2 text-decoration-none text-dark" href="#">Enterprise</a>
                <a class="p-2 text-decoration-none text-dark" href="#">Support</a>
                <a class="p-2 text-decoration-none text-dark" href="#">Pricing</a>
            </nav>
            <form action={{route('logout')}} method="POST" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger" href="#">Logout</button>
            </form>
        </div>
    </div>
    <div class="container">
      <h1>
        welcome , {{Auth::user()->name}}
      </h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
