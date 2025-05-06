<?php
if(isset($_SESSION['logged'])){
    $checkPer = $_SESSION['logged'];
}else{
    $checkPer = "";
}
if (isset($_SESSION['logged'])) { ?>
    <div class="row" style="width: 90%; margin: 0 auto;">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="row" id="nav-console">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 navigation-red"></div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 navigation-yellow"></div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 navigation-green"></div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="d-flex flex-row justify-content-around" id="nav-right">
                <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9 bg-white nav-right"
                    style="  border-radius: 180px;">
                    <ul class="customise-nav">
                        <a href="index.php">
                            <li class="" id="nav-1" style="transition: width 1s ease-in-out;">
                                HOME
                            </li>
                        </a>
                        <a href="#" onclick="checkPermis('<?= $checkPer?>')">
                            <li class="" id="nav-2" style="transition: width 1s ease-in-out;">
                                SEARCH
                            </li>
                        </a>
                        <a href="#" onclick="logout()">
                            <li class="" id="nav-3" style="transition: width 1s ease-in-out;">
                                LOGOUT
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="bg-white d-flex justify-content-center align-items-center white-rec">
                    <div class="rectangle">

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="row" style="width: 90%; margin: 0 auto;">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="row" id="nav-console">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 navigation-red"></div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 navigation-yellow"></div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 navigation-green"></div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="d-flex flex-row justify-content-around" id="nav-right">
                <div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9 bg-white nav-right"
                    style=" border-radius: 180px;">
                    <ul class="customise-nav">
                        <a href="index.php">
                            <li class="" id="nav-1" style="transition: width 1s ease-in-out;">
                                HOME
                            </li>
                        </a>
                        <a href="#" onclick="checkPermis('<?= $checkPer?>')">
                            <li class="" id="nav-2" style="transition: width 1s ease-in-out;">
                                SEARCH
                            </li>
                        </a>
                        <a href="login.php">
                            <li class="" id="nav-3" style="transition: width 1s ease-in-out;">
                                LOGIN
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="bg-white d-flex justify-content-center align-items-center white-rec">
                    <div class="rectangle">

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>