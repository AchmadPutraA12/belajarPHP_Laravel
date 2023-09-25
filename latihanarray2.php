<?php
//array scalar
$a1 = ['kode' => '0011','buah' => 'Apel' , 'Harga' => 25000,'Jumlah' =>5];
$a2 = ['kode' => '0012','buah' => 'Mangga' , 'Harga' => 26000,'Jumlah' =>6];
$a3 = ['kode' => '0013','buah' => 'Pisang' , 'Harga' => 27000,'Jumlah' =>7];
$a4 = ['kode' => '0014','buah' => 'Jambu' , 'Harga' => 35000,'Jumlah' =>8];
$a5 = ['kode' => '0015','buah' => 'Durian' , 'Harga' => 45000,'Jumlah' =>8];
$a6 = ['kode' => '0016','buah' => 'Salak' , 'Harga' => 55000,'Jumlah' =>9];
$a7 = ['kode' => '0017','buah' => 'Nanas' , 'Harga' => 65000,'Jumlah' =>10];

//array asossiative
$ar_buah = [$a1,$a2,$a3,$a4,$a5,$a6,$a7];
//deklarasi header table dengan looping
$ar_judul = ['No','Kode','Buah','Harga','Jumlah','Harga Kotor','Diskon','Harga Bayar'];

$jumlah_transaksi = count($ar_buah);
$jumlah_harga = array_column($ar_buah,'Harga');
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$harga_rata_rata = $harga_total / $jumlah_transaksi;
$keterangan = [
    'Harga Total' => $harga_total,
    'Harga Tertinggi' => $harga_tertinggi,
    'Harga Terendah' => $harga_terendah,
    'Rata - Rata Harga' => $harga_rata_rata,
    'Jumlah Buah' => $jumlah_transaksi,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Array looping</title>
</head>
<body>
    <h3 align="center">Daftar Buah - Buahan</h3>
    <table border = "1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php foreach($ar_judul as $judul){
                    ?>
                    <th><?= $judul ?></th>

                    <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php $no =1;
            foreach ($ar_buah as $buah){
                $bruto = $buah ['Harga'] * $buah ['Jumlah'];
                $diskon = ($buah ['buah'] == 'Jambu' && $buah['Jumlah']>=4) ? 0.2 : 0.1;
                $harga_diskon = $diskon * $bruto;
                $harga_bayar = $bruto - $harga_diskon;
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $buah ['kode'] ?></td>
                <td><?= $buah ['buah'] ?></td>
                <td><?= $buah ['Harga'] ?></td>
                <td><?= $buah ['Jumlah'] ?></td>
                <td><?= $bruto ?></td>
                <td><?= $harga_diskon ?></td>
                <td align="center">Rp.<?= number_format($harga_bayar,0,',','.')  ?></td>
            </tr>
            <?php }?>
        </tbody>
        <tfoot>
            <?php 
            foreach($keterangan as $ket => $hasil){
                ?>
                <tr>
                    <th colspan="3"><?= $ket ?></th>
                    <th colspan="5"><?= $hasil ?></th>
                </tr>
            <?php }?>
            
        </tfoot>
    </table>
</body>
</html>