<?php 
    $db = mysqli_connect("localhost","root","","2106007_Dendi");
    if (!$db) {
        echo "<script>
                alert('database tidak terhubung')
            </script>";
    };
    $Nama = $_POST['Nama'];
    $JK = $_POST['JK'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $No = $_POST['No'];



    $query = "INSERT INTO email VALUES(NULL,'$Nama','$JK','$tanggalLahir','$Username','$Password','$No')";
    mysqli_query($db,$query);
    echo "<script>alert('data berhasil ditambahkan')</script>";
    echo "<script>window.location='./index.php'</script>"
?>