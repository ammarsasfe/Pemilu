<?php
echo 'DEMA: ';
$dema = trim(fgets(STDIN));
echo 'BEM: ';
$bem = trim(fgets(STDIN));

if(empty($dema)) { 
    echo 'Isi dema!\n'; 
} else if(empty($bem)) { 
    echo 'Isi bem!\n'; 
} else {

// set post fields
$post = [
    'dema' => 5,
    'bem'   => 1,
];

$ch = curl_init('https://www.pemilufhuns.id/home/simpan');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
echo 'Hasil:\n';
echo $response;
}
?>
