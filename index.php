<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>PHP List</title>
</head>

<body>
    <div class="center">
        <form action="#" method="get" class="form-card">
            <div class="sec-input">
                <span class=" ">Masukan String</span><br>
                <input type="text" name="string" id="string" placeholder="Type your text here"><br>
            </div>
            <div class="sec-input">
                <span class=" ">Masukan Perulangan</span><br>
                <input type="number" name="loop" id="loop" placeholder="Type which loop you needed"><br>
            </div><br>
            <button class=" " type="submit">Tampilkan</button>
        </form>
        <br>

        <?php
        $teks = $_GET['string'];
        $loop = $_GET['loop'];
        $hasil;
        for ($i=0; $i < $loop ; $i++) { 
            $j = $i +1;
            $hasil[$i] = $teks .' '. $j;
        };
        // echo $hasil[0];
        // var_dump($hasil);

        for ($i=0; $i < $loop; $i++) { 
            echo '<div class="result-card">
            <span>'.$hasil[$i].'</span>
            </div>
            <br>';
            // echo $hasil[$i];
        };


        if ($loop==null) {
            echo '';
        }
        else if ($loop%2==0) {
            echo '<p class="result-center">'.$loop.' adalah bilangan genap</p>';
        } else {
            echo '<p class="result-center">'.$loop.' adalah bilangan ganjil</p>';
        }
        
        ?>
        
    </div>



    <script src="js/bootstrap.js"></script>
</body>

</html>