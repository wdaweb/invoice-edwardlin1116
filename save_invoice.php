<?php
include "./com/base.php";

$data=[
    
    'period'=>$_POST['period'],
    'year'=>$_POST['year'],
    'code'=>$_POST['code'],
    'number'=>$_POST['number'],
    'expend'=>$_POST['expend'],
];
$res=save("invoice",$data);

if($res==1){
     
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

?>