<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Are you sure you want to delete this teacher?</h1>
	<?php $getUserByID = getTeacherByID($pdo, $_GET['teacher_id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>First Name: <?php echo $getUserByID['first_name']; ?></h2>
		<h2>Last Name: <?php echo $getUserByID['last_name']; ?></h2>
		<h2>Email: <?php echo $getUserByID['email']; ?></h2>
		<h2>Gender: <?php echo $getUserByID['gender']; ?></h2>
		<h2>Subject Specialty: <?php echo $getUserByID['subject_specialty']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?teacher_id=<?php echo $_GET['teacher_id']; ?>" method="POST">
				<input type="submit" name="deleteUserBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>
