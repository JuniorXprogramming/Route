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
                <?php
                if (isset($_SESSION['logged'])) { ?>
                    <div>
                        <h1>You're Already Logged</h1>
                    </div>
                <?php }else{ ?>
                    <div class="d-flex flex-column align-items-center"
                        style="width: 100%; height: 100%; opacity: 0; transition: opacity 1.5s;" id="fade-login">
                        <h1 class="title-login"
                            style="overflow-y: hidden; font-family: 'Italiana', sans-serif; margin-top: 6%;">
                            LOGIN</h1>
                        <form action="system/login-s.php" class="d-flex flex-column align-items-center"
                            style="width: 40%; height: 50%;" method="POST">
                            <input type="text" name="user" id="user" class="input-form" placeholder="Username" style="padding: 2vw 1vw;">
                            <input type="password" name="pass" id="pass" class="input-form" placeholder="Password" style="padding: 2vw 1vw;">
                            <p style="margin-top: 3%; font-family: Italiana;" class="goto-register">
                                If you do not have an accout <span><a href="register.php">Register</a></span>
                            </p>
                            <button type="submit"
                                class="login-submit">submit</button>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="js/loginPage.js"></script>

</body>