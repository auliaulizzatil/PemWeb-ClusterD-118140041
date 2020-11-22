<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Modul 6 - Praktikum Pemrograman Web - 118140041</title>

</head>
<body>
    <div class="ml-4 mt-2 mb-4 mr-4">
        <h2>Menghitung Harga Bet</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Nama :</label>
                <input name="name" id="name" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="color">Warna :</label>
                <input name="color" id="color" type="text" class="form-control">
            </div>
            <input type="submit" name="submit" value="Hitung" class="btn btn-primary mb-2"/>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $color = ($_POST['color']=="") ? "red" : $_POST['color'];
                function countbet($name, $color){
                    $namelength = strlen($name);
                    if($namelength>=1&&$namelength<=10){
                        $price = 300*$namelength;
                    }else if($namelength>=11&&$namelength<=20){
                        $price = 500*$namelength;
                    }else{
                        $price = 700*$namelength;
                    }
                    echo "<p style=color:" . $color . ";>" . $name . "</p>";
                    $price = number_format($price,2,',','.');
                    echo "<p>Harga Total = Rp. " . $price . "</p>";
                    return $color;
                }
                countbet($name, $color);
            }
        ?>
    </div>
</body>
</html>