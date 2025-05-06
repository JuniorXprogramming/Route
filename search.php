<?php
include("component/header.php");
?>

<body>
    <div style="width: 100vw; height: 100vh; position: relative;">
        <?php
        include("component/linear.php")
            ?>
        <div class="blue-screen ">
            <?php include("component/navbar.php") ?>
            <div class="white-screen" style="height: 100vh;">
                <div class="row" style="height: 60vh;">
                    <div class="col-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 col-xxl-6 my-5">
                        <form class="d-flex flex-column align-items-center">
                            <h1 style="overflow-y: hidden;" class="font-th title-search">ค้นหาเส้นทาง</h1>
                            <div style="width: 100%; position: relative;"
                                class="d-flex justify-content-center align-items-center flex-column">
                                <input type="text" id="source" class="input-form" style="width: 50%; padding: 1.7% 6%;"
                                    placeholder="ต้นทาง" autocomplete="off" class="font-th">
                                <p style="position: absolute; color: black;" class="mag-search">
                                    <i class="fa-solid fa-magnifying-glass" style="overflow-y: hidden;"></i>
                                </p>
                                <div id="search-show" class="font-th">

                                </div>
                            </div>
                            <div style="width: 100%; position: relative;"
                                class="d-flex justify-content-center align-items-center flex-column">
                                <input type="text" id="destination" class="input-form"
                                    style="width: 50%; padding: 1.7% 6%;" placeholder="ปลายทาง" autocomplete="off"
                                    class="font-th">
                                <p style="position: absolute; color: black;" class="mag-search">
                                    <i class="fa-solid fa-magnifying-glass" style="overflow-y: hidden;"></i>
                                </p>
                                <div id="search-des" class="font-th">

                                </div>
                            </div>
                            <div style="width: 100%; position: relative;"
                                class="d-flex justify-content-center align-items-center flex-column">
                                <input type="text" id="drop" class="input-form" style="width: 50%; padding: 1.7% 6%;"
                                    placeholder="จุดแวะ" class="font-th">
                                <p style="position: absolute; color: black;" class="mag-search">
                                    <i class="fa-solid fa-magnifying-glass" style="overflow-y: hidden;"></i>
                                </p>
                                <div id="search-des" class="font-th">

                                </div>
                            </div>
                        </form>
                        <div class="d-flex flex-row justify-content-evenly" style="width: 100%; margin-top: 4%;">
                            <button type="submit"
                                style="width: max-content; background-color: white; border: none; text-decoration: underline;"
                                onclick="searchRoute()" class="font-th btn-text">ค้นหา</button>
                            <button type="reset"
                                style="width: max-content; background-color: white; border: none; text-decoration: underline;"
                                onclick="resetForm()" class="font-th btn-text">ยกเลิก</button>
                        </div>
                    </div>
                    <div class="col-0 col-sm-6 col-md-4 col-lg-5 col-xl-6 col-xxl-6 my-5 div-hidden-search-right"
                        style="position: relative;">
                        <h1 class="text-end"
                            style="overflow-y: hidden; font-size: 2rem; margin-right: 10%; font-family: italiana; padding: 1%;">
                            <span class="samut-search">SAMUTPRAKAN</span>
                        </h1>
                        <h1 class="text-minibus-search div-minibus-270">
                            MINIBUS</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 font-th" id="result-search">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/searchPage.js"></script>

</body>