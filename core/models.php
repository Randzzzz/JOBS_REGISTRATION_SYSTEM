<?php

require_once 'dbConfig.php';

function insertIntoAdminRecords($pdo, $first_name, $last_name, $gender, $experiences, $dba_level, $roles, $email)
{

  $sql = "INSERT INTO admin_records (first_name, last_name, gender, experiences, dba_level,roles, email) VALUES (?,?,?,?,?,?,?)";

  $stmt = $pdo->prepare($sql);

  $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $experiences, $dba_level, $roles, $email]);

  if ($executeQuery) {
    return true;
  }
}
function seeAllAdminRecords($pdo)
{
  $sql = "SELECT * FROM admin_records";
  $stmt = $pdo->prepare($sql);
  $executeQuery = $stmt->execute();
  if ($executeQuery) {
    return $stmt->fetchAll();
  }
}

function getAdminByID($pdo, $admin_id)
{
  $sql = "SELECT * FROM admin_records WHERE admin_id = ?";
  $stmt = $pdo->prepare($sql);
  if ($stmt->execute([$admin_id])) {
    return $stmt->fetch();
  }
}

function updateAAdmin($pdo, $admin_id, $first_name, $last_name, $gender, $experiences, $dba_level, $roles, $email)
{
  $sql = "UPDATE admin_records 
            SET first_name = ?, 
                last_name = ?, 
                gender = ?,
                experiences = ?,
                dba_level = ?,
                roles = ?,
                email = ?
            WHERE admin_id = ?";

  $stmt = $pdo->prepare($sql);

  $executeQuery = $stmt->execute([$first_name, $last_name, $gender, $experiences, $dba_level, $roles, $email, $admin_id]);

  if ($executeQuery) {
    return true;
  }
}

function deleteAAdmin($pdo, $admin_id)
{
  $sql = "DELETE FROM admin_records WHERE admin_id = ?";
  $stmt = $pdo->prepare($sql);

  $executeQuery = $stmt->execute([$admin_id]);

  if ($executeQuery) {
    return true;
  }
}
?>