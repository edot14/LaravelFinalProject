My personal Laravel Project

Overview:

This is a job listing web application built with Laravel, Tailwind CSS, and Vite. This project follows the Laracasts 30 Days to Learn Laravel 11 tutorial while integrating modern front-end technologies.

Prerequisites:

---

Ensure you have the following installed before proceeding:

PHP 8.x

Composer

Node.js & npm

Git

Laravel 11

---

Installation: 

1. Clone the Repository
   
        git clone https://github.com/edot14/LaravelFinalProject.git  
        cd LaravelFinalProject

2. Install PHP Dependencies:
   
        composer install

3. Install JavaScript Dependencies:

        npm install  

4. Install Tailwind CSS:
   
        npm install -D tailwindcss postcss autoprefixer  
        npx tailwindcss init -p
   
5. Configure Tailwind CSS

    Ensure your tailwind.config.js file includes:
    
        /** @type {import('tailwindcss').Config} */  
        export default {  
          content: [  
            "./resources/**/*.blade.php",  
            "./resources/**/*.js",  
            "./resources/**/*.vue",  
          ],  
          theme: {  
            extend: {},  
          },  
          plugins: [],  
        }
   
6. Configure Environment:

Duplicate the .env.example file and rename it to .env:
    
    cp .env.example .env 


Generate an application key:
  
    php artisan key:generate  
    
    Set up your database in the .env file.

7. Run Migrations & Seed Database:
   
        php artisan migrate --seed
   
8. Run Vite & Start Development Server
   
        npm run dev  
        php artisan serve


Features:

- Laravel 11 Backend
    
- Tailwind CSS for styling
    
- Job listings with categories
    
- Blade components for modular UI
    
- Dynamic filtering with Alpine.js

Contribution:
Feel free to fork this project and submit pull requests!

License:
This project is open-source and available under the MIT License.
