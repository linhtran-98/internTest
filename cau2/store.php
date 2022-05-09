<?php
    if($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $content = $_POST['content'];

        $conn = mysqli_connect('localhost', 'intern', 'quanglinh', 'intern') or die('Kết nối database thất bại');
        mysqli_set_charset($conn, 'UTF-8');
        $sql = 'insert into contact(name, email, phone, content) values ("'.$name.'","'.$email.'","'.$phone.'","'.$content.'")';
        mysqli_query($conn, $sql);

        echo '<script>alert("Submit dữ liệu thành công")</script>';
        header( "refresh:1; url=index.php" );
    }
?>