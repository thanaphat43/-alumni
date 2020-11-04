<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:rgba(202, 201, 201, 0.932);">

  <img src="index.jpg"alt="" width="1600" height="450" srcset="">
  <div class="row">



</div>
  <?php
        $UrlGet = $_GET['p_id'];
        require("conn.php");
        $sql = "SELECT * FROM customer where p_id='" . $UrlGet . "  ' LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
  <div class="container">
  <ul class="nav nav-pills">

<?php if ($_SESSION['p_id'] != "") { ?>
  <li class="nav-item">
  <a type="button" class="nav-link active btn btn-info" href="update.php?p_id=<?php echo $_SESSION['p_id'] ?>">ชื่อผู้ใช้ : <?php echo $_SESSION['cname'] ?>
    </a>
  </li>
  <li class="nav-item" style="float: right;">
    <a type="button" class="nav-link active  btn btn-success" href="logout.php">Logout</a>
  </li>
<?php } else { ?>
  <li class="nav-item" style="float: right;">
    <a type="button" class="nav-link active btn btn-success" href="login.php">Login</a>
  </li>

<?php    } ?>
<li class="nav-item" style="float: right;">
  <a type="button" class="nav-link active  btn btn-success" href="regis.php">Register</a>
</li>
<li class="nav-item" style="float: right;">
  <a type="button" class="nav-link active  btn btn-success" href="index.php">Home</a>
