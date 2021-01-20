<html>

<body>
    <?php
    $conn = new mysqli($servername, $username, $password, $db);
    $title = $_POST['title'];
    $sql = "select * from books where title=$title";
    $result = $conn->query($sql);
    if (!$result) {
        echo "There is no record";
    }
    echo "<table border='1'><tr><th>Title</th><th>Author</th>th>Publisher</th></tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['author'] . "</td>";
        echo "<td>" . $row['publisher'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>