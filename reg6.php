
<?php
include "header.php";

?>
<div class="questionnaire-container bg-purple-200 min-h-screen flex justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-xl font-bold mb-4 text-purple-700">In times of need, who's your lifeline?</h2>
        <form method="post" action="auth.php">
        <div class="mb-4">
                <label class="block mb-2" for="email">Name</label>
                <input type="text" id="email" name="helpername" class="block w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="helperrelation">Relationship:</label>
                <select id="relationship" name="helperrelation" class="block w-full p-2 border border-gray-300 rounded">
                    <option value="Fiance">Fiance</option>
                    <option value="Parents">Parents</option>
                    <option value="Guardian">Guardian</option>
                    <option value="Friend">Friend</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="email">Email:</label>
                <input type="email" id="email" name="helperemail" class="block w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-2" for="phone">Phone Number:</label>
                <input type="text" id="phone" name="helperphone" class="block w-full p-2 border border-gray-300 rounded" required>
            </div>
            <input type="submit" value="Submit" class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">

        <br><small>You are just 0 step away from becoming yourself.</small>
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
    $data["signup"] = "1";
    echo $data;
    // Loop through the $data array and generate hidden input fields
    foreach ($data as $name => $value) {
        echo '<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '">';
    }
}
?>
</form>