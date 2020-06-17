<?php include_once "./com/base.php";
$period=ceil(date("n")/2);

$monthStr=[
    '1'=>"1,2月",
    '2'=>"3,4月",
    '3'=>"5,6月",
    '4'=>"7,8月",
    '5'=>"9,10月",
    '6'=>"11,12月",
];

if(isset($_GET['period'])){
    $period=$_GET['period'];
}
$year=date("Y");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="plugin/bootstrap.min.css">
    <link rel="stylesheet" href="plugin/custom.css">
    <script src="plugin/bootstrap.min.js"></script>
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <script src="plugin/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h2 style="text-align:center">期別</h2>
            <?php
                include_once "./include/header.php";
            ?>
            <a href="add_invoice.php"><button>新增獎號</button></a>
        </div>
        <div>
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" href="invoice.php?period=1"
                    style="background:<?=($period==1)?'lightgreen':'white';?>">第1期(1~2月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="invoice.php?period=2"
                    style="background:<?=($period==2)?'lightgreen':'white';?>">第2期(3~4月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="invoice.php?period=3"
                    style="background:<?=($period==3)?'lightgreen':'white';?>">第3期(5~6月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="invoice.php?period=4"
                    style="background:<?=($period==4)?'lightgreen':'white';?>">第4期(7~8月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="invoice.php?period=5"
                    style="background:<?=($period==5)?'lightgreen':'white';?>">第5期(9~10月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="invoice.php?period=6"
                    style="background:<?=($period==6)?'lightgreen':'white';?>">第6期(11~12月)</a>
            </nav>
        </div>
        

        <?php
            $num1=find('award_number',['period'=>$period,'year'=>$year,'type'=>1]);//單筆
            $num2=find('award_number',['period'=>$period,'year'=>$year,'type'=>2]);//單筆
            $num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>3]);//多筆
            $num4=all('award_number',['period'=>$period,'year'=>$year,'type'=>4]);//多筆
        ?>
        <div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>年月份</td>
                        <td  colspan="2" style="text-align:center;font-size:24px"><?=$year;?>年<?=$monthStr[$period];?></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>特別獎</td>
                        <td><?php
                                if(!empty($num1['number'])){
                                    echo $num1['number'];
                                };        
                            ?>
                            <P>同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</P>
                        </td>
                        <td><a href="award.php?aw=1&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                    <tr>
                        <td>特獎</td>
                        <td><?php
                                if(!empty($num2['number'])){
                                    echo $num2['number'];
                                };                                
                            ?>
                            <P>同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</P>
                        </td>
                        <td><a href="award.php?aw=2&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                    <tr>
                        <td style="vertical-align-center">頭獎</td>
                        <td>
                            <?php
                                foreach($num3 as $num){
                                    echo $num['number'] . "<br>";
                                }
                            ?>
                            <P>同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元</P>
                        </td>
                        <td><a href="award.php?aw=3&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                    <tr>
                        <td>二獎</td>
                        <td>
                            <P>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</P>
                        </td>
                        <td><a href="award.php?aw=4&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                    <tr>
                        <td>三獎</td>
                        <td>
                            <P>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</P>
                        </td>
                        <td><a href="award.php?aw=5&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                    <tr>
                        <td>四獎</td>
                        <td>
                            <P>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</P>
                        </td>
                        <td><a href="award.php?aw=6&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                    <tr>
                        <td>五獎</td>
                        <td>
                            <P>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</P>
                        </td>
                        <td><a href="award.php?aw=7&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                    <tr>
                        <td>六獎</td>
                        <td>
                            <P>同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</P>
                        </td>
                        <td><a href="award.php?aw=8&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                    <tr>
                        <td>增開六獎</td>
                        <td>
                            <?php
                                foreach($num4 as $num){
                                    echo $num['number'] . "<br>";
                                }                            
                            ?>
                            <P>同期統一發票收執聯末3位數號碼與增開六獎號碼相同者各得獎金2百元</P>
                        </td>
                        <td><a href="award.php?aw=9&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    

</body>

</html>