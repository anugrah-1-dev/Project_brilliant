<?php
$url = "https://ip.brilliantnetwork.tech/api/blacklist/raw";
$data = file_get_contents($url);

if ($data !== false) {
    // Kita arahkan ke file yang ada di sebelah si PHP ini saja dulu biar gampang dicarinya
    $path = __DIR__ . "/blocked_ips.txt"; 
    file_put_contents($path, $data);
    
    echo "BERHASIL!<br>";
    echo "Lokasi File: " . $path . "<br>";
    echo "Ukuran Data: " . strlen($data) . " bytes<br>";
    echo "Isi Data: <pre>" . htmlspecialchars($data) . "</pre>";
} else {
    echo "GAGAL mengambil data.";
}
?>
