<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/header.css">
</head>

<body>
  <div class="title">
    <h1><box-icon name='hard-hat' type='solid' class="icon" color="#8a817c" size="md"
        style="margin-right:5px;"></box-icon>Hard Hat Hire</h1>
    <div class="title-row">
      <div class="title-row-value">
        <p><a href="index.php">Clear Search Query</a></p>
      </div>
      <div class="search">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
          <input type="text" name="searchInput" placeholder="Search applicant here..." class="search-box">
          <button type="submit" name="searchBtn" class="searchBtn">Submit</button>
      </div>
      <div class="title-row-value">
        <p><a href="insert.php">Insert New Applicant</a></p>
      </div>
      </form>
    </div>
  </div>

  <?php if (isset($_SESSION['message'])) { ?>
    <h1 style="color: black; text-align: center; background-color: white; border: 3px solid black;">
      <?php echo $_SESSION['message']; ?>
    </h1>
  <?php }
  unset($_SESSION['message']); ?>

  <div class="container">
    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Address</th>
        <th>Job Title</th>
        <th>Nationality</th>
        <th>Date Added</th>
        <th>Action</th>
      </tr>

      <?php if (!isset($_GET['searchBtn'])) {
        $getAllApplicant = getAllApplicant($pdo);
        foreach ($getAllApplicant as $row) { ?>
          <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['job_title']; ?></td>
            <td><?php echo $row['nationality']; ?></td>
            <td><?php echo $row['date_added']; ?></td>
            <td>
              <a href="edit.php?applicant_id=<?php echo $row['applicant_id']; ?>">Edit</a>
              <a href="delete.php?applicant_id=<?php echo $row['applicant_id']; ?>">Delete</a>
            </td>
          </tr>
        <?php } ?>

      <?php } else {
        $searchForAnApplicant = searchForAnApplicant($pdo, $_GET['searchInput']);
        foreach ($searchForAnApplicant as $row) { ?>
          <tr>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['job_title']; ?></td>
            <td><?php echo $row['nationality']; ?></td>
            <td><?php echo $row['date_added']; ?></td>
            <td>
              <a href="edit.php?applicant_id=<?php echo $row['applicant_id']; ?>">Edit</a>
              <a href="delete.php?applicant_id=<?php echo $row['applicant_id']; ?>">Delete</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </table>
  </div>


</body>

</html>