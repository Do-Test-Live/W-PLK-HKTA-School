<?php
session_start();
require_once("Controller/dbController.php");
$db_handle = new DBController();
$delete = $db_handle->insertQuery("TRUNCATE TABLE `sound`");
date_default_timezone_set("Asia/Hong_Kong");
$inserted_at = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$insert = $db_handle->insertQuery("INSERT INTO `user`(`ip`,  `inserted_at`) VALUES ('$ip','$inserted_at')");
$data = $db_handle->runQuery("SELECT * FROM user order by id desc");
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

    <script>
        if (location.protocol !== 'https:') {
            location.replace(`https:${location.href.substring(location.protocol.length)}`);
        }
    </script>
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
                <h4 class="text-lg-end text-center mt-lg-4 mt-0 hkta-title-date pe-lg-4" id="datetime">
                    2023/03/06(XXX) 07:30
                </h4>

                <script>
                    function displayHongKongDateTime() {
                        // Create a new Date object
                        let date = new Date();

                        // Define the options for formatting the date and time
                        let options = {
                            timeZone: 'Asia/Hong_Kong',
                            day: 'numeric',
                            month: 'numeric',
                            year: 'numeric',
                            hour: 'numeric',
                            minute: 'numeric',
                            hour12: true, // Use 12-hour format
                            weekday: 'long'
                        };

                        // Format the date and time according to the options
                        let hongKongDateTime = date.toLocaleString('en-US', options);

                        // Get the div element
                        let div = document.getElementById('datetime');

                        // Update the content of the div with the Hong Kong date and time
                        div.textContent = hongKongDateTime;
                        }

                        // Call the displayHongKongDateTime function initially
                        displayHongKongDateTime();

                        // Update the date and time every second
                        setInterval(displayHongKongDateTime, 1000);
                    </script>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row text-center">
            <?php
            $query = "SELECT * FROM sound_list order by id asc";
            $sound_data = $db_handle->runQuery($query);
            $sound_row = $db_handle->numRows($query);

            $total = (int)($sound_row / 4);
            for ($i = 0; $i < $total; $i++) {
                $j = $i * 4;
                ?>
                <div class="col-lg-6">
                    <div class="row">
                        <?php
                        if (isset($sound_data[$j]['code'])) {
                            ?>
                            <div class="col-xl-3 col-md-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-primary-btn"
                                        id="<?php echo $sound_data[$j]['code']; ?>"
                                        type="button"><?php echo $sound_data[$j]['code']; ?></button>
                            </div>
                            <?php
                        }
                        if (isset($sound_data[$j + 1]['code'])) {
                            ?>
                            <div class="col-xl-3 col-md-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-primary-btn"
                                        id="<?php echo $sound_data[$j + 1]['code']; ?>"
                                        type="button"><?php echo $sound_data[$j + 1]['code']; ?></button>
                            </div>
                            <?php
                        }
                        if (isset($sound_data[$j + 2]['code'])) {
                            ?>
                            <div class="col-xl-3 col-md-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-primary-btn"
                                        id="<?php echo $sound_data[$j + 2]['code']; ?>"
                                        type="button"><?php echo $sound_data[$j + 2]['code']; ?></button>
                            </div>
                            <?php
                        }
                        if (isset($sound_data[$j + 3]['code'])) {
                            ?>
                            <div class="col-xl-3 col-md-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-primary-btn"
                                        id="<?php echo $sound_data[$j + 3]['code']; ?>"
                                        type="button"><?php echo $sound_data[$j + 3]['code']; ?></button>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">

        <?php
        $query = "SELECT * FROM extra_activities order by id asc";
        $activities_data = $db_handle->runQuery($query);
        $activities_row = $db_handle->numRows($query);

        $total = (int)($activities_row / 7);
        for ($i = 0; $i < $total; $i++) {
            $j = $i * 7;
            ?>
            <div class="row text-center">
                <div class="col-lg-7 ps-lg-3">
                    <div class="row">
                        <?php
                        if (isset($activities_data[$j]['name'])) {
                            ?>
                            <div class="col-xl-3 col-lg-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-dark-btn"
                                        type="button"><?php echo $activities_data[$j]['name']; ?></button>
                            </div>
                            <?php
                        }
                        if (isset($activities_data[$j + 1]['name'])) {
                            ?>
                            <div class="col-xl-3 col-lg-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-dark-btn"
                                        type="button"><?php echo $activities_data[$j + 1]['name']; ?></button>
                            </div>
                            <?php
                        }
                        if (isset($activities_data[$j + 2]['name'])) {
                            ?>
                            <div class="col-xl-3 col-lg-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-dark-btn"
                                        type="button"><?php echo $activities_data[$j + 2]['name']; ?></button>
                            </div>
                            <?php
                        }
                        if (isset($activities_data[$j + 3]['name'])) {
                            ?>
                            <div class="col-xl-3 col-lg-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-dark-btn"
                                        type="button"><?php echo $activities_data[$j + 3]['name']; ?></button>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-5 pe-lg-4">
                    <div class="row">
                        <?php
                        if (isset($activities_data[$j + 4]['name'])) {
                            ?>
                            <div class="col-xl-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-dark-btn"
                                        type="button"><?php echo $activities_data[$j + 4]['name']; ?></button>
                            </div>
                            <?php
                        }
                        if (isset($activities_data[$j + 5]['name'])) {
                            ?>
                            <div class="col-xl-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-dark-btn"
                                        type="button"><?php echo $activities_data[$j + 5]['name']; ?></button>
                            </div>
                            <?php
                        }
                        if (isset($activities_data[$j + 6]['name'])) {
                            ?>
                            <div class="col-xl-4 col-6 mb-4">
                                <button class="btn btn-primary hkta-dark-btn"
                                        type="button"><?php echo $activities_data[$j + 6]['name']; ?></button>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<section>
    <div class="container-fluid mt-3 mb-3">
        <div class="row ps-lg-2 pe-lg-2">
            <div class="col-6 text-start ps-lg-4">
                <h3 class="pt-4"></h3>
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

<!-- jQuery JS -->
<script src="assets/vendor/jQuery/jquery.min.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<script>
    $(document).ready(function () {
        //to disable the entire page
        $("body").on("contextmenu", function (e) {
            return false;
        });

        $('body').bind('cut copy paste', function (e) {
            e.preventDefault();
        });

        document.addEventListener('contextmenu', event => event.preventDefault());

        document.onkeydown = function (e) {

            // disable F12 key
            if (e.keyCode == 123) {
                return false;
            }

            // disable I key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                return false;
            }

            // disable J key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                return false;
            }

            // disable U key
            if (e.ctrlKey && e.keyCode == 85) {
                return false;
            }
        }
    });
</script>
</body>
</html>
