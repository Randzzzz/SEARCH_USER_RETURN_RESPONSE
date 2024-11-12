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
      <h1>Edit the Applicant!</h1>
      <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
        <p>
          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" value="<?php echo $getApplicantByID['first_name']; ?>" required>
        </p>
        <p>
          <label for="last_name">Last Name:</label>
          <input type="text" name="last_name" value="<?php echo $getApplicantByID['last_name']; ?>" required>
        </p>
        <p>
          <label for="age">Age:</label>
          <input type="number" name="age" value="<?php echo $getApplicantByID['age']; ?>" required>
        </p>
        <p>
          <label for="gender">Gender:</label>
          <input type="text" name="gender" value="<?php echo $getApplicantByID['gender']; ?>" required>
        </p>
        <p>
          <label for="email">Email:</label>
          <input type="email" name="email" value="<?php echo $getApplicantByID['email']; ?>" required>
        </p>
        <p>
          <label for="address">Address:</label>
          <input type="text" name="address" value="<?php echo $getApplicantByID['address']; ?>" required>
        </p>
        <p>
          <label for="job_title">Job Title:</label>
          <select name="job_title" required>
            <option value="Architect" <?php if ($getApplicantByID['job_title'] == 'Architect')
              echo 'selected'; ?>>
              Architect
            </option>
            <option value="Engineer" <?php if ($getApplicantByID['job_title'] == 'Engineer')
              echo 'selected'; ?>>Engineer
            </option>
            <option value="Project Manager" <?php if ($getApplicantByID['job_title'] == 'Project Manager')
              echo 'selected'; ?>>
              Project Manager</option>
            <option value="Construction Manager" <?php if ($getApplicantByID['job_title'] == 'Construction Manager')
              echo 'selected'; ?>>Construction Manager</option>
            <option value="Estimator" <?php if ($getApplicantByID['job_title'] == 'Estimator')
              echo 'selected'; ?>>
              Estimator
            </option>
            <option value="Surveyor" <?php if ($getApplicantByID['job_title'] == 'Surveyor')
              echo 'selected'; ?>>Surveyor
            </option>
            <option value="Supervisor" <?php if ($getApplicantByID['job_title'] == 'Supervisor')
              echo 'selected'; ?>>
              Supervisor
            </option>
            <option value="Construction Foreman" <?php if ($getApplicantByID['job_title'] == 'Construction Foreman')
              echo 'selected'; ?>>Construction Foreman</option>
            <option value="Electrician" <?php if ($getApplicantByID['job_title'] == 'Electrician')
              echo 'selected'; ?>>
              Electrician
            </option>
            <option value="Subcontractor" <?php if ($getApplicantByID['job_title'] == 'Subcontractor')
              echo 'selected'; ?>>
              Subcontractor</option>
            <option value="Construction Expeditor" <?php if ($getApplicantByID['job_title'] == 'Construction Expeditor')
              echo 'selected'; ?>>Construction Expeditor</option>
            <option value="Construction Worker" <?php if ($getApplicantByID['job_title'] == 'Construction Worker')
              echo 'selected'; ?>>Construction Worker</option>
          </select>
        </p>
        <p>
          <label for="nationality">Nationality:</label>
          <input type="text" name="nationality" value="<?php echo $getApplicantByID['nationality']; ?>" required>
          <input type="submit" name="editApplicantBtn" class="editApplicantBtn">
        </p>

      </form>
      <div class="prev"><a href="index.php" class="prevBtn">Wanna go back?</a></div>
    </div>
  </div>
</body>

</html>