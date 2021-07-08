<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Dynamic Form</title>
<script src="script.js">
</script>
</head>
<body>

<div class="divcenter">
<form name="form1" class="form1">
<input class="titlebutton" type="button" value="+ Titulo" id="titleButton">
<input class="carbutton" type="button" value="+ Carro" id="carButton">
<input class="variationbutton" type="button" value="+ Variação" id="varButton"">
</form>
<input class="countstyle" id="charNum" value="Character Count: 0">
<form class="form2" name="form2"action="/TitleList.php" method="POST">
<div class="divtitle" id="my_divtitle"></div>
<br>
<div class="divcar" id="my_divcar"></div>
<br>
<div class="divvariation" id="my_divvariation"></div>
<br>
<div class="buttonHolder">
<button class="submitbutton" onclick="window.location.href='/TitleList.php'">Submit</button>
</div>
</div>
</body>
<footer>
    <p class="copyright">© Developed by: Lftbrito 2021</p>
</footer>