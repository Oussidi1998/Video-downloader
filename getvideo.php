
<?php

	if (isset($_POST['down'])) {
		$url = $_POST['url'];
		$id_video= explode("?v=", $url);
		$id_video = substr($id_video[1],0,11);

		/*echo "<pre>";
		print_r($id_video);
		echo "</pre>";


		echo "$id_video";*/

		$data = file_get_contents("https://www.youtube.com/get_video_info?video_id=$id_video ");


		parse_str($data,$arr);


		/*echo "<pre>";
		print_r($arr);
		echo "</pre>";*/

		// for url
		$urls =explode(",",$arr['url_encoded_fmt_stream_map']);


/*
		foreach ($urls as $value) {
			parse_str($value,$format);
			echo "<pre>",print_r($format),"</pre>";
		}*/





	}
 ?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>youtube video donwload</title>
 	<link rel="stylesheet" type="text/css" href="../Biblio/bootstrap.min.css">
 </head>
 <body>
 	<div class="container" style="margin-top: 200px">
 		<div class="row">
 			<div class="col-md-6 col-md-offset-3">
 				<div class="panel panel-primary text-center">
 					<div class="panel-heading">
 						<h3 class="panel-title"><?=$arr['title'] ?></h3>
 					</div>
 					<div class="panel-body" >
 						<div class="row">
 							<div class="col-md-4">
 								<img class="thumbnail" src=<?=$arr['thumbnail_url'] ?>>
 							</div>
 							<div class="col-md-5">
 								<label for="description">description :</label>
 								<p><?=$arr['title'] ?></p>
 							</div>
 							<div class="col-md-3">
 								<label for="download">download :</label>
 								<?php

 								foreach ($urls as $value) {
 									parse_str($value,$format);
 									echo "<a class='btn btn-primary'  href='{$format[url]}&title={$arr[title]}'>{$format['quality']}</a><br><br>";
 								}

 								 ?>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 </body>
 </html>