<?php 
include "header.php";
session_start();

// Check if the form is submitted
if(isset($_POST['login'])) {
    // Check if email and password are provided
    if(isset($_POST['email']) && isset($_POST['password'])) {
        // Get the email and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Include database connection
        include('db.php');

        // Prepare the SQL statement using prepared statements
        $sql = 'SELECT id, username FROM user WHERE email=? AND password=?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a row is returned
        if ($row = $result->fetch_assoc()) {
            // Start the session
            $_SESSION['user'] = $row['username'];
            // Redirect to dashboard
            header("Location: dash.php");
            exit(); // Terminate the script after redirection
        } else {
            // Invalid credentials
            echo '<script>alert("Invalid Username and Password")</script>';
        }
    } else {
        // Form fields are not set
        echo '<script>alert("Email and password are required")</script>';
    }
}
?>

<?php include "header.php"; ?>
<div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div>
                <img src="img/icon-png.png" class="w-32 mx-auto" />
            </div>
            <div class="mt-1 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">Becoming Me</h1>
                <div class="w-full flex-1 mt-8">
                    <div class="flex flex-col items-center">
                        <!-- Google Sign Up Button -->
                        <button class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                            <!-- <div class="bg-white p-2 rounded-full">
                                <svg class="w-4" viewBox="0 0 533.5 544.3">
                                 
                                </svg>
                            </div>
                            <span class="ml-4">Sign in with Google</span> -->
                            <span class="text-plain">
                                Don't have an account? <a class="text-purple-600" href="register.php">Signup</a>
                            </span> 
                        </button>
                    </div>

                    <!-- Separator -->
                    <div class="my-3 border-b text-center">
                        <div class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                            Or sign in with e-mail
                        </div>
                    </div>

                    <!-- Email Input Field -->
                    <div class="mx-auto max-w-xs">
                        <form action="" method="post">
                            <input name='email' class="transition-all duration-300 ease-in-out w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email" placeholder="Email" />
                            <!-- Password Input Field -->
                            <input name='password' class="transition-all duration-300 ease-in-out w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                type="password" placeholder="Password" />
                            <!-- Login Button -->
                            <button class="transition-all duration-300 ease-in-out mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 flex items-center justify-center focus:shadow-outline focus:outline-none" name='login' value="1">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <!-- Login icon -->
                                </svg>
                                <span class="ml-3">Welcome Back</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Side Image -->
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image:url('img/login-side-img.png');">
            </div>
        </div>
    </div>
</div>
<div class="h-3 bg-white"></div>
<?php include "footer.php"; ?>
