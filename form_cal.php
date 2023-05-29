<?php
    $a=$b=$cal=$result='';
    if (!empty($_GET)){
        if (isset($_GET['a']))
        {
            $a =$_GET['a'];
        }
        if (isset($_GET['b']))
        {
            $b =$_GET['b'];
        }
        if (isset($_GET['cal']))
        {
            $cal =$_GET['cal'];
        }
    }
    switch($cal){
        case'+':
            $result= $a+$b;
            break;
        case'-':
            $result= $a-$b;
            break;
        case'*':
            $result= $a*$b;
            break;
        case'/':
            $result= $a/$b;
            break;
    }
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculator - Online</title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
	<style type="text/css">
        body{
          
        }
		table{
			background-color: #ABB1BA;
			margin: auto;
		}
		#result{
			width: 416px;
			height: 70px;
		}
		.btn{
			width: 80px;
			height: 80px;
		}
		#equ{
			width: 80px;
			height: 164px;
		}
		#zero{
			width: 164px;
			height: 80px;
		}
	</style>
</head>
<body>
    <form action="" method="GET" style="background-color: rgb(136, 139, 178);padding:30px; margin:15px;">
        <input type="number" name="a" placeholder="Enter A" value=<?=$a?>>
        <input type="number" name="b" placeholder="Enter B" value=<?=$b?>>
        <select name="cal" required="true">
            <option value="">Phép tính</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Submit</button>
        <p>Kết Quả: <?=$result?></p>
    </form>
</body>
</html>