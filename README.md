# Employee Management System

## Project video


## Overview
This web application is designed for administrators to efficiently manage employee records through a user-friendly interface. Built with Laravel, the application supports full CRUD (Create, Read, Update, Delete) operations, ensuring robust management of employee data.

## Features
- **CRUD Operations**: Administrators can easily create, read, update, and delete employee records.
- **Validation**: The system includes comprehensive validation mechanisms to ensure data integrity and accuracy.
- **Authentication**: Secure authentication processes protect sensitive employee information, ensuring that only authorized personnel can access the system.

## Technologies Used
- **Backend**: Laravel
- **Database**: MySQL
- **Frontend**: HTML, CSS, Bootstrap

## Installation
To set up the project locally, follow these steps:

1. Clone the repository:
    ```bash
   git clone https://github.com/NouranAbdelgwad/Employee-Management-System
2. Navigate to the project directory:
    ```bash
    cd employee-management-system
3. Install dependencies:
    ```bash
    composer install
4. Set up your environment file:
    ```bash
    cp .env.example .env
5. Generate the application key:
    ```bash
    php artisan key:generate
5. Run migrations:
    ```bash
    php artisan migrate
6. Start the server:
    ```bash
    php artisan serve

