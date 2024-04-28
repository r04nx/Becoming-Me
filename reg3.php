
<?php
include "header.php";
?>
<div class="questionnaire-container bg-purple-200 min-h-screen flex justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-xl font-bold mb-4 text-purple-700">What are your goals?</h2>
        <form id="goalsForm" method="post" action="reg4.php">
    <label class="block mb-2">
        <input type="checkbox" name="goals" value="Improve career prospects" class="mr-2">
        Improve career prospects
    </label>
    <label class="block mb-2">
        <input type="checkbox" name="goals" value="Learn new skills" class="mr-2">
        Learn new skills
    </label>
    <label class="block mb-2">
        <input type="checkbox" name="goals" value="Achieve work-life balance" class="mr-2">
        Achieve work-life balance
    </label>
    <label class="block mb-2">
        <input type="checkbox" name="goals" value="Start a new business" class="mr-2">
        Start a new business
    </label>
    <label class="block mb-4">
        <input type="checkbox" name="goals" value="Travel more" class="mr-2">
        Travel more
    </label>
    <input type="button" value="Next" class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="processGoals()">
    <br><small>You are just 3 steps away from becoming yourself.</small>
<script>
function processGoals() {
    // Get all checkboxes with name "goals"
    var checkboxes = document.querySelectorAll('input[name="goals"]:checked');
    
    // Initialize an array to store the selected goals
    var selectedGoals = [];
    
    // Iterate over each checked checkbox and push its value to the array
    checkboxes.forEach(function(checkbox) {
        selectedGoals.push(checkbox.value);
    });
    
    // Combine the selected goals into a comma-separated string
    var goalsString = selectedGoals.join(', ');
    
    // Create a hidden input field to store the combined goals string
    var hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'combinedGoals';
    hiddenInput.value = goalsString;
    
    // Append the hidden input field to the form
    document.getElementById('goalsForm').appendChild(hiddenInput);
    
    // Submit the form
    document.getElementById('goalsForm').submit();
}
</script>
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
    // Loop through the $data array and generate hidden input fields
    foreach ($data as $name => $value) {
        echo '<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '">';
    }
}
?>
</form>
