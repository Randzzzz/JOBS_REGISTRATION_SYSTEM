<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/title.css">
  <link rel="stylesheet" href="css/deleteadmin.css">
</head>

<body>
  <div class="title">
    <h3>Database Administrator Management System</h3>
  </div>
  <div class="container">
    <?php $getAdminByID = getAdminByID($pdo, $_GET['admin_id']); ?>
    <form action="core/handleForms.php?admin_id=<?php echo $_GET['admin_id']; ?>" method="POST">

      <p>Are you sure you want to delete this admin?</p>
      <p>First Name: <?php echo $getAdminByID['first_name']; ?></p>
      <p>Last Name: <?php echo $getAdminByID['last_name']; ?></p>
      <p>Gender: <?php echo $getAdminByID['gender']; ?></p>
      <p>Experience: <?php echo $getAdminByID['experiences']; ?></p>
      <p>DBA Level: <?php echo $getAdminByID['dba_level']; ?></p>
      <p>Role: <?php echo $getAdminByID['roles']; ?></p>
      <p>Email: <?php echo $getAdminByID['email']; ?></p>
      <input class="deleteBtn" type="submit" name="deleteAdminBtn" value="Delete">
      <button class="backBtn"><a href="index.php">Go back</a></button>


    </form>
  </div>

</body>

</html>