<!DOCTYPE html>
<html>

<head>
    <title>DEKRIPSI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.m
in.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0ho
P+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style type="text/css">
        body {
            background-image : url("bg.jpg");
            background-size: auto;
            align-items: center;
            justify-content: center;
            display: grid;
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <?php
    include "lib.php";
    $hasil_ciper = str_replace(" ", "", $_POST['ciper']);
    $kunci = str_replace(" ", "", $_POST['kunci']);
    $panjang_kunci = strlen($kunci);
    $panjang_ciper = strlen($hasil_ciper);
    $index_x = 0;
    $index_y = 0;
    $hasil_konversi = array();
    $hasil_akhir = "";
    while ($index_x < $panjang_ciper) {
        $x = substr($hasil_ciper, $index_x, 1);
        $y = substr($kunci, $index_y, 1);
        $konversi_x = huruf_ke_angka($x);
        $konversi_y = huruf_ke_angka($y);
        if ($konversi_x >= $konversi_y) {
            $hasil = $konversi_x - $konversi_y;
        } else {
            $hasil = $konversi_x + (26 - $konversi_y);
        }
        $hasil_konversi[$index_x] = angka_ke_huruf($hasil);
        $index_x++;
        $index_y++;
        if ($index_y == $panjang_kunci) {
            $index_y = 0;
        }
    }
    $i = 0;
    $hasil_akhir = "";
    while ($i < $index_x) {
        $hasil_akhir .= $hasil_konversi[$i];
        $i++;
    }
    ?>
    <div class="container">
        <h1>Hasil - Dekripsi</h1>
        <hr>
        <form action="enkripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Plainteks :</label>
            <textarea class="form-control" name="plain" id="textarea-a"><?php echo $hasil_akhir; ?></textarea>
            <label for="basic">Masukkan Kunci :</label>
            <textarea class="form-control" name="kunci" id="textarea-a"><?php echo $kunci; ?></textarea><br>
            <input type="submit" class="btn btn-success" value=" 
Encrypt" data-theme="a">
<a class="btn btn-primary" href="dashboard.php" role="button">Back to dashboard</a>
        </form>
    </div>
</body>

</html>