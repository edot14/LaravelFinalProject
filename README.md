My personal Laravel Project

Overview:

This is a job listing web application built with Laravel, Tailwind CSS, and Vite. This project follows the Laracasts 30 Days to Learn Laravel 11 tutorial while integrating modern front-end technologies.

Prerequisites:

Ensure you have the following installed before proceeding:

PHP 8.x

Composer

Node.js & npm

Git

Laravel 11

Installation: 

1. Clone the Repository
   
    sh
    Copy
    Edit
    git clone https://github.com/edot14/LaravelFinalProject.git  
    cd LaravelFinalProject

3. Install PHP Dependencies:
   
    sh
    Copy
    Edit
    composer install

4. Install JavaScript Dependencies:

    sh
    Copy
    Edit
    npm install  

6. Install Tailwind CSS:
   
    sh
    Copy
    Edit
    npm install -D tailwindcss postcss autoprefixer  
    npx tailwindcss init -p
   
8. Configure Tailwind CSS

    Ensure your tailwind.config.js file includes:
    
    js
    Copy
    Edit
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
    
    sh
    Copy
    Edit
    cp .env.example .env  
    Generate an application key:
    
    sh
    Copy
    Edit
    php artisan key:generate  
    Set up your database in the .env file.

7. Run Migrations & Seed Database:
   
    sh
    Copy
    Edit
    php artisan migrate --seed  
    9. Run Vite & Start Development Server
    sh
    Copy
    Edit
    npm run dev  
    php artisan serve  
    Features
    Laravel 11 Backend

Tailwind CSS for styling

Job listings with categories

Blade components for modular UI

Dynamic filtering with Alpine.js

Contribution
Feel free to fork this project and submit pull requests!

License
This project is open-source and available under the MIT License.
