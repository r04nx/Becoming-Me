<?php
include("db.php");
// Function to sanitize input
function sanitize_input($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// Add Routine
if(isset($_POST['add_routine'])) {
    $day = sanitize_input($_POST['day']);
    $morning_tasks = sanitize_input($_POST['morning_tasks']);
    $evening_tasks = sanitize_input($_POST['evening_tasks']);
    
    // Insert routine into database
    $sql = "INSERT INTO routines (day, morning_tasks, evening_tasks) VALUES ('$day', '$morning_tasks', '$evening_tasks')";
    if ($conn->query($sql) === TRUE) {
        echo "Routine added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch and display existing routines
$sql = "SELECT * FROM routines";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Existing Routines:</h2>";
    while($row = $result->fetch_assoc()) {
        echo "<div class='routine'>";
        echo "<p><strong>Day:</strong> " . $row['day'] . "</p>";
        echo "<p><strong>Morning Tasks:</strong> " . $row['morning_tasks'] . "</p>";
        echo "<p><strong>Evening Tasks:</strong> " . $row['evening_tasks'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No routines found";
}

// Close database connection
$conn->close();
?>
