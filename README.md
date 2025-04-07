My personal Laravel Project

Overview:

This is a job listing web application built with Laravel, Tailwind CSS, and Vite.

I began this project at the beginning of March 2025 as a way to sharpen my coding skills. I was inspired by the work and teaching style of Jeffrey Way.

This project marks a milestone in my learning. I started my coding journey in 2022, and I’m committed to continually improving my skills and learning from the amazing developer community.

If you have any feedback, questions, or feature ideas, feel free to reach out! You can find me on LinkedIn – Elvis Maki (link is also on my GitHub profile).

Thanks for stopping by — and happy coding! 🚀

--------------------------------------------


Prerequisites:

Ensure you have the following installed before proceeding:

PHP 8.x

Composer

Node.js & npm

Git

Laravel 11

-------------------------------------------

1. Clone the Repository

        git clone https://github.com/edot14/LaravelFinalProject.git
        cd LaravelFinalProject

2. Install Dependencies

Install the PHP and JavaScript dependencies:

        composer install
        npm install

If you get this error after running npm run dev:

'vite' is not recognized as an internal or external command

That means dependencies haven't been installed yet. 

Run this command:

        npm install

3. Set Up the .env File

Laravel needs a .env file for environment config. 
If it’s missing:

        cp .env.example .env

Then generate your application key:

        php artisan key:generate

If you get this error:

- "file_get_contents(.env): Failed to open stream: No such file or directory"

- It means the .env file was not copied or created. Run the cp command above.

4. Set Up SQLite Database (Optional if using SQLite)

- If you're using SQLite and get this error:

- "Database file at path [.../database/database.sqlite] does not exist."

- Create the database file:

- From the project root
    
        type nul > database/database.sqlite

Or manually:

- Go to /database

- Create a file named database.sqlite

- Then update .env:

        DB_CONNECTION=sqlite
        DB_DATABASE=./database/database.sqlite

- Now run: 

        php artisan migrate

- In another terminal, start Vite: 

        npm run dev.


- Final set up includes: 

        npm run dev
        php artisan serve

Laravel runs at: http://127.0.0.1:8000

Vite runs at: http://localhost:5173 (this is for hot reload, not the main app)

If you see the Laravel + Vite welcome screen. Instead of your app, you haven't started the Laravel server, or the app is pointing to the wrong route.

Troubleshooting.
    Vite shows “undefined APP_URL”
    Make sure your .env file has:

        APP_URL=http://127.0.0.1:8000

        And restart npm run dev.

- Key not generating?

- Make sure .env exists and run:

        php artisan key:generate

- Still struggling?

- Make sure you’ve run:

        composer install
        npm install
        php artisan key:generate
        php artisan migrate
        npm run dev
        php artisan serve
-------------------------------------------
Features:

- Laravel 11 Backend
    
- Tailwind CSS for styling
    
- Job listings with categories
    
- Blade components for modular UI
    
- Dynamic filtering with Alpine.js


-------------------------------------------

Contribution:
Feel free to fork this project and submit pull requests!

License:
This project is open-source and available under the MIT License.
