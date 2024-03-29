<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DJ Music Archive</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Header Section -->
    <h2>DJ "G" Modern Music Archive</h2>

     <!-- Navigation Links -->
     <ul>
        <li><a href="manage.php">Manage Records</a></li>
        <li><a href="insert.php">Add New Record</a></li>
    </ul>

    <!-- Form Section -->
    <form action="insert.php" method="post">
        <!-- Input Fields for Artist, Title, Year, Label, Genre, Style, Format -->
        <label for="artist">Artist:</label>
        <input type="text" name="artist" required>

        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="year">Year:</label>
        <input type="text" name="year">

        <label for="label">Label:</label>
        <input type="text" name="label">

        <label for="genre">Genre:</label>
        <input type="text" name="genre">

        <label for="style">Style:</label>
        <input type="text" name="style">

        <label for="format">Format:</label>
        <input type="text" name="format">

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>

    <!-- Display Section (PHP Included) -->
    <?php include('display.php'); ?>
</body>
</html>
