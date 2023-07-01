<?php
// Mendapatkan data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Lakukan proses atau simpan data ke dalam database
// Di sini Anda dapat menambahkan logika sesuai kebutuhan Anda

// Kirim respons ke klien dalam format JSON
$response = [
    'status' => 'success',
    'message' => 'Pertanyaan Anda telah terkirim!'
];

header('Content-Type: application/json');
echo json_encode($response);
?>