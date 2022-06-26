<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <meta name="title" content="website">
    <meta name="description" content="website">
    <meta name="keywords" content="website,website">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/assets/img/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/assets/img/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/assets/img/manifest.json">
    <link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/assets/img/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@getbootstrap">
    <meta name="twitter:creator" content="@getbootstrap">
    <meta name="twitter:title" content="Get started with Bootstrap">
    <meta name="twitter:description" content="Bootstrap is a powerful, feature-packed frontend toolkit. Build anything—from prototype to production—in minutes.">
    <meta name="twitter:image" content="https://getbootstrap.com/assets/brand/bootstrap-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="Get started with Bootstrap">
    <meta property="og:description" content="Bootstrap is a powerful, feature-packed frontend toolkit. Build anything—from prototype to production—in minutes.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://getbootstrap.com/assets/brand/bootstrap-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1000">
    <meta property="og:image:height" content="500">

  </head>
  <body>

    <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>

        <div class="container">

            <form >
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">1 - Upload an Video</h5>
                        <p>Select an video from your device( Max: 100 MB): </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Video</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Text</div>
                        </div>
                    </div>
                </div>
            </form>

            <form>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">2 - Split an Video</h5>
                        <div class="mb-3">
                            <label for="formStartAt" class="form-label">Start at</label>
                            <input type="time" class="form-control" id="formStartAt" placeholder="00:00">
                        </div>
                        <div class="mb-3">
                            <label for="formSplitBy" class="form-label">Split by each (seconds)</label>
                            <input type="number" class="form-control" id="formSplitBy" placeholder="0" min="5" value="5" max="300">
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="button" class="btn btn-primary">progress</button>
                </div>
            </form>
        </div>

        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <p class="text-muted">© 2022</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
                </div>

                <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
                </div>

                <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
