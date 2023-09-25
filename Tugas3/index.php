<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="profile">
            <img src="images/menu.png" class="menu">
            <img src="images/setting.png" class="setting">
            <img src="images/achmad.jpg" class="gambar-profil">
            <h3>Tugas Ke 3 PHP</h3>
            <p>Achmad Putra Arifky</p>
            <br>
            <?php
            $m1 = ['nim' => '0111111', 'nama' => 'Andi Setyo', 'nilai' => 95];
            $m2 = ['nim' => '0111112', 'nama' => 'Rafael', 'nilai' => 80];
            $m3 = ['nim' => '0111113', 'nama' => 'Ali Hakim', 'nilai' => 78];
            $m4 = ['nim' => '0111114', 'nama' => 'Ari', 'nilai' => 76];
            $m5 = ['nim' => '0111115', 'nama' => 'Ani', 'nilai' => 86];
            $m6 = ['nim' => '0111116', 'nama' => 'Aji', 'nilai' => 50];
            $m7 = ['nim' => '0111117', 'nama' => 'Budi Santoso', 'nilai' => 20];
            $m8 = ['nim' => '0111118', 'nama' => 'Chandra', 'nilai' => 30];
            $m9 = ['nim' => '0111119', 'nama' => 'Dewi', 'nilai' => 70];
            $m10 = ['nim' => '0111110', 'nama' => 'Elisa', 'nilai' => 65];

            $ar_judul = ['No','NIM','Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
            $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

            $jumlah_mahasiswa = count($mahasiswa);
            $jumlah_nilai = array_column($mahasiswa,'nilai');
            $total_nilai = array_sum($jumlah_nilai);
            $nilai_terendah = min($jumlah_nilai);
            $nilai_tertinggi = max($jumlah_nilai);
            $nilai_rata_rata = $total_nilai / $jumlah_mahasiswa;
            $keterangan_nilai = [
                'Nilai Terendah' => $nilai_terendah,
                'Nilai Tertinggi' => $nilai_tertinggi,
                'Nilai Rata - Rata' => $nilai_rata_rata,
                'Jumlah Mahasiswa' => $jumlah_mahasiswa,
                'Nilai Gabungan' => $total_nilai
            ];
            ?>
            <div>
                <h3>Daftar Nilai Mahasiswa</h3>
                <br>
                <table>
                    <thead>
                        <tr>
                            <?php
                            foreach($ar_judul as $judul){
                            ?>
                            <th><?= $judul ?></th>
                            <?php }?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;
                        foreach($mahasiswa as $mahasis){
                            $keterangan = ($mahasis['nilai'] >= 60) ? 'Lulus' : 'Tidak';
                            $nilai = $mahasis['nilai'];
                            if($nilai >= 85 && $nilai <= 100) $grade = "A";
                            else if($nilai >= 75 && $nilai <= 84) $grade = "B";
                            else if($nilai >= 60 && $nilai <= 74) $grade = "C";
                            else if($nilai >= 30 && $nilai <= 59) $grade = "D";
                            else if($nilai >= 0 && $nilai <= 29) $grade = "E";
                            else $grade = "";

                            switch($grade){
                                case "A" : $predikat = "Memuaskan"; break;
                                case "B" : $predikat = "Bagus"; break;
                                case "C" : $predikat = "Cukup"; break;
                                case "D" : $predikat = "Kurang"; break;
                                case "E" : $predikat = "Buruk"; break;
                                default : $predikat = "";
                            }
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $mahasis ['nim']?></td>
                            <td><?= $mahasis ['nama']?></td>
                            <td><?= $mahasis ['nilai']?></td>
                            <td><?= $keterangan?></td>
                            <td><?= $grade?></td>
                            <td><?= $predikat?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <?php 
                        foreach($keterangan_nilai as $index => $arr_nilai){
                        ?>
                        <tr>
                            <th colspan="3"><?= $index ?></th>
                            <th colspan="4"><?= $arr_nilai ?></th>
                        </tr>
                        <?php }?>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>    
</body>

</html>