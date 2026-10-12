<?php
$host = "localhost";
$usename = "root";
$password = "";
$database = "clarity_db";

$conn = mysqli_connect($host, $usename, $password, $database);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

$config = [];
$query = mysqli_query($conn, "SELECT * FROM config");
while ($row = mysqli_fetch_assoc($query)) {
    $config[] = [
        "id" => $row["id"],
        "data_key" => $row["data_key"],
        "value" => $row["value"]
    ];
}

$menus = [];
$query = mysqli_query($conn, "SELECT * FROM menus");
while ($row = mysqli_fetch_assoc($query)) {
    $menus[] = [
        "id" => $row["id"],
        "url" => $row["url"],
        "label" => $row["label"]
    ];
}

$products = [];
$query = mysqli_query($conn, "SELECT * FROM products");
while ($row = mysqli_fetch_assoc($query)) {
    $products[] = [
        "id" => $row["id"],
        "name" => $row["name"],
        "description" => $row["description"],
        "price" => $row["price"],
        "image" => $row["image"]
    ];
}

$are = [];
$query = mysqli_query($conn, "SELECT * FROM are");
while ($row = mysqli_fetch_assoc($query)) {
    $are[] = [
        "id" => $row["id"],
        "class" => $row["class"],
        "title" => $row["title"],
        "description" => $row["description"]
    ];
}

$why = [];
$query = mysqli_query($conn, "SELECT * FROM why");
while ($row = mysqli_fetch_assoc($query)) {
    $why[] = [
        "id" => $row["id"],
        "image" => $row["image"],
        "title" => $row["title"],
        "description" => $row["description"]
    ];
}

$testimonial = [];
$query = mysqli_query($conn, "SELECT * FROM testimonial");
while ($row = mysqli_fetch_assoc($query)) {
    $testimonial[] = [
        "id" => $row["id"],
        "name" => $row["name"],
        "location" => $row["location"],
        "description" => $row["description"]
    ];
}
?>