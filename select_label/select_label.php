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
<title>selectのCSS</title>

<style type="text/css">
	
.res-form-p04 {
    padding: 5px 10px;
    background-color: #FCFCFC;
    border: 1px solid #DCDCDC;
    box-sizing: border-box;
    border-radius: 300px;
    max-width: 500px;
}
.select-wrapper {
    overflow: hidden;
    display: block;
    background-color: #FCFCFC;
    border: 1px solid #FCFCFC;
    box-sizing: border-box;
    position: relative;
    cursor: pointer;
}

.select-wrapper::after {
    width: 40px;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    content: "▼";
    background-color: red;
     pointer-events: none;

     display: -webkit-inline-box;
display: -ms-inline-flexbox;
display: inline-flex;

/*-webkit-box-align: center;
-ms-flex-align: center;*/
align-items: center;
/*-webkit-box-pack: center;
-ms-flex-pack: center;*/
justify-content: center;
}

.res-form-p04 select {
    font-size: 16px;
    padding: 5px;
    box-sizing: border-box;
    border: 1px solid #FCFCFC;
    background-color: #FCFCFC;
    width: 100%;
    cursor: pointer;
    position: relative;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none !important;
    -moz-outline: none !important;
    -webkit-outline: none !important;
}



.res-form-p05{
		padding: 0;
	margin: 0;
	background-color: #efefef;
	height: 300px;
	width: 45%;
	max-width: 300px;
/*display: -ms-inline-flexbox;
display: inline-flex;*/
    display: flex;
	justify-content: center;
	align-items: center;
	box-sizing: border-box;

}
.res-form-p05.de{
	display: inline-flex;
}

.res-form-p05:last-child{
	height: 200px;
}

</style>


</head>

<body class="contents_area" id="header">



<p class="res-form-p04">
<label class="select-wrapper">
<select name="pref">
<option value="0" selected="">▼選択</option>
<option value="1">北海道</option>
<option value="2">青森県</option>
<option value="3">岩手県</option>
<option value="4">宮城県</option>
<option value="5">秋田県</option>
</select>             
</label>
</p>
 

<p class="res-form-p05">
	ダミーテキスト
</p>
<p class="res-form-p05">
	ダミーテキスト
</p>


<p class="res-form-p05 de">
	ダミーテキスト
</p>

<p class="res-form-p05 de">
	ダミーテキスト
</p>





</body>
</html>
