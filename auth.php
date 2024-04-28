
<?php
include("db.php");

function generateUsername($email) {
    // Extract the username part from the email address
    $username = strstr($email, '@', true);

    // Generate a random number to append to the username
    $randomNumbers = mt_rand(100, 999); // Generate a random 3-digit number

    // Append the random numbers to the username
    $username .= $randomNumbers;

    return $username;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST['signup']==1){
    // Initialize an empty array to store data
    $data = array();

    // Get data from the POST request and store it in the $data array
    foreach ($_POST as $key => $value) {
        $data[$key] = $value;
    }

    // Email does not exist, proceed with inserting data into the database
    $email = mysqli_real_escape_string($conn, $data['email']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    $username = generateUsername($email);
    $name = mysqli_real_escape_string($conn, $data['name']);
    $age = mysqli_real_escape_string($conn, $data['age']);
    $helpername = mysqli_real_escape_string($conn, $data['helpername']);
    $helperemail = mysqli_real_escape_string($conn, $data['helperemail']);
    $helperrelation = mysqli_real_escape_string($conn, $data['helperrelation']);
    $phone = mysqli_real_escape_string($conn, $data['phone']);
    $goals = mysqli_real_escape_string($conn, $data['Combinedgoals']);
    $reminder = mysqli_real_escape_string($conn, $data['reminder']);

    // Construct and execute SQL query to insert data
    $insert_query = "INSERT INTO user (email, password, username, name, age, helpername, helperemail, helperrelation, phone, goals, reminder) 
                    VALUES ('$email', '$password', '$username', '$name', '$age', '$helpername', '$helperemail', '$helperrelation', '$phone', '$goals', '$reminder')";
    
    if (mysqli_query($conn, $insert_query)) {
        session_start();
        $_SESSION['email'] = $email;
        echo "success";
        header("location: dash.php");
    } else {
        // Insertion failed
        echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
    }
} 
    
}

?>
