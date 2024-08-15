# LRA-Website
Repository for the website developed for LRA.

## Cloning to Local Repository
1. Clone the repository in your local machine.
2. On the root directory *C:~\LRA-Website* of the project, open the terminal and type in `composer install`.
3. Wait for composer to install, once done, check if the directory has a `.env` file, if none, type in the terminal `cp .env.example .env` This will copy the contents of the .env.example to make a new .env file with the configurations.
4. This project uses mysql, install mysql in your PC or simply use the XAMPP installed and make sure to take note of the port number (default: 3306).
5. Before serving, don't forget to migrate to the database, type in the terminal `php artisan migrate`.
6. Be sure to type `php artisan key:generate` in the terminal.
7. Serve the codebase, type in the terminal `php artisan serve`.

Open another terminal within VS Code.
8. Install npm dependencies with `npm install`.
9. Run `npm run dev` to compile assets and load the development environment.


## Pages explanation
- The code for the pages are within `/resources/views/..` directory.
- Under `/views/..` directory there is `/includes/..` and `/layout/..` directory.
- The `/includes/` directory contains the footer and the header for all pages.
- The `/layout/` directory contains the main template for the pages to follow, so that each head tags are consistent without rewriting.
