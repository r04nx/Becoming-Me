<?php
include "header.php";
?>

  <div class="bg-purple-200 min-h-screen flex justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
      <form action="reg3.php" method="post">
        <div class="mb-4">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2">What should we call you?</label>
          <input id="name" name="name" type="text" placeholder="Your name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
          <label for="age" class="block text-gray-700 text-sm font-bold mb-2">How old are you?</label>
          <input id="age" name='age' type="number" placeholder="Enter your age" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="flex justify-end">
          <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Next</button>
        </div>
      
    <br><small>You are just 4 steps away from becoming yourself.</small>
    </div>
  </div>

  <?php
// Assuming you have already established a database connection and stored it in the $conn variable

// Check if the form is submitted using the POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the POST request
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Create an associative array to store the data
    $data = array(
        "email" => $email,
        "password" => $password
    );
    foreach ($data as $name => $value) {
      echo '<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '">';
  }
}
?>
</form>
