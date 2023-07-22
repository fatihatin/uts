<?php
require_once 'konek.php';

require_once 'header.php';
?>
<div class="container">
    <?php
    if(isset($_POST['addnew'])) {
        if(empty($_POST['nama_obat']) || empty($_POST['harga']) || empty($_POST['kategori']))
        echo "please fillout all required flieds";
    } else {
        $nama_obat =$_POST['nama_obat'];
        $harga     =$_POST['harga'];
        $kategori  =$_POST['kategori'];
        $sql = "INSERT INTO obat(nama_obat,harga,kategori)
        VALUES('$nama_obat','$harga', '$kategori')";

        if($con->query($sql) === TRUE){
            echo "<div class=alert alert-success'>Successfully added new user</div>";
        } else {
            echo "<div class=alert alert-danger'>error: There was an error while adding new user</div>";
        }
    }
    ?>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box">
                <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3>
                <from action="" method="POST">
                    <label for="nama_obat">Nama Obat</label>
                    <input type="text" id="nama_obat" class="form-control" name="nama"><br>
                    <label for="harga">Harga</label>
                    <input type="text" id="harga" class="form-control" name="harga"><br>
                    <label for="harga">Kategori</label>
                    <input type="text" id="Kategori" class="form-control" name="kategori"><br>
                    <br>
                    <input type="submit" name="addnew" class="btn btn-success" value="Add New">
                </from>
            </div>
        </div>
    </div>
</div>

<?php

require_once 'footer.php';
?>