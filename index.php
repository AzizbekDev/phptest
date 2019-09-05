<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<form action="result.php" method="post" class="col-md-12">
				<h1 class="form-text text-center">PHP Test</h1>
				<div class="form-group">
					<label for="filename">Filename</label>
					<input type="text" class="form-control" id="filename" name="filename" placeholder="Enter file name" required>
					<span class="text-muted">
						For example: <b>list.txt</b>
					</span>
				</div>
				<div class="form-group">
					<label for="operation">Operation</label>
					<select class="form-control" id="operation" name="operation" required>
						<option value=''>Choose operation</option>
						<option value='multiplication'>*</option>
						<option value='division'>/</option>
						<option value='addition'>+</option>
						<option value='subtraction'>-</option>
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>