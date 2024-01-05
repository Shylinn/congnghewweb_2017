<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.reset').click(function(){
            $('input[type='text']').val("");

        });

    })

</script>
<body>
    <form action="#" method='get'>
        <label for="matruong">
            Mã trường
            <input type="text" id='matruong' name='matruong'>   
        </label>
        <label for="tentruong">
            Tên trường
            <input type="text" id='tentruong' name='tentruong'>   
        </label>
        <label for="diachi">
            Địa chỉ
            <input type="text" id='diachi' name='diachi'>   
        </label>
        <input type="submit" name='submit' value='Thêm'>
        <button class='reset'>Reset</button>
    </form>



    <?php
    include "connect.php";
    if(isset($_GET['submit'])&& $_GET['submit']=='Thêm'){
        $matruong=$_GET['matruong'];
        $tentruong=$_GET['tentruong'];
        $diachi=$_GET['diachi'];
        $sql="Insert into truong values('$matruong','$tentruong','$diachi')";
        $connect->query($sql);


    }

    ?>
</body>
</html>