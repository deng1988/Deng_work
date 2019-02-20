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
<script src="lib/cmn_js/jquery-2.2.4.js"></script>
<link rel="stylesheet" type="text/css" href="lib/cmn_js/YTPlayer-master/jquery.mb.YTPlayer.min.css">
<script src="lib/cmn_js/YTPlayer-master/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript">


$(document).ready(function(){
	$("#bgVideo").YTPlayer();

});

</script>
<style>
body {
	padding: 0;
	margin: 0;
}
.txt-box-wrapper {
	width: 100%;
	height: 100vh;
	background-color: rgba(255,121,123,0.30);
	margin: 0 !important;
	padding: 0 !important;
	box-sizing: border-box;
	position: relative;
}
.txt-box {
	position: absolute;
	left: 50%;
	top: 50%;
	width: 100%;
	max-width: 600px;
	text-align: center;
	padding: 100px 10px;
	box-sizing: border-box;
	background-color: rgba(255,255,255,0.40);
	transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-webkit-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
}

.table{
	width:100%;
	box-sizing:border-box;
	background-color:#FFFFFF;
	table-layout:fixed;
	border-collapse:collapse;
	margin-top:30px;
	}

.table th,
.table td{
	box-sizing:border-box;
	border-right:1px solid #000000;
	border-bottom:1px solid #000000;
	}	

</style>
</head>

<body class="contents_area" id="header">
<div id="bgVideo" data-property="{
  videoURL:'https://www.youtube.com/watch?v=Edx5ynwZjUU',
  mute: false,
  showControls: false
}"><!--jquery.mb.YTPlayer--></div>
<div class="txt-box-wrapper">
  <div class="txt-box">
    <p class="h1">タイトル</p>
  </div>
  
</div>

<table class="table" style="background-color:#F8F8F8; border:1px solid #000000">
    <tbody>
      <tr>
        <th>プロパティ</th>
        <th>内容</th>
        <th>初期値</th>
        <th>パラメータ</th>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">videoURL</code></td>
        <td>表示するYouTubeのURL（短縮 , ID可）</td>
        <td></td>
        <td>URL</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">containment</code></td>
        <td>背景にYouTubeを表示する要素（’select’で自身）</td>
        <td>‘body’</td>
        <td>jQuery セレクタ / ‘selef’</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">mute</code></td>
        <td>音声オフ</td>
        <td>false</td>
        <td>true / false</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">vol</code></td>
        <td>音量（<code class=" tag-highlight language-markup">mute</code>がfalse時のみ）</td>
        <td></td>
        <td>数値（1～100）</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">showControls</code></td>
        <td>YouTubeコントローラ</td>
        <td>true</td>
        <td>true / false</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">loop</code></td>
        <td>ループ回数</td>
        <td>true</td>
        <td>true / false / 数値</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">align</code></td>
        <td>配置</td>
        <td>‘center,center’</td>
        <td>下図参照</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">startAt</code></td>
        <td>開始点</td>
        <td>0</td>
        <td>数値（秒で指定）</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">stopAt</code></td>
        <td>停止点（0で最後まで）</td>
        <td>0</td>
        <td>数値（秒で指定）</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">quality</code></td>
        <td>品質</td>
        <td>‘default’</td>
        <td>‘default’ / ‘small’ / ‘medium’ / ‘large’ / ‘hd720’ / ‘hd1080’ / ‘highres’</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">autoPlay</code></td>
        <td>自動再生</td>
        <td>true</td>
        <td>true / false</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">addRaster</code></td>
        <td>ラスターイメージの表示</td>
        <td>false</td>
        <td>true / false</td>
      </tr>
      <tr>
        <td><code class=" tag-highlight language-markup">opacity</code></td>
        <td>透過度</td>
        <td>1</td>
        <td>数値（0～1）</td>
      </tr>
    </tbody>
  </table>

</body>
</html>
