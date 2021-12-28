<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css\question.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>오시는 길</title>

    <style>
        .wrapper{
			width: 800px; margin-right: 30%; 
		}
		div{
			text-align: center;
			overflow: hidden;
		}
		.box {
			box-sizing: content-box;
			width:80%;
			margin: auto;
		}
		ul.contact {
        	display: table;
			margin-left: auto;
        	margin-right: auto;
			font-size: 25px;
      }
	  
    h1{ font-size:18px;  padding:20px; }
    
    </style>

</head>

<body>
<?php include 'Menu.php'; ?>

<?php
$menu = new Menu();
$menu->printMenu();
$menu->printMenuAn("오시는 길");
$list = array();
?>

<?php $menu->printSide($list); ?>
<br />
<div class="wrapper">
	<div class="box">
		<iframe src ="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.95756255422!2d126.97484695110522!3d37.57961697969614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2c74aeddea1%3A0x8b3046532cc715f6!2z6rK967O16raB!5e0!3m2!1sko!2skr!4v1638323740699!5m2!1sko!2skr"
		 width="600" height="450" style="border:0;"></iframe>
	</div>



<ul class ="contact">
	<li><Strong>Address</Strong>: </li>
	<li><Strong>Contact</Strong>: </li>
	<li><Strong>E-mail</Strong>: </li>
</ul>
</div>

</body>
</html>