<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     <!-- Favicons -->
    <link href="{{ asset('assets/img/devs-hood.png') }}" rel="icon">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>
<body>

    <section style="padding-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <img src="{{ asset('assets/img/devs-hood.png') }}" alt="" width="200px">
                    <h1 style="font-size: 100px">404</h1>
                    <h2>Page Not Found</h2>
                    <p>The page you requested could not be found</p>
                    <a href="/" class="btn btn-dark px-5 py-3">Visit HomePage</a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
