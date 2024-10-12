<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/title.css">
</head>

<body>
  <div class="title">
    <h3>Database Administrator Management System</h3>
  </div>
  <div class="outer">
    <div class="container1">

      <form action="core/handleForms.php" method="POST">
        <p>Input your details here to register.
        </p>
        <p>
          <label for="firstName">First Name:</label>
          <input type="text" name="firstName">
        </p>
        <p>
          <label for="lastName">Last Name:</label>
          <input type="text" name="lastName">
        </p>
        <p>
          <label for="gender">Gender:</label>
          <input type="text" name="gender">
        </p>
        <p>
          <label for="experiences">Experience:</label>
          <select name="experiences">
            <option value="0-1 year">0-1 year</option>
            <option value="2-3 years">2-3 years</option>
            <option value="4-5 years">4-5 years</option>
            <option value="5+ years">5+ years</option>
          </select>
        </p>
        <p>
          <label for="dbaLevel">DBA Career Level:</label>
          <select name="dbaLevel">
            <option value="Level 2">Level 2</option>
            <option value="Level 3">Level 3</option>
            <option value="Level 4">Level 4</option>
            <option value="Level 5">Level 5</option>
          </select>
        </p>
        <p>
          <label for="roles">Role:</label>
          <select name="roles">
            <option value="general-purpose DBA">General-purpose DBA</option>
            <option value="Task-oriented DBA">Task-oriented DBA</option>
            <option value="System DBA">System DBA</option>
            <option value="Performance Analyst">Performance Analyst</option>
            <option value="Database Architect">Database Architect</option>
            <option value="Data Warehouse Administrator">Data Warehouse Administrator</option>
            <option value="Database Analyst">Database Analyst</option>
            <option value="Cloud DBA">Cloud DBA</option>
            <option value="Application DBA">Application DBA</option>
          </select>
        </p>
        <p>
          <label for="email">Email:</label> <input type="text" name="email">
          <input class="submitBtn" type="submit" name="insertNewAdminBtn">
        </p>
      </form>
    </div>

    <div class="container2">
      <table>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Experiences</th>
          <th>Dba Level</th>
          <th>Roles</th>
          <th>Email</th>
          <th></th>
        </tr>

        <?php $seeAllAdminRecords = seeAllAdminRecords($pdo); ?>
        <?php foreach ($seeAllAdminRecords as $row) { ?>
          <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['experiences']; ?></td>
            <td><?php echo $row['dba_level']; ?></td>
            <td><?php echo $row['roles']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
              <a href="editadmin.php?admin_id=<?php echo $row['admin_id']; ?>">Edit</a>
              <a href="deleteadmin.php?admin_id=<?php echo $row['admin_id']; ?>">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</body>

</html>