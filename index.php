<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
</head>
<body>
    <h2>URL Shortener</h2>    
    <form method="post" action="short.php">
        <label for="url_long">URL:</label>
        <input type="text" name="long_url" required> <br>
        <input type="submit" value="shorten url">
    </form>
    <a href="short.php">Short URLs</a>

</body>
</html>