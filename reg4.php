
<?php
include "header.php";

?>
<div class="questionnaire-container bg-purple-200 min-h-screen flex justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-xl font-bold mb-4 text-purple-700">When is the good time to focus on yourself each day?</h2>
        <form id="remainderForm" method="post" action="reg5.php">
    <label class="block mb-2">
        <input type="time" name="reminder" class="mr-2" step="1800" pattern="\d{1,2}:\d{2} (AM|PM)" required> <br>
    </label>
    <input type="submit" value="Submit" class="bg-purple-700 mp-3 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">

    <br><br>
    <small>You are just 2 steps away from becoming yourself.</small>
    </div>
</div>

<?php
// Assuming you have already established a database connection and stored it in the $conn variable

// Check if the form is submitted using the POST method
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