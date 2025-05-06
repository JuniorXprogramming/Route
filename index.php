<?php
include("component/header.php");
?>

<body>
    <div style="width: 100vw; height: 100vh; position: relative;">
        <?php
        include("component/linear.php");
        
            ?>
        <div class="blue-screen ">
            <?php include("component/navbar.php") ?>
            <div class="white-screen" >
                <div class="row">
                    <div class="d-flex align-items-center" style="width: 100%;">
                        <div class="d-flex align-items-center" style="width: 100%;">
                            <img src="img/completion.png" alt="" style="object-fit: cover;" class="logo">
                            <hr style="border: 1px solid black; width: 5%; transform: rotate(90deg);">
                            <p class="m-0 after-logo">TRANSPORTATION BY MINIBUS<br>IN SAMUTPRAKAN</p>
                        </div>
                        <div class="d-flex justify-content-end align-items-center" style="width: 100%; height: 100%;">
                            <div class="slide-minibus" style="margin-right: 10%; width: 0; padding: 0 5%; background-color: #B7B7B7; border-radius: 90px; transition: width 1s;">
                                <h1 class="my-0 py-0 text-end slide-minibus-text" style="width: 100%; overflow-y: hidden; padding-right: 10%; font-family: 'Italiana', sans-serif;">MINIBUS</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-7 col-lg-6 col-xl-6 col-xxl-6" style="position: relative; height: max-content;">
                        <p class="we-are-your-navigator">WE ARE YOUR NAVIGATOR.</p>
                        <h1 style="overflow-y: hidden; margin: 0 15%; font-family: 'Italiana', sans-serif;" class="wemake">WE<br>MAKE<br>YOUR LIFE<br><span class="earsier">EASIER.</span></h1>
                        <form action="" style="position: relative; height: 30%;">
                            <input type="text" style="background-color: #797578; color: white; margin: 3% 16.5%; padding: 1.5% 8%; border-radius: 60px; box-shadow: 0px 4px 20px 7px rgba(0, 0, 0, 0.25); border: none;" class="search-index">
                            <p style="position: absolute; color: white;" class="mag"><i class="fa-solid fa-magnifying-glass" style="overflow-y: hidden;"></i></p>
                        </form>
                    </div>
                    <div class="col-12 col-sm-6 col-md-5 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <img src="img/minibus.png" alt="" class="minibus">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end" style="margin: 10% 0 2% 0;">
                    <h1 class="text-end mt-3 d-flex justify-content-end align-items-center" style="font-size: 2rem; height: 80px; margin-right: 3.5%; overflow-y: hidden;"><span class="samut-index">SAMUTPRAKAN</span></h1>
                </div>
            </div>
        </div>
    </div>
    <script src="js/slide.js"></script>
</body>