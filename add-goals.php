<?php
session_start();
if (!isset($_SESSION['username'])) {
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
    <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
      <button class="bg-opacity-50 bg-gray-200 bg-opacity-50 backdrop-filter backdrop-blur-lg border border rounded-lg text-white text-xl font-semibold py-4 px-6 md:px-8">Add</button>
      <button class="bg-opacity-50 bg-gray-200 bg-opacity-50 backdrop-filter backdrop-blur-lg border border-gray-300 rounded-lg text-white text-xl font-semibold py-4 px-6 md:px-8">Goals</button>
      <button class="bg-opacity-50 bg-gray-200 bg-opacity-50 backdrop-filter backdrop-blur-lg border border-gray-300 rounded-lg text-white text-xl font-semibold py-4 px-6 md:px-8">Daily Tasks</button>
      <button class="bg-opacity-50 bg-gray-200 bg-opacity-50 backdrop-filter backdrop-blur-lg border border-gray-300 rounded-lg text-white text-xl font-semibold py-4 px-6 md:px-8">Letter to Your Future Self</button>
    </div>
  </section>

  <div class="absolute bottom-12 left-0 right-0 flex justify-center">
    <img src="img/add-goals-guy.png" alt="Boy Standing" class="h-48">
  </div>
</body>
</html>

