<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ALSHKBL Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/template/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/template/css/plugins/morris.css" rel="stylesheet">

    <!-- 3-col-portfolio bootstrap theme CSS -->
    <link href="/template/css/plugins/3-col-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>     
                <div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" action="/admin/login" method="POST">
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" class="form-control" name="login" placeholder="login" value="<?php echo @$data['login'] ?>">                                        
                                </div>
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                  <button class="btn btn-success" type="submit" name="do_login">Login</button>
                                </div>
                            </div>
                    </form>

					<?php
					
					if( isset($_SESSION['loginwrong']) ) {

						echo '<div class="alert alert-danger" role="alert">'.$_SESSION['loginwrong'].'</div>';
					
					} else if ( isset($_SESSION['passwordwrong']) ) {

						echo '<div class="alert alert-danger" role="alert">'.$_SESSION['passwordwrong'].'</div>';

					}
					
					?>

				</div>
			</div>
		</div>
	</div>
