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
    <div class="card my-5 bg-light">
        <div class="card-header bg-primary">
            <ul class="nav nav-pills card-header-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="list.php">發票列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="invoice.php">各期獎號</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" href="award.php">對獎</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">回首頁</a>
                </li>
            </ul>
        </div>

        <form action="save_invoice.php" method="post" class="mx-2">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="year">年分：</label>
                    <select class="form-control" name="year">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="period">期別：</label>
                    <select class="form-control col" name="period">
                        <option value="1">1,2月</option>
                        <option value="2">3,4月</option>
                        <option value="3">5,6月</option>
                        <option value="4">7,8月</option>
                        <option value="5">9,10月</option>
                        <option value="6">11,12月</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="number">獎號：</label>
                    <input type="text" name="code">
                    <input type="number" name="number">
                </div>               
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="expend">花費：</label>
                    <input type="number" name="expend">
                </div>                                   
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="submit" value="儲存">
                </div>
            </div>           
        </form>
    </div>
</body>

</html>