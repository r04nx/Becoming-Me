
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/6c06633a-c738-4048-a3a6-66b383beac91/webchat/config.js" defer></script>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    // Redirect the user to the registration page
    header("Location: register.php");
    exit();
}
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
    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
   </div>
  </section>

  <div class="absolute bottom-12 left-0 right-0 flex justify-center">
    <img src="img/add-goals-guy.png" alt="Boy Standing" class="h-48">
  </div>
</body>
</html>

