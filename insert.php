<?php
require_once 'core/handleForms.php';
require_once 'core/models.php';

// Get teacher ID from URL (for editing)
$teacher_id = $_GET['teacher_id'] ?? null;

// If editing, fetch the teacher details
$getTeacherByID = null;
if ($teacher_id) {
    $getTeacherByID = getTeacherByID($pdo, $teacher_id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $getTeacherByID ? "Edit Teacher" : "Add Teacher"; ?></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1><?php echo $getTeacherByID ? "Edit Teacher" : "Add Teacher"; ?>!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label>
			<input type="text" name="first_name" value="<?php echo $getTeacherByID ? $getTeacherByID['first_name'] : ''; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label>
			<input type="text" name="last_name" value="<?php echo $getTeacherByID ? $getTeacherByID['last_name'] : ''; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getTeacherByID ? $getTeacherByID['email'] : ''; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getTeacherByID ? $getTeacherByID['gender'] : ''; ?>">
		</p>
		<p>
			<label for="subjectSpecialty">Subject Specialty</label>
			<input type="text" name="subject_specialty" value="<?php echo $getTeacherByID ? $getTeacherByID['subject_specialty'] : ''; ?>">
		</p>
		<p>
			<!-- Hidden input to track teacher ID for editing -->
			<?php if ($getTeacherByID): ?>
				<input type="hidden" name="teacher_id" value="<?php echo $getTeacherByID['teacher_id']; ?>">
			<?php endif; ?>
			<input type="submit" name="editUserBtn" value="<?php echo $getTeacherByID ? "Save Changes" : "Add Teacher"; ?>">
		</p>
	</form>
</body>
</html>
