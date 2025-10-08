<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# To-Do-List (Laravel + jQuery(AJAX))

A simple to-do list application built with **Laravel**, **Bootstrap**, and **jQuery (AJAX)**.  
This project was created as a learning exercise to understand how Laravel works together with dynamic front-end interactions.

---

## Features
- Add new tasks  
- Mark tasks as completed (via AJAX)  
- Automatically save tasks in a MySQL database  
- Clean and responsive UI with Bootstrap 5  

---

## 🧩 Technologies Used
- [Laravel 11](https://laravel.com/)  
- [MySQL](https://www.mysql.com/)  
- [Bootstrap 5](https://getbootstrap.com/)  
- [jQuery 3.6+](https://jquery.com/)  
- AJAX for dynamic updates
  
---

## 🛠️ Installation

1. Clone the project:
   ```bash
   git clone https://github.com/mihai1702/To-Do-List.git
   cd To-Do-List
2. Install PHP dependencies:
    ```bash
    composer install
4. Create your .env file
   ```bash
   cp .env.example .env
6. Configure your database connection in .env
    ```env
    DB_DATABASE=todo_list
    DB_USERNAME=root
    DB_PASSWORD=
8. Generate de APP KEY
   ```bash
   php artisan key:generate
10. Run the database migrations
    ```bash
    php artisan migrate
12. Run the app
    ```bash
    php artisan serve
