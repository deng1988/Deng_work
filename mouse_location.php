<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="ie6 ielt8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 7 ]>    <html lang="ja" class="ie7 ielt8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 8 ]>    <html lang="ja" class="ie8" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ja">
<!--<![endif]--><head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>mouseの操作</title>


<script type="text/javascript">
$(function(){
        $('body').mousemove(function(e) {
            e = e || window.event;
            __xx = e.pageX || e.clientX + document.body.scroolLeft;
            __yy = e.pageY || e.clientY + document.body.scrollTop;
        });
    });
</script>






</head>

<body class="contents_area" id="header">

https://www.cnblogs.com/taleche/p/6065545.html

<p></p>
<p></p>



</body>
</html>
