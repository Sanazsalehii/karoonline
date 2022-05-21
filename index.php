<?php
include __DIR__.'/Model.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__.'/link.php'; ?>
    <?php include __DIR__.'./user/linkuser.php'; ?>
    <title>login</title>
</head>
<body class="">
<?php include __DIR__.'/header.php'; ?>

<div class="">
    <div class="container-fluid bg-light" id="menubar">
        <div class="row border-bottom " id="top-menu">
        <div class="col-lg-1 col-sm " id="">
            <div class=" input-group-prepend " style="margin-left: 30px" id="box-data">
                <button type="button" class="btn btn-sm  dropdown-toggle " id="data">
                    <span data-feather="calendar"><img src="img/layer.png" /></span>
                    دسته بندی کالاها
                </button>
            </div>
        </div>

            <div class="col-lg- col-sm" id="col-srh">
                <div class=" input-group-prepend" id="box-srh">
                    <!-- <label for=""><img src="./img/srh.png" id="icon-srh"></label> -->
                    <input type="search" class="form-control  text-right" id="srh" placeholder="جستجو ...">
                </div>

            </div>
            <div class="col-lg-2 col-sm text-left ">
                <div class="" id="box-icon">
                    <ul class="nav text-left justify-content-end" id="mark-icon">
                        <li><a href="user/dashboard.php">
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    <span data-feather="calendar"></span>
                                    پنل
                                </button></a></li>
                        <li><a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    <span data-feather="calendar"></span>
                                    اینستا
                                </button></a></li>
                        <li><a href="#">
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    <span data-feather="calendar"></span>
                                    تلگرام
                                </button></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>

<br><br>
<div class="container text-center">
<h1>صفحه اصلی</h1>
</div>
</body>
</html>
