<?php
session_start();
require_once('functions.php');

if (!isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['sign-out'])) {
    // Clear all session variables
    session_unset();
    // Destroy the session
    session_destroy();
    // Redirect to the login page or home page
    header("Location: index.php");
    exit; // Stop further execution of the script after redirection
  }

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>iDNFY</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&family=Syne:wght@400..800&display=swap" rel="stylesheet">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}



link-secondary:hover {
 color: #EA4335 !important; 
}

@media (min-width: 768px) {
  .bd-placeholder-img-lg {
    font-size: 3.5rem;
  }
}

.b-example-divider {
  width: 100%;
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

.btn-bd-primary {
  --bd-primary-bg: #EA4335; /* Base color */
  --bd-primary-rgb: 234, 67, 53; /* RGB values */

  --bs-btn-font-weight: 600;
  --bs-btn-color: var(--bs-white); /* White text */
  --bs-btn-bg: var(--bd-primary-bg); /* Base background color */
  --bs-btn-border-color: var(--bd-primary-bg); /* Base border color */

  /* Hover state */
  --bs-btn-hover-color: var(--bs-white); /* White text on hover */
  --bs-btn-hover-bg: #D63A2D; /* Darker background on hover */
  --bs-btn-hover-border-color: #D63A2D; /* Darker border on hover */

  /* Focus state */
  --bs-btn-focus-shadow-rgb: var(--bd-primary-rgb); /* Focus shadow using RGB */

  /* Active state */
  --bs-btn-active-color: var(--bs-btn-hover-color); /* Same as hover text */
  --bs-btn-active-bg: #C23125; /* Even darker background on active */
  --bs-btn-active-border-color: #C23125; /* Even darker border on active */
}

.bd-mode-toggle {
  z-index: 1500;
}

.bd-mode-toggle .dropdown-menu .active .bi {
  display: block !important;
}

@font-face {
font-family: 'Product Sans';
src: url('assets/fonts/ProductSans-Regular.ttf') format('truetype');
font-weight: normal;
font-style: normal;
}

@font-face {
font-family: 'Product Sans';
src: url('assets/fonts/ProductSans-Bold.ttf') format('truetype');
font-weight: bold;
font-style: normal;
}

@font-face {
font-family: 'Product Sans';
src: url('assets/fonts/ProductSans-Italic.ttf') format('truetype');
font-weight: normal;
font-style: italic;
}

@font-face {
font-family: 'Product Sans';
src: url('assets/fonts/ProductSans-BoldItalic.ttf') format('truetype');
font-weight: bold;
font-style: italic;
}

/* Apply the font to the body and headers */
body {
font-family: 'Product Sans', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
font-family: 'Product Sans', sans-serif;
font-weight: bold;
}

</style>
    

    <link href="modals.css" rel="stylesheet">

  </head>
  <body>

  <div style="height: 100vh !important;"  class="container d-flex flex-row align-items-center justify-content-center">
      <div class="col-lg-4"></div>
      <div class="col-lg-4 col-8 d-flex flex-column align-items-center justify-content-center">
        <img src="assets/images/hello-cute.webp" alt="" style="height: 200px;">
        <h1>Hello, <?php echo $_SESSION['fname'];?></h1>
        <form action="" method="POST" class="w-100 p-0 m-0">
        <input name="sign-out" value="Sign out" type="submit" class="btn btn-lg btn-outline-danger rounded-pill w-100 mt-4">
        </form>
      </div>
      <div class="col-lg-4"></div>
    </div>

  </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
