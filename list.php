<?php
include "./com/base.php";
$period=ceil(date('n')/2);
if(isset($_GET['period'])){
    $period=$_GET['period'];
}
?>

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
            <h2 style="text-align:center">發票列表</h2>
            <?php
                include_once "./include/header.php";
            ?>
        </div>

        <div>            
            <!-- <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item"><a href="list.php?period=1"
                        style="background:<?=($period==1)?'lightgreen':'white';?>">第1期(1~2月)</a></li>
                <li class="list-group-item"><a href="list.php?period=2"
                        style="background:<?=($period==2)?'lightgreen':'white';?>">第2期(3~4月)</a></li>
                <li class="list-group-item"><a href="list.php?period=3"
                        style="background:<?=($period==3)?'lightgreen':'white';?>">第3期(5~6月)</a></li>
                <li class="list-group-item"><a href="list.php?period=4"
                        style="background:<?=($period==4)?'lightgreen':'white';?>">第4期(7~8月)</a></li>
                <li class="list-group-item"><a href="list.php?period=5"
                        style="background:<?=($period==5)?'lightgreen':'white';?>">第5期(9~10月)</a></li>
                <li class="list-group-item"><a href="list.php?period=6"
                        style="background:<?=($period==6)?'lightgreen':'white';?>">第6期(11~12月)</a></li>
            </ul> -->
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link" href="list.php?period=1"
                        style="background:<?=($period==1)?'lightgreen':'white';?>">第1期(1~2月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="list.php?period=2"
                        style="background:<?=($period==2)?'lightgreen':'white';?>">第2期(3~4月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="list.php?period=3"
                        style="background:<?=($period==3)?'lightgreen':'white';?>">第3期(5~6月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="list.php?period=4"
                        style="background:<?=($period==4)?'lightgreen':'white';?>">第4期(7~8月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="list.php?period=5"
                        style="background:<?=($period==5)?'lightgreen':'white';?>">第5期(9~10月)</a>
                <a class="flex-sm-fill text-sm-center nav-link" href="list.php?period=6"
                        style="background:<?=($period==6)?'lightgreen':'white';?>">第6期(11~12月)</a>
            </nav>
        </div>
        
        <div>
            <?php
                $rows=all('invoice',['period'=>$period]);
            ?>
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">編號</th>
                        <th scope="col">標記</th>
                        <th scope="col">號碼</th>
                        <th scope="col">花費</th>
                        <th scope="col">編輯</th>
                    </tr>
                </thead>
                <?php
                    foreach($rows as $row){
                ?>
                <tbody>
                    <tr>
                        <td><?=$row['id'];?></td>
                        <td><?=$row['code'];?></td>
                        <td><?=$row['number'];?></td>
                        <td><?=$row['expend'];?></td>
                        <td><a href="edit_list.php?id=<?=$row['id'];?>" >編輯</a></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>