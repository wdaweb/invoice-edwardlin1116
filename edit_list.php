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

    <?php
        include_once "./com/base.php";
        $id=$_GET['id'];    
        $res=find("invoice",$id);
    ?>
    <div class="card my-5 bg-light">
        
        <h2 style="text-align:center">編輯發票</h2>
        
        <form action="update_list.php" method="post" class="mx-2">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="year">年份：</label>
                    <input type="text" name="year" value="<?=$res['year'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="period">期別：</label>
                    <input type="text" name="period" value="<?=$res['period'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="number">獎號：</label>
                    <input type="text" name="code" value="<?=$res['code'];?>">
                    <input type="number" name="number" value="<?=$res['number'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="expend">花費：</label>
                    <input type="number" name="expend" value="<?=$res['expend'];?>">
                    <input type="hidden" name="id" value="<?=$id?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="submit" value="儲存">
                    <input type="reset" value="重置">
                </div>
            </div>
        </form>
    </div>
</body>

</html>