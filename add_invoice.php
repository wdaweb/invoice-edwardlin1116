<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增開講獎號</title>
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

        <div>
            <form action="save_number.php" method="post">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>年月份</td>
                            <td>
                                <input type="number" name="year"><br>
                                <select name="period">
                                    <option value="1">1,2月</option>
                                    <option value="2">3,4月</option>
                                    <option value="3">5,6月</option>
                                    <option value="4">7,8月</option>
                                    <option value="5">9,10月</option>
                                    <option value="6">11,12月</option>
                                </select>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>特別獎</td>
                            <td><input type="number" name="num1"></td>
                        </tr>
                        <tr>
                            <td>特獎</td>
                            <td><input type="number" name="num2"></td>
                        </tr>
                        <tr>
                            <td>頭獎</td>
                            <td>
                                <input type="number" name="num3[]"><br>
                                <input type="number" name="num3[]"><br>
                                <input type="number" name="num3[]">
                            </td>
                        </tr>
                        <tr>
                            <td>二獎</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>三獎</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>四獎</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>五獎</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>六獎</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>增開六獎</td>
                            <td>
                                <input type="number" name="num4[]"><br>
                                <input type="number" name="num4[]">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="送出">
                </div>
            </form>
        </div>
    </div>

</body>

</html>