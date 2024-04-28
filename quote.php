<?php

// Function to fetch a random motivational quote and image URL
function getRandomMotivationalQuote() {
  $url = "https://api.forismatic.com/api/1.0/?method=getQuote&lang=en&format=json";
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);

  // Decode the JSON response
  $data = json_decode($response);

  // Extract the quote text and image URL
  if (isset($data->quoteText) && isset($data->quoteAuthor) && isset($data->quoteLink)) {
    $quote = $data->quoteText;
    $author = $data->quoteAuthor;
    $imageUrl = "https://www.inspiroquote.com/img/authors/" . strtolower(str_replace(" ", "_", $author)) . ".jpg";
    return array("quote" => $quote, "author" => $author, "imageUrl" => $imageUrl);
  } else {
    return null;
  }
}

// Get a random motivational quote
$quoteData = getRandomMotivationalQuote();

// Check if data is retrieved successfully
if ($quoteData) {
  $quote = $quoteData["quote"];
  $author = $quoteData["author"];
  $imageUrl = $quoteData["imageUrl"];

  // Display the quote and image
  echo "<p>$quote - $author</p>";
} else {
  echo "";
}

?>
