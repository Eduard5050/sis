<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include '/xampp/htdocs/Sistema de manejo de reputación/login/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST['country'];
    $date = $_POST['date'];
    $type_media = $_POST['type_media'];
    $original_headers = $_POST['original_headers'];
    $english_headers = $_POST['english_headers'];
    $author = $_POST['author'];
    $url = $_POST['url'];
    $url_testigo = $_POST['url_testigo'];
    $tier = $_POST['tier'];
    $pdf = $_POST['pdf'];
    $notes = $_POST['notes'];
    $ad_value_pesos = $_POST['ad_value_pesos'];
    $ad_value_dolares = $_POST['ad_value_dolares'];
    $reach = $_POST['reach'];
    $topic = $_POST['topic'];

    $sql = "INSERT INTO reports (country, date, type_media, original_headers, english_headers, author, url, url_testigo, tier, pdf, notes, ad_value_pesos, ad_value_dolares, reach, topic)
            VALUES ('$country', '$date', '$type_media', '$original_headers', '$english_headers', '$author', '$url', '$url_testigo', '$tier', '$pdf', '$notes', '$ad_value_pesos', '$ad_value_dolares', '$reach', '$topic')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirigir a la generación de PDF
        header("Location: generate_pdf.php?id=" . $conn->insert_id);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
