<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139871568-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-139871568-1');
    </script>
  <!-- End Global site tag (gtag.js) - Google Analytics -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#000000">

  <link rel="manifest" href="./manifest.webmanifest">
  <link rel="shortcut icon" href="images/favicon.png">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7/themes/algolia-min.css">
  <link rel="stylesheet" href="./src/index.css">
  <link rel="stylesheet" href="./src/app.css">


  <link rel="stylesheet" href="css/rootcolors.css" type="text/css">
  <link rel="stylesheet" href="css/styles.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap-adjacent.css" type="text/css">
  <link rel="stylesheet" href="css/ais-instantsearch-adjacent.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/algolia-min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
  <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>Contact - Global Web Properties</title>
</head>

<body>
  
<!-- NAVBAR -->
<?php include 'php/navbar.php';?>
<!--END NAVBAR -->

<!-- BEGIN HEADER -->
<div class="jumbotron text-center tag contact-jumbotron-gradient" style="margin-bottom:0;">
  <h1 class="font-poppins">
    <span class="solstice">GET IN TOUCH</span>
  </h1>
  <p class="font-hind nova tag_sub">Use the form below to get in touch with us.</p> 
</div>
<!-- END HEADER -->

<!-- BEGIN CONTACT FORM CONTAINER -->
<div class="container-fluid contact-form-container">
    <form class="form col-sm col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
      <label for="inquiry-type" class="">
        Nature of inquiry:
        <select id="inquiry-type" name="inquiry-type" class="" type="text">
          <<option value="webdes">Web Design</option>
          <<option value="hosting">Hosting</option>
          <<option value="management">Site Management</option>
          <<option value="app">App Development</option>
          <<option value="solutions">Solutions Architecture</option>
        </select>
      </label>
    <form>
</div>
<!-- END CONTACT FORM CONTAINER -->

<!-- BEGIN FOOTER -->
<?php include 'php/footer.php';?>
<!-- END FOOTER -->

</body>

</html>
