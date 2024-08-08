<?php
require('fpdf/fpdf.php');
include '/xampp/htdocs/Sistema de manejo de reputación/login/db.php';

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Informe', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page '.$this->PageNo(), 0, 0, 'C');
    }

    function ReportTable($header, $data) {
        $this->SetFont('Arial', 'B', 12);
        foreach($header as $col) {
            $this->Cell(40, 7, $col, 1);
        }
        $this->Ln();

        $this->SetFont('Arial', '', 12);
        foreach($data as $row) {
            foreach($row as $col) {
                $this->Cell(40, 6, $col, 1);
            }
            $this->Ln();
        }
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Informe de Datos');

$header = array('Country', 'Date', 'Type Media', 'Original Headers', 'English Headers', 'Author', 'URL', 'URL Testigo', 'Tier', 'PDF', 'Notes', 'Ad Value Pesos', 'Ad Value Dólares', 'Reach', 'Topic');
$data = [];

$sql = "SELECT country, date, type_media, original_headers, english_headers, author, url, url_testigo, tier, pdf, notes, ad_value_pesos, ad_value_dolares, reach, topic FROM reports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = array_values($row);
    }
} else {
    echo "0 results";
}
$conn->close();

$pdf->SetFont('Arial', '', 12);
$pdf->AddPage();
$pdf->ReportTable($header, $data);
$pdf->Output();
?>
