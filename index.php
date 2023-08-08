<head>
        <title>php percabangan</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <style>
            
        </style>
        <button><a href="../index.html">Kembali</a></button>
        <center>
        <h2>masukkan nilai anda dibawah ini </h2>
        <form action="" method="POST">
            <input type="text" name="nilai" placeholder="isi nilai anda ">
            <input type="submit" name="cek">
        </form>
        <br>

        

<?php
if(isset($_POST['cek'])){
    $nilai = $_POST['nilai'];
    if($nilai<=31){
    echo "kurang sekali";
    } 
    else if($nilai<=60){
    echo "Kurang ";
    }
    else if($nilai<=75){
    echo "cukup ";
    }

    else if($nilai<=81){
    echo "baguus ";
    }
    else if($nilai<=100){
    echo "Sangat bagus ";
    }
    else{
        echo "error";
    }
}     
?>
    
</center>
    </body>