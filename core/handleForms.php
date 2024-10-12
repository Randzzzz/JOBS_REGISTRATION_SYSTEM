<?php

require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewAdminBtn'])) {
  $firstName = trim($_POST['firstName']);
  $lastName = trim($_POST['lastName']);
  $gender = trim($_POST['gender']);
  $experiences = trim($_POST['experiences']);
  $dbaLevel = trim($_POST['dbaLevel']);
  $roles = trim($_POST['roles']);
  $email = trim($_POST['email']);

  $query = insertIntoAdminRecords($pdo, $firstName, $lastName, $gender, $experiences, $dbaLevel, $roles, $email);

  if ($query) {
    header("location: ../index.php");

  } else {
    echo "Query Failed";
  }
}

if (isset($_POST['editAdminBtn'])) {
  $admin_id = trim($_GET['admin_id']);
  $firstName = trim($_POST['firstName']);
  $lastName = trim($_POST['lastName']);
  $gender = trim($_POST['gender']);
  $experiences = trim($_POST['experiences']);
  $dbaLevel = trim($_POST['dbaLevel']);
  $roles = trim($_POST['roles']);
  $email = trim($_POST['email']);

  $query = UpdateAAdmin($pdo, $admin_id, $firstName, $lastName, $gender, $experiences, $dbaLevel, $roles, $email);

  if ($query) {
    header("location: ../index.php");

  } else {
    echo "Update Failed";
  }
}

if (isset($_POST['deleteAdminBtn'])) {
  $query = deleteAAdmin($pdo, $_GET['admin_id']);

  if ($query) {
    header("location: ../index.php");

  } else {
    echo "Deletion Failed";
  }
}
?>