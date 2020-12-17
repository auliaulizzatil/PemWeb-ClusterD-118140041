<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PemWeb - Modul 6 - 118140041 - Aulia Ul Izzatil Adilah</title>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <h2>Input Data</h2>
    <form method="post" id="form_mahasiswa">
        <table>
            <tr>
                <td><label>NIM</label></td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nama"><br></td>
            </tr>
            <tr>
                <td><label>Prodi</label></td>
                <td><select name="prodi">
                        <option value="IF">Teknik Informatika</option>
                        <option value="EL">Teknik Elektro</option>
                        <option value="FI">Fisika</option>
                        <option value="AR">Arsitektur</option>  
                        <option value="PWK">Perencanaan Wilayah dan Kota</option>  
                    </select></td>
            </tr>
            <tr>
                <td><label>Angkatan</label></td>
                <td>
                    <select name="angkatan">
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>
                </td>
            </tr>
        </table>
    </form>
    <button id="btn_tampil">Tambah Data</button>
    <br><br>
    <h2>Data Mahasiswa</h2>
    <div id="tampil_data"></div>
    <script>
        $(document).ready(function() {
            $('#tampil_data').load("tampil.php");
            $('#btn_tampil').click(function() {
                var data = $('#form_mahasiswa').serialize();
                $.ajax({
                    type: 'POST',
                    url: "tambah.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        $('#tampil_data').load("tampil.php");
                    }
                });
            });
        });
    </script>
</body>
</html>