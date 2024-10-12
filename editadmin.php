<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/title.css">
  <link rel="stylesheet" href="css/editadmin.css">
</head>

<body>
  <div class="title">
    <h3>Database Administrator Management System</h3>
  </div>
  <div class="container">

    <?php $getAdminByID = getAdminByID($pdo, $_GET['admin_id']); ?>
    <form action="core/handleForms.php?admin_id=<?php echo $_GET['admin_id']; ?>" method="POST">
      <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" value="<?php echo $getAdminByID['first_name']; ?>">
      </p>
      <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" value="<?php echo $getAdminByID['last_name']; ?>">
      </p>
      <p>
        <label for="gender">Gender:</label>
        <input type="text" name="gender" value="<?php echo $getAdminByID['gender']; ?>">
      </p>
      <p>
        <label for="experiences">Experience:</label>
        <select name="experiences">
          <option value="0-1 year" <?php if ($getAdminByID['experiences'] == '0-1 year')
            echo 'selected'; ?>>0-1 year
          </option>
          <option value="2-3 years" <?php if ($getAdminByID['experiences'] == '2-3 years')
            echo 'selected'; ?>>2-3 years
          </option>
          <option value="4-5 years" <?php if ($getAdminByID['experiences'] == '4-5 years')
            echo 'selected'; ?>>4-5 years
          </option>
          <option value="5+ years" <?php if ($getAdminByID['experiences'] == '5+ years')
            echo 'selected'; ?>>5+ years
          </option>
        </select>
      </p>
      <p>
        <label for="dbaLevel">DBA Career Level:</label>
        <select name="dbaLevel">
          <option value="Level 2" <?php if ($getAdminByID['dba_level'] == 'Level 2')
            echo 'selected'; ?>>Level 2</option>
          <option value="Level 3" <?php if ($getAdminByID['dba_level'] == 'Level 3')
            echo 'selected'; ?>>Level 3</option>
          <option value="Level 4" <?php if ($getAdminByID['dba_level'] == 'Level 4')
            echo 'selected'; ?>>Level 4</option>
          <option value="Level 5" <?php if ($getAdminByID['dba_level'] == 'Level 5')
            echo 'selected'; ?>>Level 5</option>
        </select>
      </p>
      <p>
        <label for="roles">Role:</label>
        <select name="roles">
          <option value="general-purpose DBA" <?php if ($getAdminByID['roles'] == 'General-purpose DBA')
            echo 'selected'; ?>>
            General-purpose DBA</option>
          <option value="Task-oriented DBA" <?php if ($getAdminByID['roles'] == 'Task-oriented DBA')
            echo 'selected'; ?>>
            Task-oriented DBA</option>
          <option value="System DBA" <?php if ($getAdminByID['roles'] == 'System DBA')
            echo 'selected'; ?>>System DBA
          </option>
          <option value="Performance Analyst" <?php if ($getAdminByID['roles'] == 'Performance Analyst')
            echo 'selected'; ?>>
            Performance Analyst</option>
          <option value="Database Architect" <?php if ($getAdminByID['roles'] == 'Database Architect')
            echo 'selected'; ?>>
            Database Architect</option>
          <option value="Data Warehouse Administrator" <?php if ($getAdminByID['roles'] == 'Data Warehouse Administrator')
            echo 'selected'; ?>>Data Warehouse Administrator</option>
          <option value="Database Analyst" <?php if ($getAdminByID['roles'] == 'Database Analyst')
            echo 'selected'; ?>>
            Database Analyst</option>
          <option value="Cloud DBA" <?php if ($getAdminByID['roles'] == 'Cloud DBA')
            echo 'selected'; ?>>Cloud DBA
          </option>
          <option value="Application DBA" <?php if ($getAdminByID['roles'] == 'Application DBA')
            echo 'selected'; ?>>
            Application DBA</option>
        </select>
      <p>
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $getAdminByID['email']; ?>">
        <input class="submitBtn" type="submit" name="editAdminBtn">
      </p>
    </form>
  </div>
</body>

</html>