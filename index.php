<?php

$data = [
  [
    'no' => 1,
    'namapasien' => 'pasien1',
    'namadokter' => 'Dr. Azfa',
    'kelompok' => 'BPJS',
  ],

  [
    'no' => 2,
    'namapasien' => 'pasien2',
    'namadokter' => 'Dr. Azfa',
    'kelompok' => 'BPJS',
  ],

  [
    'no' => 3,
    'namapasien' => 'pasien3',
    'namadokter' => 'Dr. Azfa',
    'kelompok' => 'BPJS',
  ],

  [
    'no' => 4,
    'namapasien' => 'pasien4',
    'namadokter' => 'Dr. Azfa',
    'kelompok' => 'UMUM',
  ],

  [
    'no' => 5,
    'namapasien' => 'pasien5',
    'namadokter' => 'Dr. Azfa',
    'kelompok' => 'UMUM',
  ],
];

$bpjs = [];
$umum = [];

foreach ($data as $item) {
  if ($item['kelompok'] == 'BPJS') {
    $bpjs[] = $item['kelompok'];
  } else {
    $umum[] = $item['kelompok'];
  }
}

$result = [
  [
    'namadokter' => 'Dr. Azfa',
    'kelompok' => 'BPJS',
    'jumlah' => count($bpjs),
  ],

  [
    'namadokter' => 'Dr. Azfa',
    'kelompok' => 'UMUM',
    'jumlah' => count($umum),
  ],
];

// echo print_r($result);
// echo print_r($bpjs);
// echo print_r($umum);

echo json_encode($result);

/* [
    'nama_dokter' => 'Dr. M. Azfa Asykarulloh, Eng.',
    'kelompok' => 'BPJS',
    'Total' => 5, 
  ],

  [
    'nama_dokter' => 'Dr. M. Azfa Asykarulloh, Eng.',
    'kelompok' => 'UMUM',
    'Total' => 10, 
  ], */