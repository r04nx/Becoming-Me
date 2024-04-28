<?php
session_start();
if (!isset($_SESSION['user'])) {
    // Redirect the user to the registration page
    header("Location: register.php");
    exit();
}
include "header.php";
?>
<style>
    body {
      margin: 0;
      padding: 0;
      background: url('img/add-goals-img.png') center/cover fixed;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as needed */
      z-index: -1;
    }
  </style>
</head>
<body>
  <div class="overlay"></div>
  <section class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-1">
    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/3kFX6pMQ3xNlYMuGKAupya?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>  
</div>
  </section>

  <div class="absolute bottom-12 left-0 right-0 flex justify-center">
    <!-- <img src="img/add-goals-guy.png" alt="Boy Standing" class="h-48"> -->
  </div>
</body>
</html>

