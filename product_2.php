<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>제품 소개</title>

    <style>
        
        .box_pro2{background-color:rgb(246, 246, 246);box-sizing:content-box; width: 800px; margin:auto; margin-left:34%; margin-top: 5%; }
        .pic{position: relative;}
        .pro2{color: red;}
	</style>

</head>

<body>
<?php include 'Menu.php'; ?>

<?php
$menu = new Menu();
$menu->printMenu();
$menu->printMenuAn("제품 소개(생활/위생)");
$list = array();
?>

<?php $menu->printSide($list); ?>


<div class ="box_pro2">
    <ul class="pro">
</br>
        <h2 class ="pro2">생활용품</h2>
        </br>
        <p>액상형 파우치는 터짐, 누액에 대한 강도가 매우 우수하며 SPOUT</br> CAP 부착으로 재사용이 가능하여 실용적 입니다.</p>
        <img src = "img\product.gif" class = "pic">
        <h2>-------------------------------------------</h2>
        <li><strong>- 제품특징</strong>: 고강도필름 적용 품질보증, 생산성향상 위한 특수레진 설계</li>
        <br />
        <li><strong>- 재질</strong>: PET(NY)/LLDPE, PET/NY/LLDPE</li>
        <br />
        <li><strong>- 용도</strong>: 섬유세제, 섬유유연제, 주방세제, 분말세탁세제, 표백제</li>
        <br />
    </ul>
    
</div>


</body>
</html>