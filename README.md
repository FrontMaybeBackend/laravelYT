SimpleCRM - ReadMe
Welcome to SimpleCRM! This application allows you to create, delete, update, and view customer and project data. You can also assign new projects to registered users and created customers. Below you will find information regarding the configuration, features, and usage of this application.

Technologies
Our application utilizes the following technologies:

PHP: The server-side programming language responsible for handling the application's business logic.
MySQL: The relational database management system that stores customer, project, and user data.
Bootstrap: The CSS framework that provides a responsive and visually appealing user interface.
Laravel: The PHP framework that provides tools and structure for building web applications.
Configuration
Before running the application, ensure that you meet the following requirements:

Install PHP on your server or local machine. You can download PHP from the php.net website.

Install MySQL or use an available MySQL server.

Install Composer, a dependency management tool for PHP. You can download Composer from getcomposer.org.

Clone the repository of our application from repository-url or download the application source code from your-website.com.

Navigate to the project directory and run the command composer install to install all the application's dependencies.

Configure the MySQL database connection in the .env file located in the project directory. Enter the appropriate credentials (host, username, password, etc.).

Run the database migrations by executing the command php artisan migrate to create the necessary tables in the database.

Start the local PHP server, for example, by running the command php artisan serve. The application will be accessible at http://localhost:8000.

Functionality Guide
Once the application is configured, you can start using its features. Here is an overview of the available functionality:

Customer Management:

Create a new customer by providing the necessary contact information.
Display a list of existing customers.
Update customer data such as name, address, phone number, etc.
Delete a customer from the database.
Project Management:

Create a new project and assign it to a customer and user.
Display a list of existing projects.
Update project details such as name, description, deadline, etc.
Delete a project from the database.
User Management:

Register a new user by providing required details such as email and password.
Log in to the application using valid credentials.
Log out from the application.
Summary
Our web application for customer and project management provides a convenient and efficient way to handle customer and project data. With its user-friendly interface and utilization of popular web technologies, the application offers ease of use and flexibility for customization to individual needs.
