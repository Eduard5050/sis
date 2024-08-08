<?php
require('PDF.php');
include '/xampp/htdocs/Sistema de manejo de reputación/login/db.php';

$id = $_GET['id'];
$sql = "SELECT country, date, type_media, original_headers, english_headers, author, url, url_testigo, tier, pdf, notes, ad_value_pesos, ad_value_dolares, reach, topic FROM reports WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, 'Informe de Datos');
    $pdf->Ln(20);
    
    foreach ($data as $key => $value) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, ucfirst($key) . ': ' . $value, 0, 1);
    }
    
    $pdf->Output('D', 'reporte.pdf'); // 'D' para descargar el archivo
} else {
    echo "No se encontró el informe.";
}
$conn->close();
?>
