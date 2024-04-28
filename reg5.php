
<?php
include "header.php";

?>
<div class="questionnaire-container bg-purple-200 min-h-screen flex justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-xl font-bold mb-4 text-purple-700">Have you consulted any mental health professional?</h2>
        <form method="post" action="reg6.php">
            <label class="block mb-2">
                <input type="radio" name="consulted" value="Yes" class="mr-2">
                Yes
            </label>
            <label class="block mb-2">
                <input type="radio" name="consulted" value="No" class="mr-2">
                No
            </label>
            <label class="block mb-4">
                <input type="radio" name="consulted" value="Prefer not to say" class="mr-2">
                Prefer not to say
            </label>
            <input type="submit" value="Next" class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        
      <br><small>You are just 1 steps away from becoming yourself.</small>
    </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an empty array to store data
    $data = array();

    // Get data from the POST request and store it in the $data array
    foreach ($_POST as $key => $value) {
        $data[$key] = $value;
    }
    echo $data;
    // Loop through the $data array and generate hidden input fields
    foreach ($data as $name => $value) {
        echo '<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '">';
    }
}
?>
</form>