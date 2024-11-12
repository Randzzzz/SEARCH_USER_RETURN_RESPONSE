<?php

require_once 'dbConfig.php';

function getAllApplicant($pdo)
{
  $sql = "SELECT * FROM users_data 
			ORDER BY last_name ASC";
  $stmt = $pdo->prepare($sql);
  $executeQuery = $stmt->execute();
  if ($executeQuery) {
    return $stmt->fetchAll();
  }
}

function getApplicantByID($pdo, $applicant_id)
{
  $sql = "SELECT * from users_data WHERE applicant_id = ?";
  $stmt = $pdo->prepare($sql);
  $executeQuery = $stmt->execute([$applicant_id]);

  if ($executeQuery) {
    return $stmt->fetch();
  }
}

function searchForAnApplicant($pdo, $searchQuery)
{

  $sql = "SELECT * FROM users_data WHERE 
			CONCAT(first_name, last_name, age, gender, email,
				address, job_title, nationality, date_added) 
			LIKE ?
      ORDER BY last_name ASC";

  $stmt = $pdo->prepare($sql);
  $executeQuery = $stmt->execute(["%" . $searchQuery . "%"]);
  if ($executeQuery) {
    return $stmt->fetchAll();
  }
}

function insertNewApplicant($pdo, $first_name, $last_name, $age, $gender, $email, $address, $job_title, $nationality)
{

  $sql = "INSERT INTO users_data (first_name, last_name, age, gender, email, address, job_title, nationality) VALUES (?,?,?,?,?,?,?,?)";

  $stmt = $pdo->prepare($sql);
  $executeQuery = $stmt->execute([$first_name, $last_name, $age, $gender, $email, $address, $job_title, $nationality]);

  if ($executeQuery) {
    return [
      'message' => "Successfully inserted!",
      'statusCode' => 200,
      // No query set is applicable
    ];
  } else {
    return [
      'message' => "Insertion Failed",
      'statusCode' => 400,
    ];
  }

}

function editApplicant($pdo, $first_name, $last_name, $age, $gender, $email, $address, $job_title, $nationality, $applicant_id)
{

  $sql = "UPDATE users_data 
            SET first_name = ?,
              last_name = ?,
              age = ?,
              gender = ?,
              email = ?,
              address = ?,
              job_title = ?,
              nationality = ?
            WHERE applicant_id = ?";

  $stmt = $pdo->prepare($sql);
  $executeQuery = $stmt->execute([$first_name, $last_name, $age, $gender, $email, $address, $job_title, $nationality, $applicant_id]);

  if ($executeQuery) {
    return [
      'message' => "Successfully Edited!",
      'statusCode' => 200,
      // No query set is applicable
    ];
  } else {
    return [
      'message' => "Edit Failed",
      'statusCode' => 400,
    ];
  }

}

function deleteApplicant($pdo, $applicant_id)
{

  $sql = "DELETE FROM users_data WHERE applicant_id = ?";

  $stmt = $pdo->prepare($sql);
  $executeQuery = $stmt->execute([$applicant_id]);

  if ($executeQuery) {
    return [
      'message' => "Successfully Deleted!",
      'statusCode' => 200,
      // No query set is applicable
    ];
  } else {
    return [
      'message' => "Deletion Failed",
      'statusCode' => 400,
    ];
  }
}

?>