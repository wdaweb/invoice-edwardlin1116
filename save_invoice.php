<?php
include "./com/base.php";


$sql="insert into invoice (
    `period`,
    `year`,
    `code`,
    `number`,
    `expend`) values (
        '".$_POST['period']."',
        '".$_POST['year']."',
        '".$_POST['code']."',
        '".$_POST['number']."',
        '".$_POST['expend']."')";

if(!empty($POST['expend'])){
     
    echo  $sql;
    $res=$pdo->exec($sql);
    
    echo "新增成功";
    echo "<a href='index.php'>繼續輸入</a><br>";
    echo "<a href='list.php'>發票列表</a><br>";
    // if($res==1){
    // }   
}
else{
    echo "新增失敗";
}

echo "<hr>";

// $sql="delete from invoice where id='2'";
// $res=$pdo->exec($sql);
// echo $sql;

// echo "<hr>"

?>