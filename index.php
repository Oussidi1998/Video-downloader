<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>youtube video donwload</title>
	<link rel="stylesheet" type="text/css" href="../Biblio/bootstrap.min.css">
	<script type="text/javascript" src="../Biblio/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#sub").click(function() {
				var valid =true;
				var url =$("#url").val();
				var express = new RegExp('^~^(?:https?://)?(?:www[.])?(?:youtube[.]com/watch[?]v=|youtu[.]be/)([^&]{11})~x$');

				if(url == "" ){
					$("#form").prev(".msg").html("<div class='alert alert-danger'>Enter a url first </div>");
					valid = false;
				}
				if(express.test(url) ){
					$("#form").prev(".msg").html("<div class='alert alert-danger'>entrer a valid url please</div>");
					valid = false;
					alert("not work");
				}

				return valid;
			});
		});
	</script>
</head>
<body>
	<div class="container" style="margin-top: 200px">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary text-center">
					<div class="panel-heading">
						<h3 class="panel-title">video url</h3>
					</div>
					<div class="panel-body" >
						<div style="padding:6px;">
							<div class="msg"></div>
							<form  method="post" action="getvideo.php" id="form">
								<input type="text" name="url"  class="form-control" placeholder="https://www.youtube.com/watch?v=1oqlmtnbBuk" id="url"><br>
								<input type="submit" name="down" value="download" class="btn btn-primary" id="sub">
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>