</li>
</ul>
    <div class="row">
      <div class="col-md-5">
        <!---row1-->
        <br>
        <h3>ข้อมูลศิษย์เก่า</h3>
        
        <br>
        <br>


          <form action="dataupdate.php" method="POST" enctype="multipart/form-data">
          <img src="img/<?php echo $result["img"]; ?>" alt="" width="250" height="250" srcset="" value="<?php echo $result["img"]; ?>">
          <a href="#" class="btn btn-primary btn-lg active" role="button" type="submit"><input type="file" name="img" id="img" accept="image/*"></a>

      </div>
      <!---Endrow1-->
      <div class="col-md-7">
        <!---row2-->
        <br>
        <h3>ข้อมูลส่วนตัว</h3>
        <div class="form-group col-md-3" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input2" style="margin-bottom: 0">คำนำหน้า</label>
            <select class="form-control" id="Input2" name="fname">
              <option>นาย</option>
              <option>นาง</option>
              <option>นางสาว</option>
            </select>
          </div>
        </div>
        <!--คำนำ-->
        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input3" style="margin-bottom: 0">ชื่อ</label>
            <input type="text" class="form-control" id="Input3" placeholder="ชื่อ" name="cname" value="<?php echo $result["cname"]; ?> " required>
          </div>
        </div>
        <!--ชื่อ-->
        <div class="form-group col-md-4" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input3" style="margin-bottom: 0">นามสกุล</label>
            <input type="text" class="form-control" id="Input3" placeholder="นามสกุล" name="lname" value="<?php echo $result["lname"]; ?>" required>
          </div>
        </div>
        <!--นามสกุล-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">ชื่อเล่น</label>
            <input type="text" class="form-control" id="Input3" placeholder="ชื่อเล่น" name="nname" value="<?php echo $result["nname"]; ?>" required>
          </div>
        </div>
        <!---ชื่อเล่น-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">บัตรประชาชน(ใช้ในการเข้าสู่ระบบ)</label>
            <input type="text" class="form-control" id="Input3" placeholder="" name="cardid" value="<?php echo $result["cardid"]; ?>" required>
          </div>
        </div> 

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">วันเกิด</label>
            <input type="date" class="form-control" id="Input3" name="dates" value="<?php echo $result["dates"]; ?>" required>
          </div>
        </div>
        <!--วันเกิด-->

        <div class="form-group col-md-3" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input2" style="margin-bottom: 0">ปีจบการศึกษา</label>
            <select class="form-control" id="Input2" name="years" value="">
              <option><?php echo $result["years"]; ?></option>

            </select>
          </div>
        </div>
        <!--ปีจบการศึกษา-->
        <div class="form-group col-md-12" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">ที่อยู่ปัจจุบัน</label><br>
            <textarea name="caddress" id="form-control" rows="10" cols="60"><?php echo $result["caddress"]; ?></textarea>
          </div>

        </div>
        <!--ที่อยู๋-->

        <div class="form-group col-md-3" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input2" style="margin-bottom: 0">จังหวัด</label>
            <select class="form-control" id="Input2" name="province" value="">
              <option value="<?php echo $result["province"]; ?>"><?php echo $result["province"]; ?></option>

            </select>
          </div>
        </div>
        <!--จังหวัด-->
      <?php
        }
      ?>
      <hr width=150% size=3>
      <?php
      $UrlGet = $_GET['p_id'];
      require("conn.php");
      $sql = "SELECT * FROM workplace where p_id='" . $UrlGet . "  ' LIMIT 1";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      ?>

        <h3>ข้อมูลการทำงาน</h3>
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">ตำแหน่งงาน</label>
            <input type="text" class="form-control" id="form-control" placeholder="ตำแหน่งงาน" name="joblv" value="<?php echo $result["joblv"]; ?>" required>
          </div>
        </div>
        <!--ตำแหน่งงาน-->

        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">ชื่อบริษัท</label>
            <input type="text" class="form-control" id="form-control" placeholder="ชื่อบริษัท" name="jobname" value="<?php echo $result["jobname"]; ?>" required>
          </div>
        </div>
        <!--ชื่อบริษัท-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12 " align="left">
            <label for="Input3" style="margin-bottom: 0">ที่อยู่บริษัท</label><br>
            <textarea name="jobaddress" id="form-control" rows="10" cols="60"><?php echo $result["jobaddress"]; ?></textarea>
          </div>

        </div>
        <!--ที่อยู๋-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input2" style="margin-bottom: 0">จังหวัด</label>
            <select class="form-control" id="Input2" name="jobprov" value="">
              <option value="<?php echo $result["jobprov"]; ?>" selected><?php echo $result["jobprov"]; ?></option>
            </select>
          </div>
        </div>
        <!--จังหวัด-->
      <?php
      }
      ?>

      <?php
      $UrlGet = $_GET['p_id'];
      require("conn.php");
      $sql = "SELECT * FROM contact where p_id='" . $UrlGet . "  ' LIMIT 1";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      ?>

        <hr width=150% size=3>
        <h3>ข้อมูลติดต่อ</h3>
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">เบอร์โทรศัพท์บ้าน</label>
            <input type="text" class="form-control" id="form-control" placeholder="เบอร์โทรศัพท์บ้าน" name="hphone" value="<?php echo $result["hphone"]; ?>" required>
          </div>
        </div>
        <!--เบอร์โทรศัพท์-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">อีเมล์</label>
            <input type="email" class="form-control" id="form-control" placeholder="อีเมล์" name="email" value="<?php echo $result["email"]; ?>" required>
          </div>
        </div>
        <!--อีเมล-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">facebook</label>
            <input type="text" class="form-control" id="form-control" placeholder="facebook" name="facebook" value="<?php echo $result["facebook"]; ?>" required>
          </div>
        </div>
        <!--facebook-->


      </div>
      <!---Endrow2-->

    </div>
    <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" align="center">บันทึก</a>
          </div>
        </div>
  </div>
  </form>
  <footer style="background-color:rgba(230, 148, 152, 0.973);">
    <br>
    <br>


    <h5 align="center">Copyright © 2012 Nakhon Pathom Rajabhat University. All Rights Reserved.</h5>
    <h5 align="center"> Nakhon Pathom Rajabhat University 85 Malaiman Road, Muang, Nakhon Pathom 73000 Thailand</h5>
    <h5 align="center"> Tel : +6634109300 Fax : +6634261048 E-mail : rajabhat@npru.ac.th</h5>
    <br>
    <br>
  </footer>

</body>

</html>
<?php
      }
?>