<?php
session_start();
?>
<html>

<body>
    <?php require('conn.php'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <?php
    require('conn.php');
    if (isset($_POST['submit'])) {
        $m_username = $_POST['username'];
        $m_password = $_POST['password'];

        $sql = "SELECT * FROM customer,contact WHERE `email` = '" . $m_username . "' AND `cardid` = '" . $m_password . "' ";
        $result = $conn->query($sql);

        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $_SESSION['p_id'] = $row['p_id'];
            $_SESSION['cardid'] = $row['cardid'];
            $_SESSION['cname'] = $row['cname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['email'] = $row['email'];




            if ($_SESSION["email"] == $_POST['username'] && $_SESSION['cardid'] == $_POST['password'] ) {
                Header("Location: index.php");
            } else {
                echo '<script> alert("ชื่อผู้ใช้งานไม่ถูกต้องหรือรหัสผ่านไม่ถูกต้อง")</script>';

            }
        }
    }
    ?>
    <div class="container-fluid p-0">

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <br><br><br><br><br>
    <div class="container col-md-4">
        <div class="card " style="max-width: 25rem;">
            <div class="card-header">
                <center>เข้าสู่ระบบ</center>
            </div>
            <form method="POST" action="">
                <div class="card-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
                        </div>
                        <input name="username" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">รหัสประจำตัวประชาชน</span>
                        </div>
                        <input name="password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <input class="btn btn-primary" type="submit" value="เข้าสู่ระบบ" name="submit">
                </div>
            </form>
        </div>
</body>

</html>