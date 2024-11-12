<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/insert.css">
</head>

<body>
  <div class="title">
    <h1><box-icon name='hard-hat' type='solid' class="icon" color="#8a817c" size="md"
        style="margin-right:5px;"></box-icon>Hard Hat Hire</h1>
  </div>
  <?php $getApplicantByID = getApplicantByID($pdo, $_GET['applicant_id']); ?>

  <div class="form">
    <div class="items">
      <h1>Are you sure you want to delete this Applicant?</h1>
      <h2>First Name: <?php echo $getApplicantByID['first_name']; ?></h2>
      <h2>Last Name: <?php echo $getApplicantByID['last_name']; ?></h2>
      <h2>Age: <?php echo $getApplicantByID['age']; ?></h2>
      <h2>Gender: <?php echo $getApplicantByID['gender']; ?></h2>
      <h2>Email: <?php echo $getApplicantByID['email']; ?></h2>
      <h2>Address: <?php echo $getApplicantByID['address']; ?></h2>
      <h2>Job Title: <?php echo $getApplicantByID['job_title']; ?></h2>
      <h2>Nationality: <?php echo $getApplicantByID['nationality']; ?></h2>
      <h2>Date Added: <?php echo $getApplicantByID['date_added']; ?></h2>
      <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
        <input type="submit" name="deleteApplicantBtn" value="Delete" class="deleteApplicantBtn">
      </form>
      <div class="prev"><a href="index.php" class="prevBtn">Wanna go back?</a></div>

    </div>
  </div>

</body>

</html>