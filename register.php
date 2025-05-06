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
                <div class="d-flex flex-column align-items-center"
                    style="width: 100%; height: 100%; opacity: 0; transition: opacity 1.5s;" id="fade-login">
                    <h1 class="title-login"
                        style="overflow-y: hidden; font-family: 'Italiana', sans-serif; margin-top: 6%;">
                        REGISTER</h1>
                    <form action="system/register.php" method="POST" class="d-flex flex-column align-items-center" style="width: 100%; height: 100%;">
                        <div style="width: 100%; overflow-y:hidden; height: calc(max-content + 1%);"
                            class="d-flex justify-content-center align-items-center">
                            <input type="text" name="user" id="user" class="input-form" placeholder="Username"
                                style="width: 30%; padding: 1.3vw 1vw;">
                            <input type="password" name="pass" id="pass" class="input-form" placeholder="Password"
                                style="width: 30%; padding: 1.3vw 1vw; margin-left: 1vw;">
                        </div>

                        <div style="width: 100%; overflow-y:hidden; height: calc(max-content + 1%);"
                            class="d-flex justify-content-center align-items-center">
                            <input type="email" name="email" class="input-form" placeholder="Example@gmail.com"
                                style="width: 61%; padding: 1.3vw 1vw;">
                        </div>
                        <div style="width: 100%; overflow-y:hidden; height: calc(max-content + 1%);"
                            class="d-flex justify-content-center align-items-center">
                            <input type="text" name="addr" class="input-form" placeholder="Address"
                                style="width: 61%; padding: 1.3vw 1vw;">
                        </div>
                        <div class="d-flex justify-content-center three-column-input">
                            <div class="d-flex justify-content-center align-items-center" style="width: 100%;">
                                <input type="text" name="city" class="input-form" placeholder="City"
                                    style="width: 48%; padding: 1.3vw 1vw;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="width: 100%;">
                                <select name="district" id="select">
                                    <option value="Bang bo">Bang bo</option>
                                    <option value="Bang Phli">Bang Phli</option>
                                    <option value="Bang Sao Thong">Bang Sao Thong</option>
                                    <option value="Mueang Samut Prakan">Mueang Samut Prakan</option>
                                    <option value="Phra Pradaeng">Phra Pradaeng</option>
                                    <option value="Phra Samut Chedi">Phra Samut Chedi</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="width: 100%;">
                                <input type="text" maxlength=5 name="postcode" class="input-form" placeholder="12345"
                                    style="width: 48%; height: 3vw; padding: 1.3vw 1vw;">
                            </div>

                        </div>
                        <p class="goto-register">
                            If you're have an account<span><a href="login.php"> Login</a></span>
                        </p>
                        <button type="submit"
                            class="login-submit">submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="js/loginPage.js"></script>

</body>