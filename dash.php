
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
      background-image: url('img/login-side-img.png'); /* Replace 'your-background-image.jpg' with your image URL */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }

    .glass-effect {
      backdrop-filter: blur(8px);
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 0.5rem;
    }
  </style>
</head>
<body class="bg-gray-200">
  <div class="container mx-auto p-3">
    <h1 class="text-2xl font-bold mb-4 text-white">Your plan for the day</h1>
    
    <!-- Feed layout -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <!-- Cards -->
      <div class="glass-effect p-4">
        <h2 class="text-lg font-semibold mb-2">Card 1</h2>
    </div>
    <div class="glass-effect p-4">
        <h2 class="text-lg font-semibold mb-2">Card 2</h2>
        <p>This is another card with some content.</p>
    </div>
    
    <div class="glass-effect px-4">
        <p class="text-md font-semibold pt-2 pb-1">Routines</p>
        <div class="relative pb-2 pl-2 pr-2 flex justify-between items-center">
        <div class="mr-2 flex items-center">
        <div class="text-purple-800 rounded-full h-8 w-8 flex items-center justify-center mr-2">
        <img src="img/morning.png" alt="Screen Time Graph Image" class="rounded-md">
        </div>
        <div>
            <h3 class="text-sm font-semibold mb-1"><b>Morning</b></h3>
        </div>
    </div>
    <div class="flex items-center">
        <div class="text-blue-800 rounded-full h-8 w-8 flex items-center justify-center mr-2">
     
            <img src="img/evening.png" alt="Screen Time Graph Image" class="rounded-md">
        </div>
        <div>
            <h3 class="text-sm font-semibold mb-1"><b>Evening</b></h3>
            <!-- No additional content -->
        </div>
</div>
    </div>

</div>

      <!-- Small blocks
      <div class="glass-effect p-2">
        <h3 class="text-lg font-semibold mb-1">Block 1</h3>
        <p>This is a small block.</p>
      </div> -->



      <section class="bg-white rounded-lg overflow-hidden shadow-lg glass-effect">
    <div class="py-6 px-4 md:px-8 mx-auto max-w-screen-xl lg:py-10 lg:px-12">
        <div class="bg-pink-200 border border-pink-400 rounded-lg p-3 md:p-4 mb-6">
            <a href="#" class="bg-pink-300 text-pink-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md mb-2">
                <svg class="w-3 h-3 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Tutorial
            </a>
            <h1 class="text-gray-900 text-xl md:text-3xl font-extrabold mb-2">Daily Coaching</h1>
            <button class="bg-pink-700 text-white text-base font-medium py-2 px-4 rounded-lg">Play</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-yellow-200 border border-yellow-400 rounded-lg p-3 md:p-4 flex items-center">
                <div class="flex-1">
                    <h2 class="text-gray-900 text-xl md:text-3xl font-extrabold mb-2">Mood Tracker</h2>
                </div>
                <img src="img/mood.png" alt="Mood Tracker Image" class="w-24 h-24 object-cover rounded-md">
            </div>
            <div class="bg-cyan-200 border border-cyan-400 rounded-lg p-3 md:p-4 flex items-center">
                <div class="flex-1">
                    <h2 class="text-gray-900 text-xl md:text-3xl font-extrabold mb-2">Weekly Checkin</h2>
                </div>
                <img src="img/progress.png" alt="Weekly Checkin Image" class="w-24 h-24 object-cover rounded-md">
            </div>
            <div class="bg-blue-200 border border-blue-400 rounded-lg p-3 md:p-4 col-span-full flex items-center">
                <div class="flex-1">
                    <h2 class="text-gray-900 text-xl md:text-3xl font-extrabold mb-2">Digital Wellbeing</h2>
                
                </div>
                <img src="img/screen-time.png" alt="Screen Time Graph Image" class="w-18 h-20 object-cover rounded-md">
            </div>
        </div>
    </div>
</section>






      <div class="glass-effect p-4">
        <h3 class="text-lg font-semibold mb-1">Explore </h3>
      </div>
      <div class="glass-effect p-3">
        <h3 class="text-lg font-semibold mb-1">Block 3</h3>
        <p>Yet another small block.</p>
      </div>
    </div>
  </div>
  <div class="h-20 "></div>
</body>
</html>
