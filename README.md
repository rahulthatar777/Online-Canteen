# Online Canteen Management System

The **Online Canteen Management System** is a web-based application designed to simplify the ordering and management of food items in a canteen. This system enables users to view the menu, place orders, and manage their account details. It is built using **PHP**, **JavaScript**, **HTML**, **CSS**, and **MySQL** for data management.

## Features

- **User Authentication**: Register and log in to manage your account.
- **Menu Display**: View available food items with prices and descriptions.
- **Order Management**: Place, update, and cancel orders easily.
- **Admin Panel**: Manage food items, view orders, and track sales.
- **Responsive Design**: Accessible on various devices (desktop, tablet, mobile).
- **Real-time Updates**: Dynamic updates to the menu and orders using JavaScript.
- **Database Integration**: Data storage and retrieval using MySQL.

## Demo

A live demo of the application can be found here: [Live Demo](#) <!-- Add a link to your live demo if available -->

## Technologies Used

- **Frontend**:
  - HTML
  - CSS
  - JavaScript
- **Backend**:
  - PHP
  - MySQL

## Installation

### Prerequisites

- A web server (e.g., XAMPP, WAMP, or any hosting service that supports PHP and MySQL).
- PHP installed on your server.
- MySQL database.

### Steps to Set Up Locally

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/yourusername/online-canteen-management.git
    ```

2. **Navigate to the Project Directory**:
    ```bash
    cd online-canteen-management
    ```

3. **Import Database**:
   - Create a new database in your MySQL server.
   - Import the `database.sql` file found in the project directory to set up the required tables.

4. **Configure Database Connection**:
   - Open `config.php` (or equivalent) and update the database credentials:
     ```php
     $servername = "localhost"; // Database server
     $username = "your_db_username"; // Database username
     $password = "your_db_password"; // Database password
     $dbname = "your_db_name"; // Database name
     ```

5. **Run the Application**:
   - Start your web server (e.g., XAMPP/WAMP).
   - Open a web browser and navigate to `http://localhost/online-canteen-management`.

## File Structure

