<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
</head>
<body>
<div class="col-xs-8 col-xs-offset-2" style="margin-top:50px;">
    <form class="form-horizontal form-row-seperated" action="{{ URL::action('UserController@storedn') }}"
    method="Post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="exampleInputEmail1">UserName</label>
            <input type="text" class="form-control" placeholder="User Name" name="username">
        </div>
        <div class="form-group">
            <label for="Sex">Password</label>
            <input type="text" class="form-control" placeholder="User Name" name="password">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/datepicker3.css" rel="stylesheet">
<link href="bootstrap/css/styles.css" rel="stylesheet">
<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="{{ URL::action('UserController@storedn') }}"  method="Post">
						<fieldset>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="text" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" value="Them" class="btn btn-primary">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/chart.min.js"></script>
	<script src="bootstrap/js/chart-data.js"></script>
	<script src="bootstrap/js/easypiechart.js"></script>
	<script src="bootstrap/js/easypiechart-data.js"></script>
	<script src="bootstrap/js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
