<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>21101033_I KETUT KARMITA_TUGAS_1</title>
</head>
<style>
    body {
        background: gray;
    }
</style>

<body>
    <h1 class="text " style="margin-left: 20px; color: white;">Konversi Suhu</h1>

    <p class="text " style="margin-left: 20px; color: white;">Konversi :</p>

    <form method="POST" action="">
        <div class="form-check1 form-check-inline " style="margin-left: 20px;">
            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadioOptions1" value="option1">
            <label class="form-check-label " style="color: white;" for="inlineRadio1">Celcius ke Fahrenheit</label>
        </div>
        <div class="form-check2 form-check-inline " style="margin-left: 20px;">
            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="option2">
            <label class="form-check-label " style="color: white;" for="inlineRadio2">Fahrenheit ke Celcius</label>
        </div>
        <div class="mt-3" style="margin-left: 20px; width: 30%">
            <label for="exampleInputText" class="form-label" style="color: white;">Silahkan di Masukan :</label>
            <input type="number" name="enterr" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter...">

        </div>

        </div>
        <button type="submit" name="submitt" value="submit" class="btn btn-success mt-3" style="margin-left: 20px;">Submit</button>
        <button type="submit" name="reset" class="btn btn-primary mt-3" style="margin-left: 20px;">Reset</button>


    </form>

    <br>

    <?php

    if (isset($_POST['inlineRadioOptions1'])) {

        $suhu = $_POST["enterr"];

        $hsl = ($suhu * 9 / 5) + 32;


        echo '<p style="margin-left: 20px; color: white;">Hasil Konversi : </p>';
        echo '<p style="margin-left: 20px; color: white;">°F = (°C x 9/5) + 32 </p>';
        echo '<p style="margin-left: 20px; color: white;">°F = (' . $suhu . ' °C x 9/5) + 32</p>';
        echo '<p style="margin-left: 20px; color: white;">°F = ' . $hsl . '°</p>';
    }

    if (isset($_POST['inlineRadioOptions2'])) {

        $suhu = $_POST["enterr"];

        $hsl = ($suhu - 32) * 5 / 9;


        echo '<p style="margin-left: 20px; color: white;">Hasil Konvensi: </p>';
        echo '<p style="margin-left: 20px; color: white;">°C = (°F - 32) x 5/9 </p>';
        echo '<p style="margin-left: 20px; color: white;">°C = (' . $suhu . ' °F - 32) x 5/9</p>';
        echo '<p style="margin-left: 20px; color: white;">°C = ' . $hsl . '°</p>';
    }

    if (isset($_POST["reset"])) {

        return ('wp_project1_tugas.php');
    }

    ?>

    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>