

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<?php include("head.php"); ?>
<?php include("connect.php"); ?>
    <body id="body">

		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>


<?php include("connect.php"); ?>
		<main class="site-content" role="main">
<br><br>

<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
  <div class="bg-img bg-img-1"></div>
    <div class="slide-caption" >
                  <div class="caption-content">

                    <button type="button" class="btn btn-warning btn-lg " style="width:300px;height:100px"onclick="window.location.href='indexadmin.php'">ข้อมูลทั่วไปจังหวัดนครปฐม</button><br><br>
                    <button type="button" class="btn btn-danger btn-lg"style="width:300px;height:100px" onclick="window.location.href='admin1.php'">รายชื่อสถานที่ท่องเที่ยว</button><br><br>
                    <button type="button" class="btn btn-info btn-lg" style="width:300px;height:100px" onclick="window.location.href='loginfirst.php'">รายชื่อผู้ดูแลระบบ</button>

                  </div>
              </div>

</div>



		</main>

        <?php include("footer.php"); ?>

<?php include("script2.js"); ?>
    </body>
</html>
