<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="ie6 ielt8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 7 ]>    <html lang="ja" class="ie7 ielt8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8 ]>    <html lang="ja" class="ie8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ja">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>すべての文字にspanで組みます</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="lib/cmn_js/rellax.js"></script>
<script>
$(function(){
	  var rellax01 = new Rellax('.paa-box:nth-child(2n)', {
           speed: -2
      });
	  var rellax02 = new Rellax('.paa-box:nth-child(2n + 1)', {
           speed: -6
      });
      var rellax = new Rellax('.paa-box:nth-child(2n) p', {
		  speed: 2,
		  horizontal: true
      });
	  var rellax = new Rellax('.paa-box:nth-child(2n + 1) p', {
		  speed: 2,
		  horizontal: true
      });
 });	  
</script>
<style>
body {
	padding: 0 !important;
	margin: 0 auto !important;
}
p {
	margin: 0 !important;
	line-height: 1 !important;
	box-sizing: border-box;
	width:20px;
	background-color:#efefef;
}
.paa-box {
	width: 100%;
	box-sizing: border-box;
	height: 100px;
	margin: 0 auto 20px;
	background-color: #efefef;
}
.paa-box.paa-box01 {
	background-color: #D70003;
}
.paa-box.paa-box02 {
	background-color: #34C717;
}
.paa-box.paa-box03 {
	background-color: #ADE500;
}
.paa-box.paa-box04 {
	background-color: #D40097;
}
.paa-box.paa-box05 {
	background-color: #AC4B00;
}
</style>
</head>

<body class="contents_area" id="header">
<div>
  <div class="paa-box paa-box01">
    <p data-rellax-speed="-10">01</p>
  </div>
  <div class="paa-box paa-box02">
    <p data-rellax-speed="10">02</p>
  </div>
  <div class="paa-box paa-box03">
    <p data-rellax-speed="10">03</p>
  </div>
  <div class="paa-box paa-box04">
    <p data-rellax-speed="10">04</p>
  </div>
  <div class="paa-box paa-box05">
    <p data-rellax-speed="10">05</p>
  </div>
  <div class="paa-box paa-box01">
    <p data-rellax-speed="10">01</p>
  </div>
  <div class="paa-box paa-box02">
    <p data-rellax-speed="10">02</p>
  </div>
  <div class="paa-box paa-box03">
    <p data-rellax-speed="10">03</p>
  </div>
  <div class="paa-box paa-box04">
    <p data-rellax-speed="10">04</p>
  </div>
  <div class="paa-box paa-box05">
    <p data-rellax-speed="10">05</p>
  </div>
  <div class="paa-box paa-box01">
    <p data-rellax-speed="10">01</p>
  </div>
  <div class="paa-box paa-box02">
    <p data-rellax-speed="10">02</p>
  </div>
  <div class="paa-box paa-box03">
    <p data-rellax-speed="10">03</p>
  </div>
  <div class="paa-box paa-box04">
    <p data-rellax-speed="10">04</p>
  </div>
  <div class="paa-box paa-box05">
    <p data-rellax-speed="10">05</p>
  </div>
  <div class="paa-box paa-box01">
    <p data-rellax-speed="10">01</p>
  </div>
  <div class="paa-box paa-box02">
    <p data-rellax-speed="10">02</p>
  </div>
  <div class="paa-box paa-box03">
    <p data-rellax-speed="10">03</p>
  </div>
  <div class="paa-box paa-box04">
    <p data-rellax-speed="10">04</p>
  </div>
  <div class="paa-box paa-box05">
    <p data-rellax-speed="10">05</p>
  </div>
</div>
</body>
</html>
