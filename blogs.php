
<?php
session_start();
if (!isset($_SESSION['user'])) {
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
    <h1 class="text-2xl font-bold mb-4 text-white">Popular Blogs on mental health & awareness</h1>
    
    </div>
    <?php

// Function to fetch blog posts from Reddit
function fetchBlogPosts() {
    $url = "https://www.reddit.com/r/mentalhealth.json"; // Reddit mental health subreddit

    // Fetch data from Reddit API
    $response = file_get_contents($url);

    // Decode JSON response
    $data = json_decode($response, true);

    // Extract blog post information
    $posts = [];
    foreach ($data['data']['children'] as $post) {
        $title = $post['data']['title'];
        $url = $post['data']['url'];
        $posts[] = ['title' => $title, 'url' => $url];
    }

    return $posts;
}

// Fetch blog posts
$blogPosts = fetchBlogPosts();

// Output the blog posts with specified layout and format
foreach ($blogPosts as $index => $post) {
    echo "<div class='glass-effect p-3'>";
    echo "<h3 class='text-lg font-semibold mb-1'>Blog " . ($index + 1) . "</h3>";
    echo "<p><a href='{$post['url']}' target='_blank'>{$post['title']}</a></p>";
    echo "</div>";
}

?>

    
    </div>
  </div>
  <div class="h-20 "></div>
</body>
</html>

