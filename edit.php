<?php
// Where you can edit patient information

include 'db.php';

$id = $_GET['id'];
$result = $connection->query("SELECT * FROM users WHERE id = $id"); //searches for the unique ID from the database
$user = $result->fetch_assoc(); //fetches the result
?>


<!-- For the Page Style -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <!-- Heading for Edit Patient Records -->
          <div class="container" style="margin-top: 30px;">
        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <div class="card p-4 shadow-sm" style="max-width: 400px; margin: auto; border-radius: 10px;">
                <h2 class="text-center mb-4" style="font-weight: bold;">EDIT PATIENT RECORD</h2>

                <!-- First Name -->
                <div class="form-group mb-3">
                    <input type="text" name="fname" class="form-control" value="<?php echo $user['fname']; ?>" placeholder="First Name" required>
                </div>

                <!-- Last Name -->
                <div class="form-group mb-3">
                    <input type="text" name="lname" class="form-control" value="<?php echo $user['lname']; ?>" placeholder="Last Name" required>
                </div>

                <!-- Email -->
                <div class="form-group mb-3">
                    <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" placeholder="Email" required>
                </div>

                <!-- Password -->
                <div class="form-group mb-3">
                    <input type="password" name="password" class="form-control" value="<?php echo $user['password']; ?>" placeholder="Password" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #007bff; border: none; padding: 10px; border-radius: 5px; font-size: 16px;">Update</button>
            </div>
        </form>
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

</div>
</body>
</html>
