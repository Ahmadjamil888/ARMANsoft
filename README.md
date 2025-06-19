# Arman Soft

Arman Soft is a business-focused web application developed using the Laravel framework. It includes essential functionalities for managing users, products, orders, and administration through a secure, responsive interface. This project is designed to demonstrate proficiency in Laravel development and real-world application architecture.

## Features

- Secure user authentication system
- Admin panel with role-based access control
- Product management with full CRUD capabilities
- Order and invoice processing
- Dynamic About and Contact pages
- Clean and responsive UI
- Blade templating with Laravel Breeze
- Structured codebase and MVC organization

## Screenshots

**Frontend View**  
![Frontend](https://raw.githubusercontent.com/Ahmadjamil888/professional-e-commerce/refs/heads/main/public/screencapture-127-0-0-1-8000-2025-06-19-13_35_55.png)

**Admin Panel**  
![Admin Panel](https://raw.githubusercontent.com/Ahmadjamil888/professional-e-commerce/refs/heads/main/public/admin-panel.png)

## Installation

1. Clone the repository:

   ```
   git clone https://github.com/Ahmadjamil888/arman-soft.git
   cd arman-soft
   ```

2. Install dependencies:

   ```
   composer install
   npm install && npm run dev
   ```

3. Configure the environment file:

   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Set up the database in your `.env` file, then run:

   ```
   php artisan migrate
   ```

5. Start the development server:

   ```
   php artisan serve
   ```

## Technologies Used

- Laravel (PHP Framework)
- MySQL
- Laravel Breeze (Authentication Scaffolding)
- Blade Templating
- JavaScript and basic CSS

## License

This project is open-source and available under the MIT License.
