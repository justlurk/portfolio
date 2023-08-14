<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userText = $_POST["user_text"];

    // Append the user's text to a file
    $file = fopen("user_texts.txt", "a");
    fwrite($file, $userText . "\n");
    fclose($file);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Text Storage</title>
</head>
<body>
    <h1>Stored Texts</h1>
    <div>
        <?php
        // Read and display the stored texts from the file
        $storedTexts = file("user_texts.txt");
        foreach ($storedTexts as $text) {
            echo "<p>" . htmlspecialchars($text) . "</p>";
        }
        ?>
    </div>
</body>
</html>
