<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/code.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link media="only screen and (min-width: 0px) and (max-width: 327px)" rel="stylesheet" type="text/css" href="../css/mobile.css">
    <link media="only screen and (min-width: 328px) and (max-width: 768px)" rel="stylesheet" type="text/css" href="../css/tablet.css">
    <meta charset="UTF-8">
    <title>پنل کاریری</title>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-secondary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center" href="#">نام شرکت</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">خروج</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>ثبت اطلاعات</span>
                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column text-right">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            داشبورد <span class="sr-only">(جاری)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            سفارشات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            محصولات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            مشتریان
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            گزارش ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            ادغام ها
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>گزارش های ذخیره شده</span>
                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2 text-right">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            ماهانه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                           سه ماه آخر
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            تعامل اجتماعی
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            فروش اخر سال
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>اطلاعات پروفایل</span>
                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2 text-right">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            مشخصات شخصی
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            مشخصات شرکت
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">داشبورد</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">اشتراک</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">خروجی اکسل</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        این هفته
                    </button>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border bg-light" >
                <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm"> ثبت</button>
                <button type="button" class="btn btn-sm"> ویرایش</button>
                <button type="button" class="btn btn-sm"> حذف</button>
                <button type="button" class="btn btn-sm"> جستجو</button>
                </div>
            </div>

            <canvas class="my-1 w-100 " id="myChart" width="900" height="0"></canvas>
            <div class="table-responsive modal-dialog-scrollable text-right border" id="tb" style="height: 350px">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>کد محصول</th>
                        <th>نام محصول</th>
                        <th>نام گروه</th>
                        <th>مبلغ(ریال)</th>
                        <th>اپلود عکس</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>001</td>
                        <td>ذرت</td>
                        <td>خشکبار</td>
                        <td>500000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>پسته</td>
                        <td>خشکبار</td>
                        <td>3500000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>سس ماینز</td>
                        <td>بسته بندی</td>
                        <td>260000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>چیپس</td>
                        <td>تنقلات</td>
                        <td>100000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>تاید</td>
                        <td>شوینده ها</td>
                        <td>300000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>006</td>
                        <td>مایع دستشویی</td>
                        <td>شوینده ها</td>
                        <td>420000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>شوید</td>
                        <td>سبزیجات</td>
                        <td>80000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>شوید</td>
                        <td>سبزیجات</td>
                        <td>80000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>شوید</td>
                        <td>سبزیجات</td>
                        <td>80000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>شوید</td>
                        <td>سبزیجات</td>
                        <td>80000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>شوید</td>
                        <td>سبزیجات</td>
                        <td>80000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>شوید</td>
                        <td>سبزیجات</td>
                        <td>80000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>شوید</td>
                        <td>سبزیجات</td>
                        <td>80000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>شوید</td>
                        <td>سبزیجات</td>
                        <td>80000</td>
                        <td>... <button type="button" class="btn btn-sm btn-outline-secondary"> اپلود</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="container-fluid">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <div class="btn-toolbar mb-2 mb-md-2">
                        <table class="">
                            <thead>
                            <tr>
                                <th><button type="button" class="btn btn-sm btn-outline-secondary " style="padding:7px 30px; margin:0 10px;">دسته اول</button></th>
                                <th><button type="button" class="btn btn-sm btn-outline-secondary " style="padding:7px 30px; margin:0 10px;">دسته دوم</button></th>
                                <th><button type="button" class="btn btn-sm btn-outline-secondary " style="padding:7px 30px; margin:0 10px;">دسته سوم</button></th>
                                <th><button type="button" class="btn btn-sm btn-outline-secondary " style="padding:7px 30px; margin:0 10px;">دسته چهارم</button></th>
                                <th><button type="button" class="btn btn-sm btn-outline-secondary " style="padding:7px 30px; margin:0 10px;">دسته پنجم</button></th>
                            </tr>
                            </thead>
                        </table>
                </div>
            </div>
            </div>
        </main>
    </div>
</div>


</body>
</html>
<?php
