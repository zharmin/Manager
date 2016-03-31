<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	
    <title>WikiaBox Manager - Beta</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asset/css/template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php include 'dist/php/call.php'; ?>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WikiaBox</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="../rutorrent">Rutorrent</a></li>
            <li><a href="../download">Download</a></li>
          </ul>
	  <ul class="nav navbar-nav navbar-right">
            <li><a class="active">
	     <?php echo "Hello {$user}"; ?>

</a></li> 
	</div><!--/.nav-collapse -->
	  </ul>      
        </div>
    </nav>

	<br /><br /><br />
    <div id="dashboard">DASHBOARD</div><br />
	
	<div class="container theme-showcase" role="main">
	
      <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Server Information</h3>
            </div>
            <div class="panel-body">

		<?php echo "<b>Server IP:</b> {$serverIP}"; ?>
		<br>

		<?php echo "<b>Load average:</b> {$load[0]}   {$load[1]}   {$load[2]}"; ?>
		<br>

	        
		<br>
		<b>Disk Usage</b><br><br>
		<div id="disk"><?php echo "Disk Utilization $dp% ($du used over $dt)" ?><br></div> 
		<div class="progress">
        		<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $dp; ?>" aria-valuemin="0" aria-valuemax="100" style="<?php echo "width: $dp%"; ?>"></div>
		</div>
           </div>
          </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Reboot SeedBox</h3>
            </div>
            <div class="panel-body">
            <p>
				<button type="button" class="btn btn-lg btn-warning" onclick="myRestart()" />Restart</button>
				<button type="button" class="btn btn-lg btn-danger" onclick="myStop()" />Stop</button>
				<button type="button" class="btn btn-lg btn-success" onclick="myStart()" />Start</button>
			</p>
		<div id="mybox"></div>
            </div>
        </div>
        </div><!-- /.col-sm-6 -->
        <div class="col-sm-6">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">FTP - FTPS - Transdrone</h3>
            </div>
            <div class="panel-body">
            <b>FTP & FTPS Information</b>
			<br><br>
			<b>Address:</b> drax.wikiabox.ws
			<br>
               
			<?php echo "<b>Username:</b> {$user}"; ?><br>
			<b>Port:</b> 40
			<br><hr> 
			<b>Transdrone</b>
            <br><br>

			<b>Server Type:</b> rTorrent <br>
			<b>Domain name:</b> drax.wikiabox.ws
			<br><br>
			
			<b><u>Advance Setting</u></b> <br>
			<b>Port:</b> 80 <br>
			<b>Disable authentication:</b> Uncheck <br>
			<?php echo "<b>Username:</b> {$user}"; ?> <br>
			<b>Password:</b> User password <br>
			<b>SCGI mount point:</b> /rutorrent/plugins/httprpc/action.php <br>

            </div>
          </div>
		  
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">WikiaBox Support</h3>
            </div>
            <div class="panel-body">
              For any issue, please create a ticket via <a href="http://wikiabox.info/billing/submitticket.php">Customer Portal</a>
            </div>
          </div>
        </div><!-- /.col-sm-6 -->
        
      </div>

	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/function.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
