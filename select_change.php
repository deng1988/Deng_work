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
<title>selectの操作</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(function(){
});

function selectCheck(){
$('.fn-stock-table tr').removeClass();
var data = document.select.data.value;


$('.fn-stock-table tr').each(function() {
	
   var nuim01 = $(this).find("th").text().substr(0,4);
   if(data == "all"){$('.fn-stock-table tr').removeClass();}
   else{
	   if(data != nuim01){
	   $(this).addClass("no-show");
	   }  
    }
	
});
}




</script>

<style>
.fn-stock-table tr.no-show{
	display:none !important;
	}
</style>


</head>

<body class="contents_area" id="header">




        <div class="news-archive-wrapper">
          <p class="news-archive-p01">アーカイブ</p>
          <div class="news-archive-box">
            <form name="select">
              <select name="data" onChange="selectCheck();">
                <option value="all">ー年度を選択ー</option>
                <option value="2018">2018年</option>
                <option value="2017">2017年</option>
                <option value="2016">2016年</option>
              </select>
            </form>
          </div>
        </div>
        
        
        
        <table class="ir-notice-table fn-stock-table">
          <tbody>
            <tr>
              <th>2018.09.11</th>
              <td><a href="/lib/cmn_pdf/ir/stock_info02_20180911.pdf" target="_blank">株主総会 第34回定時株主総会招集ご通知<i class="fa fa-file-pdf-o" aria-hidden="true"></i>(600KB)</a></td>
            </tr>
            <tr>
              <th>2017.09.27</th>
              <td><a href="/lib/cmn_pdf/ir/stock_info02_20170927.pdf" target="_blank">株主総会 第33回定時株主総会決議ご通知<i class="fa fa-file-pdf-o" aria-hidden="true"></i>(97KB)</a></td>
            </tr>

            <tr>
              <th>2017.09.11</th>
              <td><a href="/lib/cmn_pdf/ir/stock_info02_20170911.pdf" target="_blank">株主総会 第33回定時株主総会招集ご通知<i class="fa fa-file-pdf-o" aria-hidden="true"></i>(607KB)</a></td>
            </tr>
          </tbody>
        </table>


</body>
</html>
