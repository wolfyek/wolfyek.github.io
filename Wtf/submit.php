<?php
require 'vendor/autoload.php';

// Collect form data
$ime_priimek = $_POST['ime_priimek'];
$rojstni_datum = $_POST['rojstni_datum'];
$spol = $_POST['spol'];
$zdravstvene_posebnosti = $_POST['zdravstvene_posebnosti'];
$telefonska_stevilka = $_POST['telefonska_stevilka'];
$e_naslov = $_POST['e_naslov'];
$naslov = $_POST['naslov'];
$nogometni_klub = $_POST['nogometni_klub'];
$treningi = $_POST['treningi'];
$plavalec = $_POST['plavalec'];

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Your Name")
                             ->setLastModifiedBy("Your Name")
                             ->setTitle("Prijava na športno dejavnost")
                             ->setSubject("Prijava")
                             ->setDescription("Form data")
                             ->setKeywords("prijava form data")
                             ->setCategory("Form data");

// Add data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Ime in Priimek')
            ->setCellValue('B1', 'Rojstni Datum')
            ->setCellValue('C1', 'Spol')
            ->setCellValue('D1', 'Zdravstvene posebnosti')
            ->setCellValue('E1', 'Telefonska številka')
            ->setCellValue('F1', 'E-naslov')
            ->setCellValue('G1', 'Naslov')
            ->setCellValue('H1', 'Nogometni klub')
            ->setCellValue('I1', 'Kolikokrat tedensko potekajo treningi')
            ->setCellValue('J1', 'Plavalec');

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A2', $ime_priimek)
            ->setCellValue('B2', $rojstni_datum)
            ->setCellValue('C2', $spol)
            ->setCellValue('D2', $zdravstvene_posebnosti)
            ->setCellValue('E2', $telefonska_stevilka)
            ->setCellValue('F2', $e_naslov)
            ->setCellValue('G2', $naslov)
            ->setCellValue('H2', $nogometni_klub)
            ->setCellValue('I2', $treningi)
            ->setCellValue('J2', $plavalec);

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Prijava');

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="prijava.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');

exit;
?>