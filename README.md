# Hospital Management System (HMS)

This is a basic Hospital Management System (HMS) built with Laravel. The system allows users to:

-   Login
-   View a list of registered patients
-   Register new patients

## Prerequisites

Before running the project, make sure you have the following installed:

-   **PHP** (version 7.4 or higher)
-   **Composer** (dependency manager for PHP)
-   **Laravel** (the framework used for the project)
-   **XAMPP** or **WAMP** (for running a local server)
-   **MySQL** or any other database supported by Laravel (configured in `.env`)

## Installation

1. **Install Composer** if you haven’t already: [Download Composer](https://getcomposer.org/).
2. **Clone the repository** or download the project files.
3. Open a terminal and navigate to the project directory:
   cd /path/to/project
4. Install the required dependencies using Composer:
    composer install

## Database Setup:
1. Import the provided .sql file into your MySQL database via phpMyAdmin.

2. Ensure the project is configured to use MySQL on port 3306.

## Start the Application:
1. Make sure Apache and MySQL are running in XAMPP/WAMP.
2. Run the Laravel development server:
php artisan serve
3. The application will be available at http://localhost:8000.

## Login Credentials
-  Email: ali@gmail.com
-  Password: 123

## Features
**Login:** Secure authentication to access the system.

**Patient List:** View a list of registered patients.

**Patient Registration:** Add new patients to the system.

## Usage
**Login:** Use the login page to access the system.

**Patient List:** After logging in, you will be able to see a list of registered patients.

**Register Patient:** You can register new patients by filling in the necessary information and submitting the form.

## License
This project is open-source and available under the MIT License.

## Acknowledgments

Laravel (PHP Framework)

XAMPP/WAMP (for running local server)

Composer (dependency management)

This README includes setup instructions, prerequisites, and details about the basic features of your project. 

You can add more specific details if needed (e.g., additional features or instructions for deploying it in a production environment). Let me know if you'd like to make any changes!
