<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu Admin</title>
    <link rel="stylesheet" href="tampilanadmin.css"?v=<?php echo time(); ?>">
</head>

<body class="member">
    <header1>
        <section class="navigation">
            <div id="container">
                <div id="box-navigation">
                    <div class="box">
                        <h4>NAF STORE</h4>
                    </div>
                    <div id="boxes">
                        <ul>
                            <h4>MENU ADMIN</h4>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </header1>

    <b id = "titleform">INPUT PRODUK</b>
    <div class = "containerform">
        <form action = " " method = "GET" name = "form1">
            <table id = "formtable">
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td><input type = "text" name = "nama" size = "25"></td>
                </tr>

                <tr>
                    <td>Jenis Produk</td>
                    <td>:</td>
                    <td><input type = "text" name = "jenis" size = "25"></td>
                </tr>

                <tr>
                    <td>Ukuran Produk</td>
                    <td>:</td>
                    <td>
                        <select name="size">
                            <option value = "Small">S</option>
                            <option value = "Medium">M</option>
                            <option value = "Large">L</option>
                            <option value = "X-Large">XL</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Kelayakan Produk</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name = "layak" value = "Good Quality" checked = "">Good</input>
                        <input type="radio" name = "layak" value = "Mid Quality" checked = "">Mid</input>
                        <input type="radio" name = "layak" value = "Bad Quality" checked = "">Bad</input>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Pakaian</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name = "jenis_kelamin" value = "Laki-Laki" checked = "">Laki-Laki</input>
                        <input type="radio" name = "jenis_kelamin" value = "Perempuan" checked = "">Perempuan</input>
                    </td>
                </tr>

                <tr>
                    <script>
                        alert("Welcome to Admin Menu")
                    </script>
                    <td colspan = 3 class="butonsub"><input type="submit" name="sub" values="simpan" style="height:1cm; width:4cm; margin: 0; background-color:white; padding-left 10px;"></td>
                </tr>
                </table>
            </form>
        </div>

        <b id = "titleform">HASIL INPUT PRODUK</b>
        <div class = "containerform">
            <table id = "formtable">
                <tr>
                    <td>Nama Produk</td>
                    <td>:</td>
                    <td>
                    <?php
                        $produk = isset($_GET['nama']) ? $_GET['nama'] : "";
                        echo $produk;
                            ?>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Produk</td>
                    <td>:</td>
                    <td>
                    <?php
                        $jenis= isset($_GET['jenis']) ? $_GET['jenis'] : "";
                        echo $jenis;
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Ukuran Produk</td>
                    <td>:</td>
                    <td>
                    <?php
                        $ukuran= isset($_GET['size']) ? $_GET['size'] : "";
                        echo $ukuran;
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>Kelayakan Produk</td>
                    <td>:</td>
                    <td>
                        <?php
                        $layak= isset($_GET['layak']) ? $_GET['layak'] : "";
                        echo $layak;
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>Jenis Pakaian</td>
                    <td>:</td>
                    <td>
                    <?php
                        $pw = isset($_GET['jenis_kelamin']) ? $_GET['jenis_kelamin'] : "";
                        echo $pw;
                        ?>
                    </td>
                </tr>
</body>
