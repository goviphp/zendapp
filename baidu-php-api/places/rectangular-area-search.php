<?php
include("../functions.php");
include("../config.php");

$bounds = "39.915,116.404,39.975,116.414";

$url = "http://api.map.baidu.com/place/v2/search?ak=".$api_key."&output=json&query=%E9%93%B6%E8%A1%8C&page_size=10&page_num=0&scope=1&bounds=".$bounds;


 $data = httpGetWithErros($url);
$data = json_decode($data);

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
            src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $api_key;  ?>"
            type="text/javascript"
        >
        </script>
    </head>
    <body>
	  <div style="width:100%; height:100%" id="map"></div>
        <script type='text/javascript'>
		
		// 百度地图API功能
	var map = new BMap.Map("map");
	var point = new BMap.Point(116.43171, 39.87203);

	map.centerAndZoom(point, 10);
	// 编写自定义函数,创建标注
	function addMarker(point){
	  var marker = new BMap.Marker(point);
	  map.addOverlay(marker);
	}



	// 随机向地图添加25个标注
	var bounds = map.getBounds();
	var sw = bounds.getSouthWest();
	var ne = bounds.getNorthEast();
	var lngSpan = Math.abs(sw.lng - ne.lng);
	var latSpan = Math.abs(ne.lat - sw.lat);
	/*for (var i = 0; i < 25; i ++) {
		var point = new BMap.Point(sw.lng + lngSpan * (Math.random() * 0.7), ne.lat - latSpan * (Math.random() * 0.7));
		addMarker(point);
	}*/
	
	
	<?php 
				foreach($data->results as $result)
				{
				$location = $result->location;
			
			?>
		var point = new BMap.Point(<?php echo $location->lng; ?>, <?php echo $location->lat; ?>);
		  var marker = new BMap.Marker(point);
	  map.addOverlay(marker);
		
<?php
			 }
			 ?>
		
        </script>
    </body>
</html>