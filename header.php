<!doctype html>
<html>
  <head>    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="msapplication-TileImage" content="/assets/images/Logo.png">
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">    
    <meta property="og:url" content="https://www.drops.org.za">
    <meta property="og:site_name" content="Drops">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/header.css" rel="stylesheet">
    <link href="assets/css/base.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/qqj8tkw.css">
    

    <title><?= isset($PageTitle) ? $PageTitle : "Drops"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
  </head>
  <body>
  <header id="main-header" class="d-flex">
        <nav class="w-container navbar navbar-expand-md navbar-toggleable-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="assets/images/logo.png" height="90" width="100">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu" aria-controls="offcanvasExample" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>                
                <div class="navbar-collapse d-md-inline-flex justify-content-end collapse" style="">
                    <ul class="navbar-nav text-right">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#what-is-drop">What is Drops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#get-the-app">Send a Parcel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#drive-for-drops">Drive for Drops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light contact-us-href" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="mobile-menu" aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header">                    
                    <button type="button" class="btn-close text-reset btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <ul class="navbar-nav text-right">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/#what-is-drop">What is Drops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/#get-the-app">Send a Parcel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/#drive-for-drops">Drive for Drops</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/driver-agreement.php">Driver Agreement</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/privacy-policy.php">Privacy</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-light" href="/terms.php">Terms</a>
                        </li>                        
                    </ul>
                  </div>
                </div>                
            </div>
        </nav>
    </header>
    <main>
      
    
  