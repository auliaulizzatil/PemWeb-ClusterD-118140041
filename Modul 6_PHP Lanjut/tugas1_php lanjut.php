<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Modul 6 - Praktikum Pemrograman Web - 118140041</title>

</head>
<body>
    <div class="ml-4 mt-2 mb-4 mr-4">
        <h2>Menghitung Faktorial</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="value">Masukkan bilangan :</label>
                <input name="value" id="value" type="number" class="form-control" required>
            </div>
            <input type="submit" name="submit" value="Hitung" class="btn btn-primary mb-2"/>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $value = $_POST['value'];
                function factorial($value){
                    if($value==0){
                        return 1;
                    }else{
                        return $value*factorial($value-1);
                    }
                }
            
                echo "Faktorial dari ". $value . "! = " . factorial($value);
            }
        ?>
    </div>
</body>
</html>