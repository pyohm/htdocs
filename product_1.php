<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>제품 소개</title>

    <style>
        .box_pro1{background-color: rgb(246, 246, 246);box-sizing:content-box; width: 800px; margin:auto; margin-left:34%; margin-top: 5%; }
        .pro1{color: red;}
	</style>

</head>

<body>
<?php include 'Menu.php'; ?>

<?php
$menu = new Menu();
$menu->printMenu();
$menu->printMenuAn("제품 소개(식품 포장)");
$list = array();
?>

<?php $menu->printSide($list); ?>

<div class ="box_pro1">
<ul class="pro">
</br>
    <h2 class ="pro1">냉장냉동</h2>
    </br>
    <p>냉장냉동 식품포장(육류 및 가공,조리 식품)을 포장하는 파우치<br /> 및 LID필름 (TOP, BOTTOM)등으로 고객의 요구에 적합한 다양한<br /> 포장재를 생산하고 있습니다</p>
    <h2>---------------------------------------</h2>
    <li><strong>- 제품특징</strong>: 충격에 강하며 진공포장가능, 자외선/산소에 대한 차단성기능
우수 EPL(Easy peel) 필름 사용으로 개봉 시 편리함</li>
    <br />
    <li><strong>- 재질</strong>: O-NY/PE(LD+LLDPE), PET(NY)/PE(EPL), 기능성 TOP, BOTTOM필름</li>
    <br />
    <li><strong>- 용도</strong>: 튀김류, 만두류, 어육제품, 햄/소시지, 찌개류, 육류</li>
    <br />
</ul>
</div>


</body>
</html>