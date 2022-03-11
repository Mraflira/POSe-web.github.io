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
.form-box button {
  margin-top:2vw;
}
.form {
  height:53vw;
}
</style>

<body>
    <div class="form">
        <div class="form-box">
            <h1>Sign Up</h1>
            <form>
                <p>
                    <label>Nama Usaha :</label>
                    <br><input type="text">
                </p>
                <p>
                    <label>Nama Pemilik :</label>
                    <br><input type="text">
                </p>
                <p>
                    <label>Email :</label>
                    <br><input type="text">
                </p>
                <p>
                    <label>Nomor Handphone :</label>
                    <br><input type="text">
                </p>
                <p>
                    <label for="password">Password :</label>
                    <br><input type="password" id="password" />
                    <i class="bi bi-eye-slash" id="togglePassword" style="cursor:pointer; color:#8c8c8c;"></i></input>
                </p>
                <p>
                    <label for="password">Confirm Password :</label>
                    <br><input type="password" id="password2" />
                    <i class="bi2 bi-eye-slash" id="togglePassword2" style="cursor:pointer; color:#8c8c8c;"></i>
                </p>
            </form>
            <div class="term-condition">
                <input type="checkbox" required>
                <span>I have read & agree to POSe Terms & Condition</span>
            </div>
            <button type="submit" class="submit">Sign Up</button>
        </div>
    </div>

    <?php
    include 'template/footer.php'
?>