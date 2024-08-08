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
        // Generar PDF
        require('C:\xampp\htdocs\pdf\fpdf\fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Reporte generado');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'Country: ' . $country);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'date: ' . $date);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'type_media: ' . $type_media);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'original_headers: ' . $original_headers);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'english_headers: ' . $english_headers);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'author: ' . $author);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'url: ' . $url);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'url_testigo: ' . $url_testigo);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'tier: ' . $tier);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'notes: ' . $notes);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'ad_value_pesos: ' . $ad_value_pesos);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'ad_value_dolares: ' . $ad_value_dolares);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'reach: ' . $reach);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, 'topic: ' . $topic);
        $pdf->Ln(10);
        // Agrega más celdas para cada campo
        
        $pdfFileName = 'pdf_reports/reporte_' . time() . '.pdf'; // Guarda el PDF con un nombre único
        $pdf->Output('F', $pdfFileName); // Guarda el PDF en el servidor

        echo "Informe agregado exitosamente. <a href='$pdfFileName'>Descargar PDF</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
