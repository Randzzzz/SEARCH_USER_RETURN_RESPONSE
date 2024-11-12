<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link rel="stylesheet" href="css/insert.css">
  <link rel="stylesheet" href="css/header.css">
</head>

<body>
  <div class="title">
    <h1><box-icon name='hard-hat' type='solid' class="icon" color="#8a817c" size="md"
        style="margin-right:5px;"></box-icon>Hard Hat Hire</h1>
  </div>

  <div class="form">
    <div class="items">
      <h1>Insert new Applicant</h1>
      <form action="core/handleForms.php" method="POST">
        <p>
          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" required>
        </p>
        <p>
          <label for="last_name">Last Name:</label>
          <input type="text" name="last_name" required>
        </p>
        <p>
          <label for="age">Age:</label>
          <input type="number" name="age" required>
        </p>
        <p>
          <label for="gender">Gender:</label>
          <input type="text" name="gender" required>
        </p>
        <p>
          <label for="email">Email:</label>
          <input type="email" name="email" required>
        </p>
        <p>
          <label for="address">Address:</label>
          <input type="text" name="address" required>
        </p>
        <p>
          <label for="job_title">Job Title:</label>
          <select name="job_title" required>
            <option value="Architect">Architect</option>
            <option value="Engineer">Engineer</option>
            <option value="Project Manager">Project Manager</option>
            <option value="Construction Manager">Construction Manager</option>
            <option value="Estimator">Estimator</option>
            <option value="Surveyor">Surveyor</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Construction Foreman">Construction Foreman</option>
            <option value="Electrician">Electrician</option>
            <option value="Subcontractor">Subcontractor</option>
            <option value="Construction Expeditor">Construction Expeditor</option>
            <option value="Construction Worker">Construction Worker</option>
          </select>
        </p>
        <p>
          <label for="nationality">Nationality:</label>
          <input type="text" name="nationality" required>
          <input type="submit" name="insertApplicantBtn" class="insertApplicantBtn">
        </p>
      </form>
      <div class="prev"><a href="index.php" class="prevBtn">Wanna go back?</a></div>

    </div>
  </div>

</body>

</html>