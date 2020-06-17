<?php include_once "com/base.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>統一發票管理系統</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="plugin/bootstrap.min.css">
    <link rel="stylesheet" href="plugin/custom.css">
    <script src="plugin/bootstrap.min.js"></script>
    <script src="plugin/jquery-3.5.1.min.js"></script>
    <script src="plugin/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <?php
                include_once "./include/header.php";
            ?>
        </div>

        <?php

            if(empty($_GET)){
                echo "請選擇要對獎的項目<a href='invoice.php'>各期獎號</a>";
                exit();
            }

            $award_type=[
                1=>["特別獎",1,8,10000000],
                2=>["特獎",2,8,2000000],
                3=>["頭獎",3,8,200000],
                4=>["二獎",3,7,40000],
                5=>["三獎",3,6,10000],
                6=>["四獎",3,5,4000],
                7=>["五獎",3,4,1000],
                8=>["六獎",3,3,200],
                9=>["增開六獎",4,3,200],
            ];
            $aw=$_GET['aw'];
            echo "年份:".$_GET['year']."<br>";
            echo "期別:".$_GET['period']."<br>";
            echo "獎別:".$award_type[$aw][0]."<br>";

            $award_nums=nums("award_number",[
                "year"=>$_GET['year'],
                "period"=>$_GET['period'],
                "type"=>$award_type[$aw][1]
            ]);            
            echo "獎號數量:".$award_nums;

            $award_numbers=all("award_number",[
                "year"=>$_GET['year'],
                "period"=>$_GET['period'],
                "type"=>$award_type[$aw][1]
            ]) ;            
            echo "<h5>本期對獎獎號</h5>";

            $t_num=[];
            foreach($award_numbers as $num){
                echo $num['number']."<br>";
                $t_num[]=$num['number'];
            }
            echo "<h5>本期發票號碼</h5>";

            $count=0;
            $invoices=all("invoice",["year"=>$_GET['year'],"period"=>$_GET['period'],]);
            
            foreach ($invoices as $ins) {
            
                foreach($t_num as $tn){
                
                    $len=$award_type[$aw][2];                

                    $start=8-$len;

                    //針對增開六獎號特別處理
                    if($aw!=9){
                        $target_num=mb_substr($tn,$start,$len);
                    }else{
                        $target_num=$tn;
                    }
                
                    if(mb_substr($ins['number'],$start,$len) == $target_num ){
                        echo "<span style='color:red;font-size:20px'>".$ins['number']."中獎了</span>";
                        $count++;
                        echo "<br>";
                    }
                }
            }
            $money = $award_type[$aw][3]; //中獎單筆金額
            $total = $count * $money; //中獎總額
        ?>
        <div>
            <p>總中獎金額：<?=$total;?>元</p>
            <p>總中獎筆數：<?=$count;?>筆</p>
        </div>
    </div>
</body>

</html>