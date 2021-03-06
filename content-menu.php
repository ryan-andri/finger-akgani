<?php

if ($_GET) {
  $hal = $_GET['pages'];
  switch ($hal) {
    case '':
      include 'beranda.php';
      break;
    case 'beranda':
      include 'beranda.php';
      break;
    case 'dataPersonal':
      include 'view/data-personal/v_dataPersonal.php';
      break;

    case 'act-simpan':
      include 'view/data-personal/act_simpan.php';
      break;
    case 'act-hapus';
      include 'view/data-personal/act-hapus.php';
      break;
    case 'act-update';
      include 'view/data-personal/act-update.php';
      break;

      // Fingerprint
    case 'finger';
      include 'view/finger/v_fingerUpload.php';
      break;
    case 'finger-hapus';
      include 'view/finger/v_fingerHapus.php';
      break;
    case 'tampil-finger';
      include 'view/finger/v_fingerTampil.php';
      break;

      // Action mesin Finger
    case 'act-upload-finger';
      include 'view/finger/act-upload.php';
      break;
    case 'act-hapus-finger';
      include 'view/finger/act-hapus.php';
      break;

      // log daftar hadir
    case 'logAbsensi';
      include 'view/absensi/v_absensi.php';
      break;

    default:
      include 'error.php';
      break;
  }
} else {
  include 'beranda.php';
}
