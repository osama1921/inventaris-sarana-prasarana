<?php
include ('koneksi.php');
include "session.php";
$datakepala=mysql_fetch_array(mysql_query("SELECT * FROM laporan WHERE jabatan='Kepala Sekolah'"));
$datawaka=mysql_fetch_array(mysql_query("SELECT * FROM laporan WHERE jabatan='Wakasek Sarana Dan Prasarana'"));
date_default_timezone_set('Asia/Jakarta');
$harini=date("d-m-Y");

$content ='
<style type="text/css">
th {
	width:60px;
	text-align: center;
  }
  table,tr,td,th{
	  border: 1px solid black;
	  border-collapse: collapse;
  }p{
    margin-left:560px;
      }
</style>
<page>
<div style="font-size: 25px; text-align: center; text-transform: uppercase; font-weight: 3px; margin-bottom: 20px">Laporan Peminjaman Inventaris  Sekolah</div>
<div style="font-size: 14px; text-align: left; text-transform: uppercase; font-weight: 3px; margin-bottom: 10px">Tanggal : '.$harini.'</div>
<table>
<tr>
    <th style="text-align: center; padding:8px 4px; width:20px;">No</th>
    <th style="text-align: center; padding:8px 4px; ">Nama</th>
    <th style="text-align: center; padding:8px 4px; ">Jumlah</th>
    <th style="text-align: center; padding:8px 4px; ">Tanggal Pinjam</th>
    <th style="text-align: center; padding:0px 4px;">Tanggal Kembali</th>
    <th style="text-align: center; padding:8px 4px; ">Nama Pegawai</th>
    <th style="text-align: center; padding:8px 4px; ">Status</th>
</tr>

';
$no=1;
    $query=mysql_query("SELECT * FROM peminjaman WHERE status_peminjaman='Kembali' OR status_peminjaman='Pinjam'");
    while ($data=mysql_fetch_array($query)) {
      $idpeminjaman=$data['id_peminjaman'];
      $datadetail=mysql_fetch_array(mysql_query("SELECT * FROM detail_pinjam WHERE id_peminjaman='$idpeminjaman'"));
      $idinven=$datadetail['id_inventaris'];
      $datainven=mysql_fetch_array(mysql_query("SELECT * FROM inventaris WHERE id_inventaris='$idinven'"));
      $idpegawai=$data['id_pegawai'];
      $datapegawai=mysql_fetch_array(mysql_query("SELECT * FROM pegawai WHERE id_pegawai='$idpegawai'"));
    $content .='
<tr>
    <td style="height:30px; text-align:center;">'.$no++.'</td>
    <td style="height:30px">'.$datainven['nama'].'</td>
    <td style="height:30px; text-align:center;">'.$datadetail['jumlah'].'</td>
    <td style="height:30px">'.$data['tanggal_pinjam'].'</td>
    <td style="height:30px; ">'.$data['tanggal_kembali'].'</td>
    <td style="height:30px">'.$datapegawai['nama_pegawai'].'</td>
    <td style="height:30px">'.$data['status_peminjaman'].'</td>

    </tr>
    ';
  };
$content .='
</table>
<br>
<br>
<p class="p">Pandeglang, '.date("d-m-Y").'<br>
Wakasek Sarana Dan Prasarana</p>
<br><br><br>
<p style="text-transform:uppercase; font-weight:bold;">'.$datawaka['nama'].'<br>
NIP. '.$datawaka['nip'].'</p>
<p>Mengetahui, <br>
Kepala Sekolah
</p>
<br>
<br>
<br>
<p style="text-transform:uppercase; font-weight:bold;">'.$datakepala['nama'].'<br>
NIP. '.$datakepala['nip'].'</p>
</page>	

';


require_once("../assets/html2pdf/html2pdf.class.php");
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Laporan Peminjaman Inventaris Sekolah.pdf');
?>
