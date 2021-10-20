<html>

<head>
    <title>CAESAR CIPHER</title>
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
            padding-top: 15px;
        }
    </style>
</head>
<div class="container">
    <h1>Form Enkripsi</h1>
    <hr>
    <form action="enkcaesar.php" method="get">
        <label for="basic">Masukkan Plain Text :</label>
        <textarea class="form-control" name="plain" id="textarea-a"></textarea>
        <label for="basic">Key : </label>
        <textarea class="form-control" name="kunci" id="textarea-a"></textarea><br>
        <input type="submit" class="btn btn-success" value=" Encrypt" data-theme="a">
        <input type="reset" class="btn btn-primary" value=" Hapus" data-theme="a">
    </form>
</div>

</html>