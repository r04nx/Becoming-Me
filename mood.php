<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How Do You Feel Today?</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
}

.container {
    max-width: 500px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    color: #333;
}

.options {
    margin-bottom: 20px;
}

input[type="radio"] {
    display: none;
}

label {
    display: inline-block;
    cursor: pointer;
    margin: 10px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>How Do You Feel Today?</h1>
        <form action="" method="post">
            <div class="options">
                <input type="radio" id="low" name="feeling" value="low" required>
                <label for="low"><img src="sad.png" alt="Sad"> I'm feeling low</label><br>
                <input type="radio" id="okay" name="feeling" value="okay">
                <label for="okay"><img src="neutral.png" alt="Neutral"> I'm Okay</label><br>
                <input type="radio" id="happy" name="feeling" value="happy">
                <label for="happy"><img src="happy.png" alt="Happy"> I'm Happy</label><br>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $feeling = $_POST['feeling'];
    
    $user = $_SESSION['user']; // Assuming session['user'] contains user identifier
    $sql = "INSERT INTO user_feelings (user_id, feeling) VALUES ('$user', '$feeling')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Feeling stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
} else {
    header("Location: form.html"); // Redirect to form if accessed directly
}
?>
