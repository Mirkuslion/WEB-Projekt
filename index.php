<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opacko</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<header class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
    <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center me-3 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerNavbar" aria-controls="headerNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="headerNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="#" class="nav-link text-white fw-bold">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">About</a></li>
            </ul>
            <form class="d-flex mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>

<div class="container">
<div class="p-5 bg-danger text-white text-center">
    <h1>Hořovice</h1>
    <p>Moje město</p>
</div>

    <hr>

<main role="main">

    <br>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

</main>

    <div class="container p-5 my-5 border">
        <h1>My First Bootstrap Page</h1>
        <p>This container has a border and some extra padding and margins.</p>
    </div>

    <div class="container p-5 my-5 bg-dark text-white">
        <h1>My First Bootstrap Page</h1>
        <p>This container has a dark background color and a white text, and some extra padding and margins.</p>
    </div>

    <div class="container p-5 my-5 bg-primary text-white">
        <h1>My First Bootstrap Page</h1>
        <p>This container has a blue background color and a white text, and some extra padding and margins.</p>
    </div>

    <hr>

    <div class="container">
        <div class="row">
        <div class="col-sm-4 mb-3">
            <h2>Zámek</h2>
            <p>Image at the top (card-img-top):</p>
            <div class="card w-100">
                <img class="card-img-top" src="./img/1.jpg" alt="Card image" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <h2>Pohled letadlem</h2>
            <p>Image at the top (card-img-top):</p>
            <div class="card w-100">
                <img class="card-img-top" src="./img/2.jpg" alt="Card image" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <h2>Nemocnice</h2>
            <p>Image at the top (card-img-top):</p>
            <div class="card w-100">
                <img class="card-img-top" src="./img/3.jpg" alt="Card image" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top"> <div class="row">
        <div class="col-6 col-md"> <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li> </ul> </div>
        <div class="col-6 col-md"> <h5>Resources</h5> <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li> </ul> </div>
        <div class="col-6 col-md"> <h5>About</h5> <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li> </ul> </div> </div> </footer>
</div>

</body>
</html>