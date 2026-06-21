<?php
if (!function_exists('save_signature')) {
  function save_signature($data)
  {
    $folderPath = public_path('storage/signature/');
    $image_parts = explode(';base64', $data);
    $image_type_aux = explode('image/', $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . uniqid() . '.' . $image_type;
    file_put_contents($file, $image_base64);

    return $file;
  }
}
