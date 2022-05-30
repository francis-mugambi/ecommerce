<?php


include "config.php";
include "fpdf/fpdf.php";

$pdf = new FPDF();
$pdf->AddPage();

//pick data from db
$sql = " SELECT `ID`, `firstName`, `secondName`, `emailAddress`, `phoneNumber` FROM `customer`";
$results = mysqli_query($link, $sql);

if ($results) {
    $data = mysqli_num_rows($results);

    if ($data > 0) {
        while ($row = mysqli_fetch_array($results)) {
            foreach ($results as $row) {
                $pdf->SetFont("Arial", "", "12");
                $pdf->Ln();
                foreach ($row as $column) ;
                $pdf->Cell("40", "12", $column, 4);
            }
        }
        $pdf->Output();
    } else {
        echo "No Data in the database";
    }


} else {
    echo "Error excuting Querry $sql";
}