<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<link rel="icon" href="../../favico-16x16.png" type="image/png">

	<title>Preview</title>

	<style>

		body{
			margin: 0 auto;
			padding: 0;
			text-align: center;
		}

		.main-content{
			width: 83%;
			margin:0 auto;
			text-align: center;
		}

		.device-preview {
			background: rgba(0, 0, 0, 0) url("../../images/phone-case-big.png") no-repeat scroll right top;
			height: 810px;
			position: absolute;
			right: 0;
			width: 380px;
			z-index: 1;
			color: #fff;
			left: 0;
			text-align: center;
			margin:0 auto;
			top: 50px;

		}

		.device-preview-page .device-preview > div.active-preview {
			opacity: 1;
			z-index: 100;
		}


		.page{
			background: #fff none repeat scroll 0 0;
			left: 30px;
			position: absolute;
			top: 104px;
			width: 328px;
			height: 576px;
			border: 4px solid #22272d;

		}




	</style>
</head>

<body>

	<div class="main-content">
		<div class="device-preview device-preview-page">

			<div class="page ">

				<iframe src="./www" width="328px" height="576px" border="0" style="border:none;">



				</iframe>


			</div>

		</div>
	</div>
</body>


</html>

