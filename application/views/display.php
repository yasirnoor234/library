<!DOCTYPE html>
<html>
<head>
    <title>Book Catalogue</title>
</head>
<body>
    <h1>Codeigniter Tutorial</h1>
    <?php
        // echo $result[0]['name'];
        foreach ($result as $row)
        {
            echo "<br>";
            echo $row['id'];
            echo "<br>";
            echo $row['name'];
            echo "<br>";
            echo $row['author'];
        }
    ?>
</body>
</html>