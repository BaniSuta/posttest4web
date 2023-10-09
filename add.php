<?php

if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $bensin = htmlspecialchars($_POST["bensin"]);
    $berat = $_POST["berat"];
    $ban_dpn = htmlspecialchars($_POST["ban_dpn"]);
    $ban_blkg = htmlspecialchars($_POST["ban_blkg"]);
    $jenis = htmlspecialchars($_POST["jenis"]);

    echo "
    <script>
    alert('Berhasil Menambahkan Data Motor dengan nama : $nama, Ukuran Tangki : $bensin L, Berat Motor : $berat Kg, Ukuran Ban Depan $ban_dpn, Ukuran Ban Belakang : $ban_blkg, Dan Jenis Motor : $jenis');
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style/style-input.css">
</head>

<body>
    <?php include "inc/navbar.php" ?>

    <div class="container">
        <table>
            <form action="" method="post">
                <tr>
                    <td>
                        <label for="nama">Masukkan Nama Motor</label>
                    </td>
                    <td colspan="2">
                        <input class="ketik" type="text" name="nama" id="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bensin">Masukkan Kapasitas Tangki Motor</label>
                    </td>
                    <td colspan="2">
                        <input class="ketik" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 46" name="bensin" id="bensin" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="berat">Masukkan Berat Motor</label>
                    </td>
                    <td colspan="2">
                        <input class="ketik" type="number" name="berat" id="berat" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ban_dpn">Masukkan Ukuran Ban Depan Motor</label>
                    </td>
                    <td colspan="2">
                        <input class="ketik" type="text" name="ban_dpn" id="ban_dpn" placeholder="Contoh : 80/70" onkeypress="return validasiInput (event)" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ban_blkg">Masukkan Ukuran Ban Belakang Motor</label>
                    </td>
                    <td colspan="2">
                        <input class="ketik" type="text" name="ban_blkg" id="ban_blkg" placeholder="Contoh : 80/70" onkeypress="return validasiInput (event)" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Jenis">Jenis Motor</label>
                    </td>
                    <td>
                        <div class="rad">
                            <input class="rd" type="radio" name="jenis" value="Matic" id="matic" required>
                            <label for="matic">Matic</label>
                        </div>
                    </td>
                    <td>
                        <div class="rad">
                            <input class="rd" type="radio" name="jenis" value="Moge" id="moge" required>
                            <label for="moge">Moge</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="akhir" align="right" colspan="4">
                        <div class="for-btn">
                            <button type="submit" name="submit">Submit</button>
                        </div>
                    </td>
                </tr>
            </form>
        </table>
    </div>

    <?php include "inc/toggleButton.php" ?>

    <?php include "inc/footer.php" ?>
    <script src="js/script-add.js"></script>
    <script src="js/script-index.js"></script>
</body>

</html>
