<?php
$connect = mysqli_connect("localhost", "root", "", "testing1");
$record_per_page = 3;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;

$query = "SELECT * FROM tbl_student1 order by id DESC LIMIT $start_from, $record_per_page";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html>
 <head>
  <title>PAINTINGS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
<style>
.gooter {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 18%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>

  <style>
  a {
   padding:8px 16px;
   border:1px solid #ccc;
   color: #3399ff;
   font-weight:bold;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <h3 align="center">PAINTINGS</h3><br />
   <div class="table-responsive">
    <table class="table table-bordered">
     <tr>
      <td>Name</td>
      <td>Price</td>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
     ?>
     <tr>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
     </tr>
     <?php
     }
     ?>
    </table>
    <div align="center">
    <br />
    <?php
    $page_query = "SELECT * FROM tbl_student1 ORDER BY id DESC";
    $page_result = mysqli_query($connect, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 1)
    {
     $start_loop = $total_pages - 0;
    }
    $end_loop = $start_loop + 1;
    if($page > 1)
    {
     echo "<a href='pagination1.php?page=1'>First</a>";
     echo "<a href='pagination1.php?page=".($page - 0)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a href='pagination1.php?page=".$i."'>".$i."</a>";
    }
    if($page <= $end_loop)
    {
     echo "<a href='pagination1.php?page=".($page + 1)."'>>></a>";
     echo "<a href='pagination1.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>
    </div>
    <br /><br />
   </div>
  </div>

  <div class="gooter">
  	<p><h4> <h4></p>
 <p><a href="About us.php">About us</a></p>
<p><h4>Communication<h4></p>
<p>+2651064732|Arts@gmail.com</p>
<p><h8>Copyright © www.Arts.com 20020-2021<h8></p>
<p><a href="images/1.png" target="_blank">
  <img src="images/1.png" alt="1"</p>
</div>
 </body>
</html>