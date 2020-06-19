<?php require_once 'system/class.url.php'; ?>
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <title>URL Verkorten &mdash; Jansen.work</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/@bybas/latte-ui@1.9.0-beta.1/dist/latte-ui.css"/>
    <link rel="stylesheet" type="text/css" href="assets/app.css">
    <meta property="og:title" content="URL Verkorten &mdash; Jansen.work" />
    <meta property="og:site_name" content="Jansen.work - Contact me: mitchel@jansen.work" />
    <meta property="og:description" content="URL Verkorten op het subdomain https://url.jansen.work - Je kan deze URL verkorter alleen gebruiken met een pincode. Interesse in een pincode? Contact Mitchel per e-mail." />
    <meta property="og:image" content="https://url.jansen.work/internet.png" />
    <meta property="og:url" content="https://url.jansen.work" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://url.jansen.work/internet.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://url.jansen.work/internet.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-B9BoFFAuBaCfqw6lxWBZrhg/z4NkwqdBci+E+Sc2XlK/Rz25RYn8Fetb+Aw5irxa" crossorigin="anonymous">
</head>
<body">
<main id="emc">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5" style=" margin-top: 100px;">
                <!-- UNLOCK -->
                <div class="panel">
                    <div class="panel-header"><span class="panel-title">Shorten my URL</span></div>
                    <?php (new url)->postURL(); ?>
                    <form method="post">
                        <div class="panel-body">
                            You know, the problem of long URLs, that is now a thing of the past, a shortened URL on the subdomain of jansen.work.
                            Before you can shorten a domain, you first have to enter your own personal pincode. No pincode, but interested? Please contact Mitchel.
                        </div>

                        <div class="panel-body">
                            <div class="form-group input-group">
                                <div class="input-group-addon"><i class="fad fa-key"></i></div>
                                <input type="password" name="pincode" id="pincode" class="form-control" placeholder="Pincode">
                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-addon"><i class="fad fa-link"></i></div>
                                <input type="text" name="url" id="url" class="form-control" placeholder="https://">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit-url" class="btn btn-pill btn-contained btn-info"><i class="fad fa-external-link-alt ulicon"></i> <span>Shorten</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END UNLOCK -->
            </div>
        </div>
    </div>

</main>
</body>
<script nomodule src="/assets/app.js"></script>
</html>
