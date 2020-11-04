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
  <div class="container">

    <div class="row">

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

    </div>
    <div class="row">
      <div class="col-md-5">
        <!---row1-->
        <br>
        <h3>แบบฟอร์มลงทะเบียนศิษย์เก่า</h3>
        <img src="2.PNG" alt="" width="250" height="250" srcset="">
        <br>
        <br>

        <form action="add.php" method="POST" enctype="multipart/form-data">
          <h4>อัพโหลดรูปตัวเอง</h4>
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
            <input type="text" class="form-control" id="Input3" placeholder="ชื่อ" name="cname" value="" required>
          </div>
        </div>
        <!--ชื่อ-->
        <div class="form-group col-md-4" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input3" style="margin-bottom: 0">นามสกุล</label>
            <input type="text" class="form-control" id="Input3" placeholder="นามสกุล" name="lname" value="" required>
          </div>
        </div>
        <!--นามสกุล-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">ชื่อเล่น</label>
            <input type="text" class="form-control" id="Input3" placeholder="ชื่อเล่น" name="nname" value="" required>
          </div>
        </div>
        <!---ชื่อเล่น-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">บัตรประชาชน(ใช้ในการเข้าสู่ระบบ)</label>
            <input type="text" class="form-control" id="Input3" placeholder="" name="cardname" value="" required>
          </div>
        </div>

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">วันเกิด</label>
            <input type="date" class="form-control" id="Input3" name="dates" value="" required>
          </div>
        </div>
        <!--วันเกิด-->

        <div class="form-group col-md-3" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input2" style="margin-bottom: 0">ปีจบการศึกษา</label>
            <select class="form-control" id="Input2" name="years" value="">
              <option>2563</option>
              <option>2562</option>
              <option>2561</option>
              <option>2560</option>
              <option>2559</option>
              <option>2558</option>
              <option>2557</option>
              <option>2556</option>
              <option>2555</option>
              <option>2554</option>
              <option>2553</option>
            </select>
          </div>
        </div>
        <!--ปีจบการศึกษา-->
        <div class="form-group col-md-12" style="margin-bottom: 0">
          <div class="form-group " align="left">
            <label for="Input3" style="margin-bottom: 0">ที่อยู่ปัจจุบัน</label><br>
            <textarea name="caddress" id="form-control" rows="10" cols="60"></textarea>
          </div>

        </div>
        <!--ที่อยู๋-->

        <div class="form-group col-md-3" style="margin-bottom: 0">
          <div class="form-group" align="left">
            <label for="Input2" style="margin-bottom: 0">จังหวัด</label>
            <select class="form-control" id="Input2" name="province" value="">
              <option value="" selected>--------- เลือกจังหวัด ---------</option>
              <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
              <option value="กระบี่">กระบี่ </option>
              <option value="กาญจนบุรี">กาญจนบุรี </option>
              <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
              <option value="กำแพงเพชร">กำแพงเพชร </option>
              <option value="ขอนแก่น">ขอนแก่น</option>
              <option value="จันทบุรี">จันทบุรี</option>
              <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
              <option value="ชัยนาท">ชัยนาท </option>
              <option value="ชัยภูมิ">ชัยภูมิ </option>
              <option value="ชุมพร">ชุมพร </option>
              <option value="ชลบุรี">ชลบุรี </option>
              <option value="เชียงใหม่">เชียงใหม่ </option>
              <option value="เชียงราย">เชียงราย </option>
              <option value="ตรัง">ตรัง </option>
              <option value="ตราด">ตราด </option>
              <option value="ตาก">ตาก </option>
              <option value="นครนายก">นครนายก </option>
              <option value="นครปฐม">นครปฐม </option>
              <option value="นครพนม">นครพนม </option>
              <option value="นครราชสีมา">นครราชสีมา </option>
              <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
              <option value="นครสวรรค์">นครสวรรค์ </option>
              <option value="นราธิวาส">นราธิวาส </option>
              <option value="น่าน">น่าน </option>
              <option value="นนทบุรี">นนทบุรี </option>
              <option value="บึงกาฬ">บึงกาฬ</option>
              <option value="บุรีรัมย์">บุรีรัมย์</option>
              <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
              <option value="ปทุมธานี">ปทุมธานี </option>
              <option value="ปราจีนบุรี">ปราจีนบุรี </option>
              <option value="ปัตตานี">ปัตตานี </option>
              <option value="พะเยา">พะเยา </option>
              <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
              <option value="พังงา">พังงา </option>
              <option value="พิจิตร">พิจิตร </option>
              <option value="พิษณุโลก">พิษณุโลก </option>
              <option value="เพชรบุรี">เพชรบุรี </option>
              <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
              <option value="แพร่">แพร่ </option>
              <option value="พัทลุง">พัทลุง </option>
              <option value="ภูเก็ต">ภูเก็ต </option>
              <option value="มหาสารคาม">มหาสารคาม </option>
              <option value="มุกดาหาร">มุกดาหาร </option>
              <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
              <option value="ยโสธร">ยโสธร </option>
              <option value="ยะลา">ยะลา </option>
              <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
              <option value="ระนอง">ระนอง </option>
              <option value="ระยอง">ระยอง </option>
              <option value="ราชบุรี">ราชบุรี</option>
              <option value="ลพบุรี">ลพบุรี </option>
              <option value="ลำปาง">ลำปาง </option>
              <option value="ลำพูน">ลำพูน </option>
              <option value="เลย">เลย </option>
              <option value="ศรีสะเกษ">ศรีสะเกษ</option>
              <option value="สกลนคร">สกลนคร</option>
              <option value="สงขลา">สงขลา </option>
              <option value="สมุทรสาคร">สมุทรสาคร </option>
              <option value="สมุทรปราการ">สมุทรปราการ </option>
              <option value="สมุทรสงคราม">สมุทรสงคราม </option>
              <option value="สระแก้ว">สระแก้ว </option>
              <option value="สระบุรี">สระบุรี </option>
              <option value="สิงห์บุรี">สิงห์บุรี </option>
              <option value="สุโขทัย">สุโขทัย </option>
              <option value="สุพรรณบุรี">สุพรรณบุรี </option>
              <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
              <option value="สุรินทร์">สุรินทร์ </option>
              <option value="สตูล">สตูล </option>
              <option value="หนองคาย">หนองคาย </option>
              <option value="หนองบัวลำภู">หนองบัวลำภู </option>
              <option value="อำนาจเจริญ">อำนาจเจริญ </option>
              <option value="อุดรธานี">อุดรธานี </option>
              <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
              <option value="อุทัยธานี">อุทัยธานี </option>
              <option value="อุบลราชธานี">อุบลราชธานี</option>
              <option value="อ่างทอง">อ่างทอง </option>
              <option value="อื่นๆ">อื่นๆ</option>
            </select>
          </div>
        </div>
        <!--จังหวัด-->

        <hr width=150% size=3>

        <h3>ข้อมูลส่วนตัว</h3>
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">ตำแหน่งงาน</label>
            <input type="text" class="form-control" id="form-control" placeholder="ตำแหน่งงาน" name="joblv" value="" required>
          </div>
        </div>
        <!--ตำแหน่งงาน-->

        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">ชื่อบริษัท</label>
            <input type="text" class="form-control" id="form-control" placeholder="ชื่อบริษัท" name="jobname" value="" required>
          </div>
        </div>
        <!--ชื่อบริษัท-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12 " align="left">
            <label for="Input3" style="margin-bottom: 0">ที่อยู่บริษัท</label><br>
            <textarea name="jobaddress" id="form-control" rows="10" cols="60"></textarea>
          </div>

        </div>
        <!--ที่อยู๋-->

        <div class="form-group col-md-5" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input2" style="margin-bottom: 0">จังหวัด</label>
            <select class="form-control" id="Input2" name="jobprov" value="">
              <option value="" selected>--------- เลือกจังหวัด ---------</option>
              <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
              <option value="กระบี่">กระบี่ </option>
              <option value="กาญจนบุรี">กาญจนบุรี </option>
              <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
              <option value="กำแพงเพชร">กำแพงเพชร </option>
              <option value="ขอนแก่น">ขอนแก่น</option>
              <option value="จันทบุรี">จันทบุรี</option>
              <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
              <option value="ชัยนาท">ชัยนาท </option>
              <option value="ชัยภูมิ">ชัยภูมิ </option>
              <option value="ชุมพร">ชุมพร </option>
              <option value="ชลบุรี">ชลบุรี </option>
              <option value="เชียงใหม่">เชียงใหม่ </option>
              <option value="เชียงราย">เชียงราย </option>
              <option value="ตรัง">ตรัง </option>
              <option value="ตราด">ตราด </option>
              <option value="ตาก">ตาก </option>
              <option value="นครนายก">นครนายก </option>
              <option value="นครปฐม">นครปฐม </option>
              <option value="นครพนม">นครพนม </option>
              <option value="นครราชสีมา">นครราชสีมา </option>
              <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
              <option value="นครสวรรค์">นครสวรรค์ </option>
              <option value="นราธิวาส">นราธิวาส </option>
              <option value="น่าน">น่าน </option>
              <option value="นนทบุรี">นนทบุรี </option>
              <option value="บึงกาฬ">บึงกาฬ</option>
              <option value="บุรีรัมย์">บุรีรัมย์</option>
              <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
              <option value="ปทุมธานี">ปทุมธานี </option>
              <option value="ปราจีนบุรี">ปราจีนบุรี </option>
              <option value="ปัตตานี">ปัตตานี </option>
              <option value="พะเยา">พะเยา </option>
              <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
              <option value="พังงา">พังงา </option>
              <option value="พิจิตร">พิจิตร </option>
              <option value="พิษณุโลก">พิษณุโลก </option>
              <option value="เพชรบุรี">เพชรบุรี </option>
              <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
              <option value="แพร่">แพร่ </option>
              <option value="พัทลุง">พัทลุง </option>
              <option value="ภูเก็ต">ภูเก็ต </option>
              <option value="มหาสารคาม">มหาสารคาม </option>
              <option value="มุกดาหาร">มุกดาหาร </option>
              <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
              <option value="ยโสธร">ยโสธร </option>
              <option value="ยะลา">ยะลา </option>
              <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
              <option value="ระนอง">ระนอง </option>
              <option value="ระยอง">ระยอง </option>
              <option value="ราชบุรี">ราชบุรี</option>
              <option value="ลพบุรี">ลพบุรี </option>
              <option value="ลำปาง">ลำปาง </option>
              <option value="ลำพูน">ลำพูน </option>
              <option value="เลย">เลย </option>
              <option value="ศรีสะเกษ">ศรีสะเกษ</option>
              <option value="สกลนคร">สกลนคร</option>
              <option value="สงขลา">สงขลา </option>
              <option value="สมุทรสาคร">สมุทรสาคร </option>
              <option value="สมุทรปราการ">สมุทรปราการ </option>
              <option value="สมุทรสงคราม">สมุทรสงคราม </option>
              <option value="สระแก้ว">สระแก้ว </option>
              <option value="สระบุรี">สระบุรี </option>
              <option value="สิงห์บุรี">สิงห์บุรี </option>
              <option value="สุโขทัย">สุโขทัย </option>
              <option value="สุพรรณบุรี">สุพรรณบุรี </option>
              <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
              <option value="สุรินทร์">สุรินทร์ </option>
              <option value="สตูล">สตูล </option>
              <option value="หนองคาย">หนองคาย </option>
              <option value="หนองบัวลำภู">หนองบัวลำภู </option>
              <option value="อำนาจเจริญ">อำนาจเจริญ </option>
              <option value="อุดรธานี">อุดรธานี </option>
              <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
              <option value="อุทัยธานี">อุทัยธานี </option>
              <option value="อุบลราชธานี">อุบลราชธานี</option>
              <option value="อ่างทอง">อ่างทอง </option>
              <option value="อื่นๆ">อื่นๆ</option>
            </select>
          </div>
        </div>
        <!--จังหวัด-->

        <hr width=150% size=3>
        <h1>ข้อมูลติดต่อ</h1>
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">เบอร์โทรศัพท์บ้าน</label>
            <input type="text" class="form-control" id="form-control" placeholder="เบอร์โทรศัพท์บ้าน" name="hphone" value="" required>
          </div>
        </div>
        <!--เบอร์โทรศัพท์-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">อีเมล์(ใช้ในการเข้าสู่ระบบ)</label>
            <input type="email" class="form-control" id="form-control" placeholder="อีเมล์" name="email" value="" required>
          </div>
        </div>
        <!--อีเมล-->
        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <label for="Input3" style="margin-bottom: 0">facebook</label>
            <input type="text" class="form-control" id="form-control" placeholder="facebook" name="facebook" value="" required>
          </div>
        </div>
        <!--facebook-->

        <div class="form-group col-md-8" style="margin-bottom: 0">
          <div class="form-group col-md-12" align="left">
            <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" align="center">ลงทะเบียน</a>
          </div>
        </div>
        <!--facebook-->







      </div>
      <!---Endrow2-->

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