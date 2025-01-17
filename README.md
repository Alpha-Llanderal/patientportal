Patient Portal CRUD Project
Project Description
This project is a simple Patient Portal that allows users to perform basic CRUD (Create, Read, Update, Delete) operations on patient records. It is built using PHP for the backend, MySQL for database management, and Bootstrap for front-end styling.

This project aims to simulate a patient management system where users can add new patient records, view all patients, update patient details, and delete records as needed. This project is suitable for learning the basics of web development with PHP and MySQL.

Features
Add New Patient: A form that allows users to create a new patient record with fields such as first name, last name, email, and password.
View Patient Records: Displays a list of all patients stored in the database.
Update Patient Records: Allows editing and updating of a patient's details.
Delete Patient Records: Deletes a patient record from the database.
Secure Input Handling: Utilizes prepared statements to avoid SQL injection attacks.
Password Hashing: Stores passwords securely by hashing them before insertion into the database.
Technologies Used
PHP: Server-side scripting for CRUD functionality.
MySQL: Database management for storing patient records.
Bootstrap: Front-end framework for responsive design and styling.
HTML5 & CSS3: Basic structure and styling.
FontAwesome: Icons used throughout the UI for an enhanced user experience.
Project Structure
bash
Copy code
├── /css           # CSS folder for styles (optional custom styles)
├── /js            # JavaScript folder (if needed for future enhancements)
├── /db.php        # Database connection file
├── /index.php     # Main page listing all patient records
├── /create.php    # Page for adding new patient records
├── /edit.php      # Page for editing patient records
├── /delete.php    # Script to delete a patient record
├── /update.php    # Script to update patient records
└── /README.md     # Project documentation
Setup and Installation
1. Prerequisites
A local development server (such as XAMPP, MAMP, or WAMP) with PHP and MySQL installed.
A web browser to view the application.
2. Clone the Repository
bash
Copy code
git clone https://github.com/yourusername/patient-portal-crud.git
3. Setting Up the Database
Open phpMyAdmin or any MySQL interface of your choice.
Create a new database called crud_db.
Run the following SQL query to create the users table:
sql
Copy code
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);
4. Database Configuration
Modify the db.php file with your database credentials:

php
Copy code
<?php
$host = 'localhost';
$db = 'crud_db';
$user = 'root';  // Change if using a different username
$pass = '';      // Add your password if applicable

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
5. Running the Application
Place the project folder in your local server's root directory (htdocs for XAMPP, etc.).
Start your local development server.
Open your web browser and navigate to http://localhost/patient-portal-crud/ to view the application.
6. Usage Instructions
Add Patient: Click the "Add Patient" button on the home page to create a new patient record.
Edit Patient: Click the "Edit" button next to a patient record to modify the details.
Delete Patient: Click the "Delete" button next to a patient record to remove it from the database.
Security Considerations
SQL Injection: Prepared statements are used in all queries to prevent SQL injection attacks.
Password Security: User passwords are securely hashed using password_hash() before being stored in the database.
Error Handling: Basic error handling is implemented for database connection issues.
Future Improvements
User Authentication: Add login and user authentication to control access to the CRUD operations.
Pagination: Add pagination to handle large datasets of patient records.
Search Functionality: Implement a search bar to allow users to find specific patients quickly.
Input Validation: Enhance form validation to ensure that all fields are correctly formatted and validated before submission.
License
This project is open-source and licensed under the MIT License. You are free to use, modify, and distribute the code as long as you include proper attribution.

