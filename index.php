<?php 
// This page displays a list of all patient entries and provides options to add, edit, or delete records
// This page is the providers/nurses/MAs view

include 'db.php'; ?>

<!-- For the Page Style -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>HealthHub Connect</title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
    @import 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap';
    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      }

    body {
      background-color: #f8f9fa;
    }

    .header {
      background-color: #004a9f;
      padding: 1rem;
      text-align: center;
      color: white;
      font-weight: bold;
    }

    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #f8f9fa;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px solid #ddd;
      box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
    }

    .footer .contact-details {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .footer .contact-details i {
      color: #004a9f;
      margin-right: 8px;
    }

    .footer a {
      color: #004a9f;
      text-decoration: none;
    }
  </style>

  <!-- Top Banner -->
  <header class="header">
    HealthHub Connect
  </header>
  <!--Page Style Ends Here -->

  <!-- Main Section -->
  <div class="container" style="margin-top: 30px;">
  <div class="d-flex justify-content-left align-items-center">
        <!-- Heading for Patient Records -->
        <h1>Patient Records</h1>

        <!-- Add New Patient Button with Plus Icon -->
        <a href="create.php" class="btn btn-primary" style="font-size: 2rem; margin: 2%; padding: .25px 6px;"> + </a>
     </div>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query the database for all user entries
            $result = $connection->query("SELECT * FROM users");
            while ($row = $result->fetch_assoc()) {
                // Display each user entry in a table row with options to edit or delete
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['fname']}</td>
                        <td>{$row['lname']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['password']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='btn btn-warning'>Edit</a>
                            <a href='delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                        </td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

  <!-- Footer -->
  <footer class="footer">
        <div class="contact-details">
            <span style="color: #004a9f; font-weight:bold">Contact Us:</span>
            <i class="fas fa-map-marker-alt"></i>
            <span>Lahug, Cebu City, Cebu, Visayas 6000</span>
            <i class="fas fa-phone"></i>
            <span>(888) 422-7974</span>
            <i class="fas fa-fax"></i>
            <span>Fax: (888) 511-8586</span>
        </div>
        <div>
            <a href="#">Privacy Policy</a>
        </div>
    </footer>

</body>
</html>
