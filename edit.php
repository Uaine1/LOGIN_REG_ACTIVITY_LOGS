<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add a Teacher</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getUserByID = getTeacherByID($pdo, $_GET['teacher_id']); ?>
	<h1>Edit the Teacher!</h1>
	<form action="core/handleForms.php?teacher_id=<?php echo $_GET['teacher_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getUserByID['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getUserByID['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email</label> 
			<input type="text" name="email" value="<?php echo $getUserByID['email']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getUserByID['gender']; ?>">
		</p>
		<p>
			<label for="subjectSpecialty">Subject Specialty</label> 
			<input type="text" name="subject_specialty" value="<?php echo $getUserByID['subject_specialty']; ?>">
		</p>
		<p>
			<input type="submit" value="Save" name="editUserBtn">
		</p>
	</form>
</body>
</html>
