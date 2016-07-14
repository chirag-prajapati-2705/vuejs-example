<!-- index.html -->

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vue</title>

	<!-- CSS -->
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<!-- navigation bar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<a class="navbar-brand"><i class="glyphicon glyphicon-bullhorn"></i> Vue Events Bulletin Board</a>
	</div>
</nav>

<!-- main body of our application -->
<div class="container" id="events">

	<!-- add an event form -->
	<div class="col-sm-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Add an Event</h3>
			</div>
			<div class="panel-body">

			</div>

		</div>
	</div>

	<!-- show the events -->
	<div class="col-sm-6">
		<div class="list-group">

		</div>
	</div>
</div>

<!-- JS -->
<script type="application/javascript" src="js/vue.js"></script>
</body>
</html>