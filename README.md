# PHP Test Task - Custom Blog Application

This is a simple working example of a blog application built with native PHP 8+ without using any external frameworks (except for the Smarty template engine). It features a custom router, an MVC-like architecture, and a MySQL database connection using PDO.

## 🚀 How to Run This App

The application runs entirely within Docker to ensure a consistent environment.

### Prerequisites

- Docker and Docker Compose installed on your machine.

### Next Steps to Start

1. **Start Docker Compose**
   Launch the application stack (Nginx, PHP, MySQL) in the background:

   ```bash
   docker compose up -d --build
   ```

2. **Run Migrate Script**
   Create the necessary database tables (`categories` and `posts`):

   ```bash
   docker compose exec app php scripts/migrate.php
   ```

3. **Run Seed Script**
   Populate the database with dummy data for categories and posts:
   ```bash
   docker compose exec app php scripts/seed.php
   ```

Once these steps are completed, the application should be available at `http://localhost:8080` in your web browser.

## 📂 Application Structure

The application is structured to follow standard modern PHP practices:

- **`app/`**: Contains the core application code.
  - **`Config/`**: Configuration files (e.g., Database connection).
  - **`Controllers/`**: Handle incoming HTTP requests, interact with models, and return responses.
  - **`Models/`**: Represent data entities (Category, Post) and handle database interactions via PDO.
  - **`Views/`**: Contains Smarty templates (`.tpl` files) for rendering the UI.
  - **`Router.php`**: A custom routing engine that maps URLs to Controller actions.
  - **`Bootstrap.php`**: Initializes the application, setting up error handling, routing, and configurations.
- **`public/`**: The web root directory. Contains `index.php`, the single entry point for all requests.
- **`scripts/`**: CLI utility scripts for database management (`migrate.php`, `seed.php`, `db_data.php`).
- **`migrations/`**: Contains raw SQL files used to create the database schema.
- **`ROADMAP.md`**: Outlines project requirements and development progress.
- **`docker-compose.yml` & `Dockerfile` & `nginx.conf`**: Docker infrastructure configuration files.

## ⚙️ How Main Features Are Working

- **Custom Routing:**
  All requests are directed to `public/index.php` (via Nginx rewrite rules). The `App\Router` class parses the request URI and method, matching it against defined routes to instantiate the appropriate Controller and call the relevant method. It supports both static and dynamic routes.

- **MVC Architecture Pattern:**
  - **Controllers** act as the glue. They receive the request, fetch necessary data from the Models, and pass it to the view layer.
  - **Models** interact with the MySQL database using standard PHP Data Objects (PDO) with prepared statements to prevent SQL injection. They encapsulate all data retrieval and manipulation logic.
  - **Views** use the Smarty template engine to render dynamic HTML pages. They display lists of categories, paginated posts, and individual post details safely.

- **Database Migrations and Seeding:**
  Instead of relying on an ORM or migration library, the app uses custom CLI PHP scripts (`scripts/migrate.php` and `scripts/seed.php`) to execute raw SQL schema definitions from the `migrations/` folder and insert initial test data into the MySQL database.

- **No Frameworks:**
  Everything from autoloading (via Composer's PSR-4 autoloader) to routing and database connections is implemented from scratch natively in PHP 8+, demonstrating a strong understanding of core PHP mechanics.

## 🤖 AI Assistance

During the development of this project, AI tools were leveraged to accelerate certain tasks:

- 📝 **Documentation:** Generating and formatting this `README.md` file.
- 🐛 **Debugging:** Pinpointing small bugs and identifying missing code logic.
- 💾 **Database Queries:** Providing structure and examples for SQL queries.
- 🎨 **Templating:** Assisting with the creation and syntax of Smarty `.tpl` files.
