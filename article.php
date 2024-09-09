<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <h1 style="text-align:center;">Jeizz</h1>
    <p style="text-align:center;">tambah wawasan dengan membaca</p>
    <style>
        .container {
    width: 700px;
    margin: 20px auto;
}

.category-list ul {
    list-style-type: none;
    padding: 0;
}

.category-list ul li {
    margin: 5px 0;
}

.category-list ul li a {
    text-decoration: none;
    color: #333;
}
    </style>
</head>
<body>
    <div class="container">
        <?php
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $sql = "SELECT * FROM articles WHERE id = $id";
        $result = $conn->query($sql);

        if ($row = $result->fetch_assoc()) {
            echo "<h1>" . $row['title'] . "</h1>";
            echo "<p>" . $row['content'] . "</p>";
        } else {
            echo "<p>Article not found</p>";
        }
        ?>
    </div>
</body>
</html>
