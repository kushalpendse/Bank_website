<?php 
session_start();
$con=mysqli_connect('localhost','root','','bank');
$name=$_POST['name'];
$q="select * from customers where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title>User <?php echo $name?></title>
	<link rel="shortcut icon" href="images/personal.png">
    <link rel="stylesheet" href="buttons.css">
	
	
	<style>
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}

		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px yellow;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:24px;
			padding:16px;
			text-shadow: 1.5px 1.5px  black;
		}
		
		td{
			font-size:22px;
			text-shadow: 2px 2px  black;
			color: #ffffff;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		body{
			background-image:url("https://cdn.app.compendium.com/uploads/user/e7c690e8-6ff9-102a-ac6d-e4aebca50425/e475f86d-5568-441a-99ce-4f2af15c3623/File/b2d5652bee18cbc79d90542f99526989/istock_689561822.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
		}
  
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
		<h2 style=" font-family:Compacta; font-size: 50px;color:yellow;text-shadow: 2px 2px  black; text-align: left;">
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp DETAILS OF OUR CUSTOMER</h2>
       
	<br><br><br>
    <div class="view">
       <table class="flat-table-1" >
			<tr>
				<th>Name :</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>E-mail :</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Balance :</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="primary_btn">
	<a href="transfer.php">
		<button class="primary_btn"><box2> Transfer To</box2></button>
	</a>
	</div>
	<br>
	<br>

               
    <div class="primary_btn">
		<a href="ministatement.php">
		<button class="primary_btn"><box2>Bank Statement</box2></button>
		</a>
	</div>

	<br>
	<br>

               
    <div class="primary_btn">
		<a href="userinformation.php">
		<button class="primary_btn"><box2>Go Back</box2></button>
		</a>
	</div>
    
	  


    </body>
</html>