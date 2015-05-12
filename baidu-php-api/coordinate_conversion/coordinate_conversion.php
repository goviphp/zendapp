<?php
include("../functions.php");
include("../config.php");

$url = "http://api.map.baidu.com/geoconv/v1/?coords=114.174171,22.349779;114.174171,22.349779&from=1&to=5&ak=".$api_key;

 $data = httpGetWithErros($url);
$data = json_decode($data);
//print_r($data); exit;
?>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html,#map {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
		#l-map{height:100%;width:78%;float:left;border-right:2px solid #bcbcbc;}
		#r-result{height:100%;width:20%;float:left;}
	</style>
        <script
            src="http://api.map.baidu.com/api?v=1.5&ak=<?=$api_key?>"
            type="text/javascript"
        >
        </script>
    </head>
    <body>
	  <div style="width:100%; height:100%" id="map"></div>
        <script type='text/javascript'>
		
		// 百度地图API功能
	var map = new BMap.Map("map");
	var point = new BMap.Point(114.174171,22.349779);
	map.centerAndZoom(point, 10);
	
	// 编写自定义函数,创建标注
	function addMarker(point){
	  var marker = new BMap.Marker(point);
	  map.addOverlay(marker);
	}
	
	<?php 	
			foreach($data->result as $result)
			{		
	?>
		var point = new BMap.Point(<?=$result->x?>, <?=$result->y?>);
		addMarker(point);
<?php
			 }
			 ?>
		
        </script>
    </body>
</html>