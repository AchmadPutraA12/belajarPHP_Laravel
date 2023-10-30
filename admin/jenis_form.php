<?php
error_reporting(0);
$objJenis = new Jenis_produk();
$rs = $objJenis->dataJenis();
$idedit = $_REQUEST['idedit'];
$objJenis = new Jenis_produk();
if (!empty($idedit)) {
    $row = $objJenis->getJenis($idedit);
} else {
    $row = array();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form action="jenis_controller.php" method="POST">
        <?php
        if (empty($idedit)) {
        ?>
            <h2 align="center">Isi Nama Jenis Produk</h2>
        <?php } else { ?>
            <h2 align="center">Ubah Nama Jenis Produk</h2>
        <?php } ?>
        <div class="form-group row">
            <label for="text" class="col-2 col-form-label">Nama</label>
            <div class="col-10">
                <input type="text" name="nama" id="text" class="form-control" placeholder="Isi nama jenis produk" value="<?= $row['nama'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <?php
                if (empty($idedit)) {
                ?>
                    <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
                <?php } else { ?>
                    <button type="submit" name="proses" value="ubah" class="btn btn-warning">ubah</button>
                <?php } ?>
                <input type="hidden" name="idx" value="<?= $idedit ?>">
            </div>
        </div>
    </form>
</body>

</html>