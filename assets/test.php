<?php
include("header.php");
function generateLinkTree($directory) {
    // Get list of files and directories in the current directory
    $contents = scandir($directory);
    
    // Exclude . and .. directories
    $contents = array_diff($contents, array('.', '..'));
    
    // Start the unordered list
    echo '<ul class="list-disc ml-4">';
    
    // Loop through the contents
    foreach ($contents as $item) {
        // Construct the full path
        $path = $directory . '/' . $item;
        
        // Check if it's a directory
        if (is_dir($path) && $item !== '.git') {
            // Output the directory as a list item
            echo '<li class="text-purple-700">' . $item;
            // Recursively call the function for subdirectories
            generateLinkTree($path);
            echo '</li>';
        } else {
            // Output the file as a list item
            if ($item !== '.git') {
                echo '<li><a href="' . $path . '" class="text-purple-700 hover:underline">' . $item . '</a></li>';
            }
        }
    }
    
    // Close the unordered list
    echo '</ul>';
}

// Call the function to generate the link tree starting from the current directory
generateLinkTree('.');
