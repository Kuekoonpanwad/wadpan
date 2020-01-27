<!DOCTYPE html>
<html lang="en" class="no-js">
<?php include("head.php"); ?>
<?php include("connect.php"); ?>
    <body id="body">

		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
<?php include("headeradmin.php"); ?>


<main class="site-content" role="main">


<br><br>
<div class="container">
 <br><br>
<center><h2 class="font-weight-normal">ข้อมูลสถานที่ท่องเที่ยวทั้งหมด</h2></center>


<br>


<br>

<?php
   include("connect.php");
  $count = 0;
$sql = "SELECT tourist.LocationID,tourist.NameLocation,locationtype.Name  FROM tourist,locationtype WHERE tourist.TypeID=locationtype.TypeID";




  $query = mysqli_query($conn,$sql);


?>


<form method="post">
<div class="table-responsive-sm">
<table class="table table-hover table ">
<thead >
<tr align="center" class="table-warning">


 <th scope="col"  >ลำดับที่</th>
 <th scope="col">ประเภทสถานที่ท่องเที่ยว</th>
  <th >ชื่อสถานที่ท่องเที่ยว</th>

</tr>
</thead>

<tbody>
  <?php
  if($query){


  while($row=mysqli_fetch_array($query))
  {
    $count++;
  ?>
<tr>
          <td align="center"><?php echo $count ?></td>
          <td><?php echo $row["Name"] ?></td>
          <td><?php echo $row["NameLocation"] ?></td>






<td align="right" ><a  class='btn btn-info btn-lg'href="edit2.php?LocationID=<?php echo $row["LocationID"];?>">แก้ไข</a></td>


        <td ><a class='btn btn-danger btn-lg' href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='delete2.php?NameLocation=<?php echo $row["NameLocation"];?>';}">ลบ</a></td>

  <?php
}
}
  ?>
</tr>
</tbody>
</table>
<?php



?>
</div>
</form>

</div>

</main>
<?php include("footer.php"); ?>
<?php include("script2.js"); ?>


    </body>
</html>
