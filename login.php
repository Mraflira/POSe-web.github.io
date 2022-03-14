<?php
    include 'template/header.php'
?>
<style>
    .header-main {
  background:#115a81;
  padding: 0.5vw 4vw;
}

.header .logo img {
  width: 10vw;
}
/* .form-box {
  width: 30%;
}
.form-box form {
  grid-template-columns: repeat(1, 1fr);
} */
</style>

<body>
    <div class="form">
        <div class="form-box">
            <h1>Login</h1>
            <form>
                <p>
                    <label>Email :</label>
                    <br><input type="text">
                </p>
                <p>
                    <label for="password">Password :</label>
                    <br><input type="password" id="password" />
                    <i class="bi bi-eye-slash" id="togglePassword" style="cursor:pointer;"></i></input>
                </p>
            </form>
            <div class="forgot-password"><a href="#">Forgot Password?</a></div>
            <br><button type="submit" class="submit">Login</button>
        </div>
    </div>

    <?php
    include 'template/footer.php'
?>