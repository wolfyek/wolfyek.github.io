<?php
// Collect form data
$ime_priimek = $_POST['ime_priimek'] ?? '';
$rojstni_datum = $_POST['rojstni_datum'] ?? '';
$spol = $_POST['spol'] ?? '';
$zdravstvene_posebnosti = $_POST['zdravstvene_posebnosti'] ?? '';
$telefonska_stevilka = $_POST['telefonska_stevilka'] ?? '';
$e_naslov = $_POST['e_naslov'] ?? '';
$naslov = $_POST['naslov'] ?? '';
$nogometni_klub = $_POST['nogometni_klub'] ?? '';
$treningi = $_POST['treningi'] ?? '';
$plavalec = $_POST['plavalec'] ?? '';

// Prepare data string
$data = "Ime in Priimek: $ime_priimek\n"
       . "Rojstni Datum: $rojstni_datum\n"
       . "Spol: $spol\n"
       . "Zdravstvene posebnosti: $zdravstvene_posebnosti\n"
       . "Telefonska številka: $telefonska_stevilka\n"
       . "E-naslov: $e_naslov\n"
       . "Naslov: $naslov\n"
       . "Nogometni klub: $nogometni_klub\n"
       . "Kolikokrat tedensko potekajo treningi: $treningi\n"
       . "Plavalec: $plavalec\n\n"; // Add an extra newline character

// Define file path
$file_path = 'form_data.txt';

// Write data to file
if (file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX) !== false) {
    echo 'Form data has been saved successfully.';
} else {
    echo 'Failed to save form data.';
}
?>
