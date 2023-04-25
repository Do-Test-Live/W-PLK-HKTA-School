<?php
session_start();
require_once("Controller/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$insert = $db_handle->insertQuery("INSERT INTO `user`(`ip`,  `inserted_at`) VALUES ('$ip','$inserted_at')");
$data = $db_handle->runQuery("SELECT * FROM user order by id desc ");
$_SESSION['user_id'] = $data[0]['id'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>PLK HKTA YUEN PRIMARY SCHOOL</title>
    <meta content="PLK HKTA YUEN PRIMARY SCHOOL" name="description">
    <meta content="PLK HKTA YUEN PRIMARY SCHOOL" name="keywords">
    <meta content="PLK HKTA YUEN PRIMARY SCHOOL" name="author">
    <meta content="PLK HKTA YUEN PRIMARY SCHOOL" property="og:title"/>
    <meta content="PLK HKTA YUEN PRIMARY SCHOOL" property="og:description"/>
    <meta content="assets/images/back.png" property="og:image"/>

    <!-- Bootstrap CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Splide CSS -->
    <link href="assets/vendor/splide/css/splide.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<section>
    <div class="container-fluid">
        <div class="row mt-lg-5 mt-3 ps-2">
            <div class="col-lg-3 ps-4 text-lg-start text-center mb-3">
                <img alt="" class="img-fluid" src="assets/images/logo.png"/>
            </div>
            <div class="col-lg-6 text-center mb-3">
                <h1 class="hkta-dark hkta-title">
                    PLK HKTA YUEN PRIMARY SCHOOL
                </h1>
                <h3 class="hkta-primary-text hkta-title-description">
                    After School System
                </h3>
            </div>
            <div class="col-lg-3 mb-3">
                <h4 class="text-lg-end text-center mt-lg-4 mt-0 hkta-title-date pe-lg-4">
                    2023/03/06(XXX) 07:30
                </h4>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="MAS1" type="button">MAS1</button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="RIS1" type="button">RIS1</button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="ELV1" type="button">ELV1</button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="EUP1" type="button">EUP1</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="WEF2" type="button">WEF2</button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="WEY2" type="button">WEY2</button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="ANE2" type="button">ANE2</button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="MAP2" type="button">MAP2</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="JOK3" type="button">JOK3
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="MIE3" type="button">MIE3
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="JAA3" type="button">JAA3
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="AMM3" type="button">AMM3
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="FAM4" type="button">FAM4
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="JAR4" type="button">JAR4
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="STZ4" type="button">STZ4
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="DAL4" type="button">DAL4
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="KEJ5" type="button">KEJ5
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="ASK5" type="button">ASK5
                        </button>
                    </div>

                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="AMC5" type="button">AMC5
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="ALV5" type="button">ALV5
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="CHV6" type="button">CHV6
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="JUL6" type="button">JUL6
                        </button>
                    </div>

                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="MIL6" type="button">MIL6
                        </button>
                    </div>
                    <div class="col-xl-3 col-md-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-primary-btn" id="BEB6" type="button">BEB6
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-7 ps-lg-3">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Football Team</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Production Team</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">SPT TEAM</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Senior Chair</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pe-lg-4">
                <div class="row">
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Junior Chair</button>
                    </div>
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Cheerleading</button>
                    </div>
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Orchestra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-7 ps-lg-3">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Football Team</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Production Team</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">SPT TEAM</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Senior Chair</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pe-lg-4">
                <div class="row">
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Junior Chair</button>
                    </div>
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Cheerleading</button>
                    </div>
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Orchestra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-7 ps-lg-3">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Football Team</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Production Team</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">SPT TEAM</button>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Senior Chair</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pe-lg-4">
                <div class="row">
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Junior Chair</button>
                    </div>
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Cheerleading</button>
                    </div>
                    <div class="col-xl-4 col-6 mb-4">
                        <button class="btn btn-primary hkta-dark-btn" type="button">Orchestra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid mt-3 mb-3">
        <div class="row ps-lg-2 pe-lg-2">
            <div class="col-6 text-start ps-lg-4">
                <h3 class="pt-4">Monday</h3>
            </div>
            <div class="col-6 text-lg-end pe-lg-4">
                <button class="btn btn-primary hkta-reset-btn" id="reset" onclick="reset();" type="button">Reset
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

<!-- Splide JS -->
<script src="assets/vendor/splide/js/splide.min.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>
</body>
</html>
