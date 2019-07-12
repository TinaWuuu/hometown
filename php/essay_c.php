<?php
    session_start();
<<<<<<< HEAD
    $phone=$_SESSION["phone"];
    $title=$_POST["title"];
    include("conn.php");
=======
    $id=$_POST["id"];
    $phone=$_SESSION["phone"];
    $title=$_POST["title"];
    include("conn.php");
    //$title=$_POST["title"];
>>>>>>> c416b68e99b5e201d2d3ecf26b8c82822d77ce8c
    $sql="select id
    from users
    where phone='$phone'";
    $result = mysqli_query($conn,$sql);  
    $con=mysqli_fetch_row($result);
    $sqll="select id
<<<<<<< HEAD
    from article
    where title='$title'";
    $res = mysqli_query($conn,$sqll);  
    $co=mysqli_fetch_row($res);
    $sql3="select count(*)
    from article_c
    where a_id='$co[0]' and u_id='$con[0]'";
    $r = mysqli_query($conn,$sql3);  
    $c=mysqli_fetch_row($r);
    if($c[0]=='0'){
        echo "0";
    }
    else{
        echo "1";
    }
    ?>
=======
    from users
    where title='$title'";
    $res = mysqli_query($conn,$sqll);  
    $co=mysqli_fetch_row($res);
    //echo $con[0];
    $sqll="insert into article_c(a_id,u_id) values('$co[0]','$con[0]')";
    mysqli_query($conn,$sqll); 
    // $sql3="select title
    // from message,article
    // where message.id='$id' and article.id=message.a_id";
    // $res = mysqli_query($conn,$sql3);  
    // $con=mysqli_fetch_row($res);
    // echo $con[0];
    if ($conn->query($sqll) === TRUE){
        echo $_SESSION["title"];
    }
    else{
        echo "0";
    }
    $conn->close();//关闭数据库
?>
>>>>>>> c416b68e99b5e201d2d3ecf26b8c82822d77ce8c
