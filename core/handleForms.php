<?php

require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertApplicantBtn'])) {
  $insertApplicant = insertNewApplicant($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['age'], $_POST['gender'], $_POST['email'], $_POST['address'], $_POST['job_title'], $_POST['nationality']);

  if ($insertApplicant['statusCode'] === 200) {
    $_SESSION['message'] = $insertApplicant['message'];
    header("Location: ../index.php");
  } else {
    $_SESSION['message'] = $insertApplicant['message'];
  }
}

if (isset($_POST['editApplicantBtn'])) {
  $editApplicant = editApplicant($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['age'], $_POST['gender'], $_POST['email'], $_POST['address'], $_POST['job_title'], $_POST['nationality'], $_GET['applicant_id']);

  if ($editApplicant['statusCode'] === 200) {
    $_SESSION['message'] = $editApplicant['message'];
    header("Location: ../index.php");
  } else {
    $_SESSION['message'] = $editApplicant['message'];
  }
}

if (isset($_POST['deleteApplicantBtn'])) {
  $deleteApplicant = deleteApplicant($pdo, $_GET['applicant_id']);

  if ($deleteApplicant['statusCode'] === 200) {
    $_SESSION['message'] = $deleteApplicant['message'];
    header("Location: ../index.php");
  } else {
    $_SESSION['message'] = $deleteApplicant['message'];
  }
}

if (isset($_GET['searchBtn'])) {
  $searchForAnApplicant = searchForAnApplicant($pdo, $_GET['searchInput']);
  foreach ($searchForAnApplicant as $row) {
    echo "<tr> 
				<td>{$row['applicant_id']}</td>
				<td>{$row['first_name']}</td>
				<td>{$row['last_name']}</td>
				<td>{$row['age']}</td>
				<td>{$row['gender']}</td>
				<td>{$row['email']}</td>
				<td>{$row['address']}</td>
				<td>{$row['job_title']}</td>
				<td>{$row['nationality']}</td>
			  </tr>";
  }
}
?>