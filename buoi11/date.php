<html>
<head>
<meta charset="UTF-8">
<title> Get Thứ </title>
<style>
.date-box {
	width: 500px;
	margin: 10px auto;
	// background-color: green;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<!-- Form nhập -->

<div class="date-box">
<p class=" alert alert-success text-center"> Convert Qua Thứ </p>
<form action="date.php" method="post">

<label>Ngày</label><input name="ngay" class="form-control" type="text" placeholder="Nhập Ngày"><br>

<label>Tháng</label><input name="thang" class="form-control" type="text" placeholder="Nhập Tháng"><br>

<label>Năm</label><input name="nam" class="form-control"  type="text" placeholder="Nhập Năm"><br>

<input class="btn btn-success"type="submit" value="submit">
</form>

<?php
if(isset($_POST['ngay']) && isset($_POST['thang']) && isset($_POST['nam'])) {
	$ngay=$_POST['ngay'];
	$thang=$_POST['thang'];
	$nam=$_POST['nam'];
	$date="$thang/$ngay/$nam";
//Function get day of week	
	function LayThu($date)
	{
	$thu =  getDate(strtotime($date));
	return $thu['weekday'];
	}
// Check date //
	if (checkdate ((int)$thang,(int)$ngay,(int)$nam)){
	?>	
	<h2>Ngày (m/d/Y) : <strong style="color: green"><?=$date?></strong> => Thứ:  <span style="color: red"><?=LayThu($date)?><span></h2>
	<?php
	}
	else echo 'Nhập sai, bạn vui lòng nhạp lại!';
}
?>
</div>
</div>
</body>
</html>