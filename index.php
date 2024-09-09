<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Article List</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center;">Jeizz</h1>
        <p style="text-align:center;">tambah wawasan dengan membaca</p>
        
        <div class="category-list">
            
            <!-- Form Pencarian -->
        <form method="GET" action="index.php" style="text-align:center;">
            <input type="text" name="search" placeholder="Search articles...">
            <button type="submit">Search</button>
            <h3>Categories</h3>
            <ul>
                <?php
                $sql = "SELECT * FROM categories";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()) {
                    echo "<li><a href='index.php?category=" . $row['id'] . "'>" . $row['name'] . "</a></li>";
                }
                ?>
            </ul>
        </div>
        <div class="article-list">
        
            <?php
            $category_id = isset($_GET['category']) ? $_GET['category'] : null;
            $sql = "SELECT * FROM articles";
            if ($category_id) {
                $sql .= " WHERE category_id = " . $category_id;
            }
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo "<div class='article'>
                    <h2><a href='article.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></h2>
                    
                    <p>" . substr($row['content'], 0, 100) . "...</p>
                </div>";
            }
            ?>
            
        </div>

    </div>
</body>
</html>
