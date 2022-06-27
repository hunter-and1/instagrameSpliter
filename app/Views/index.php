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

            <?php echo form_open_multipart(route_to('Home::ajax_upload'),'id="upload-form"') ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">1 - Upload an Video</h5>
                        <p>Select an video from your device( Max: 100 MB): </p>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Video</label>
                            <input class="form-control" type="file" id="formFile" name="formFile" accept=".mp4, .ogv, .webm, .ogg, .mp3, .wav, .m4a|video/*" />
                        </div>
                        <span id="chk-error"></span>
                        <div class="progress">
                            <div id="file-progress-bar" class="progress-bar bg-primary" style="width: 0%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">upload</button>
                </div>  
            <?php echo form_close() ?>

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
    <script src="/assets/js/jquery.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on('submit', '#upload-form', function(e){
                $("#chk-error").html('');
                e.preventDefault();
                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();         
                        xhr.upload.addEventListener("progress", function(element) {
                            if (element.lengthComputable) {
                                var percentComplete = ((element.loaded / element.total) * 100);
                                $("#file-progress-bar").width(percentComplete + '%');
                                $("#file-progress-bar").html(percentComplete+'%');
                            }
                        }, false);
                        return xhr;
                    },
                    type: 'POST',
                    url: '<?php echo route_to('Home::ajax_upload') ?>',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    dataType:'json',

                    beforeSend: function(){
                        $("#file-progress-bar").width('0%');
                    },

                    success: function(json){
                        if(json.error){
                            $('#chk-error').html('<p style="color:#EA4335;">'+json.message+'</p>');
                        }else {
                            $('#upload-form')[0].reset();
                            $('#chk-error').html('<p style="color:#28A74B;">'+json.message+'</p>');
                            console.log(json.data);
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
            });
        
            // Check File type validation
            $("#formFile").change(function(){
                var allowedTypes = ['video/mp4','video/ogg','video/webm','audio/webm','audio/wav','audio/ogg','audio/mpeg','video/mpeg'];
                var file = this.files[0];
                var fileType = file.type;
                if(!allowedTypes.includes(fileType)) {
                    $("#chk-error").html('<small class="text-danger">Please choose a valid file (mp4,ogv,webm,ogg,mp3,wav,m4a)</small>');
                    $("#formFile").val('');
                    return false;
                } else {
                    $("#chk-error").html('');
                } 
            });   
        });
    </script>
  </body>
</html>
