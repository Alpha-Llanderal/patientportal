<?php 
// This page is where the patients can register and sign up to the patient portal

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

    .portal-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 80vh;
      text-align: center;
    }

    .portal-logo img {
      width: 150px;
    }

    .portal-title {
      margin-top: 20px;
      font-size: 1.5rem;
      color: #004a9f;
      font-weight: bold;
    }

    .portal-subtitle {
      font-size: 1rem;
      color: #333;
      margin-bottom: 30px;
    }

    .card {
      max-width: 400px;
      padding: 2rem;
      background-color: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
  <section class="portal-container">
    <!-- Logo and Title -->
    <div class="portal-logo">
      <img src="img/logo.png" alt="Portal Logo" />
    </div>
    <div class="portal-title">
      Patient Portal
    </div>
    <div class="portal-subtitle">
    “Empowering you to take control of your health, one click at a time."
    </div>

    <!-- Form Card -->
    <div class="card">
      <form method="POST" action="store.php">
        <div class="mb-4">
          <h2 class="text-uppercase fw-bold">Sign Up</h2>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
        </div>
        <div class="mb-3">
          <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="iAgree" required>
          <label class="form-check-label" for="iAgree">
            I agree to the <a href="#" class="link-primary">terms and conditions</a>
          </label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
       </form>
    </div>
  </section>

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
