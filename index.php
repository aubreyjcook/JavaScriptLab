<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>JavaScript Lab</title>
  <meta name="description" content="Javascript lab by Aubrey J Cook">
  <meta name="author" content="Aubrey J Cook">
  
  <!-- Meta Data
  -------------------------------------------------- -->
  <meta property="og:title" content="JavaScript Lab by Aubrey J cook"/>
  <meta property="og:description" content="JavaScript Lab by Aubrey J Cook">
  
  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='https://fonts.googleapis.com/css?family=Overlock|Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/style.css">
  
  <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="javascript.js"></script>
  
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <header>
        <?php include 'header.php';?>
    </header>

    <main>
        <div>
            <p>
                This project focuses on using Javascript to change elements by id. In this case we are using functions to change the image on the right during an onclick event to any of the images on the left. The alt text is also changed.
            </p>
        </div>
      
        <div class="left">
           <a href="#large"><img src="images/picture1.jpg" alt="robin on a road guard" height="125" title="robin on a road guard" onclick="change01()"/></a><br>
           <a href="#large"><img src="images/picture2.jpg" alt="ground hog in a tree" height="125" title="ground hog in a tree" onclick="change02()"/></a><br>
           <a href="#large"><img src="images/picture3.jpg" alt="graveyard at sundown" height="125" title="graveyard at sundown" onclick="change03()"/></a><br>
           <a href="#large"><img src="images/picture4.jpg" alt="statue of jesus" height="125" title="statue of jesus" onclick="change04()"/></a><br>
           <a href="#large"><img src="images/picture5.jpg" alt="white bird on river tree" height="125" title="white bird on river tree" onclick="change05()"/></a><br>
           <a href="#large"><img src="images/picture6.jpg" alt="statue of virgin mary" height="125" title="statue of virgin mary" onclick="change06()"/></a><br>
       </div>
       <div class="right">
           <img id="large" src="images/picture1.jpg" alt="robin on a road guard"/>
       </div>
    </main>

    <footer>
        <?php include 'footer.php';?>
    </footer>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
