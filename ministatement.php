<?php
session_start();
$con=mysqli_connect('localhost','root','','bank');
$name1=$_SESSION['name'];
$q="select sender,amount from bank_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>BANK STATEMENT</title>
		 <link rel="shortcut icon" href="images/personal.png">
    	 <link rel="stylesheet" href="buttons.css">
	<style>
		
		body{
			background-image:url("https://news.bitcoin.com/wp-content/uploads/2019/12/stockpile88888.jpg");
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background: #940000;
			}
		th{
			color:solid gray;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color: ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
  
}
.flat-table-1 {
			background: yellow;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
	</style>
	</head>
	<body>
	<div class="buttons">
	<a href="index.php">
    <button class="primary_btn" style="float: right;" >HOME</button>
	</a>
</div>
<h1 style="color:yellow;text-shadow: 2px 2px black; text-align:left">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Bank Statement of <?php echo $name1?></h1>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Money</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
		<form action="user.php" method="post">
			<div class="buttons" style="float: center;">
			<br><button class="primary_btn" type="submit" name="name" value="<?php echo $name1 ?>" >GO BACK</button>
			
			</div>
		</form>
		
	</body>
</html>