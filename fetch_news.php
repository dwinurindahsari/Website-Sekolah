<?php
include 'db.php';

$sql = "SELECT * FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);

$news = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
}

echo json_encode($news);
?>
