<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# PageGenius Mini Project

PageGenius is a simple content management system (CMS) mini project built using the Laravel framework. This application allows users to create dynamic web pages based on pre-defined templates. There are two main roles in this system: **Admin** and **User**.

## Development Environment

This project was built and tested using the following environment:

- **PHP:** 8.2 or higher
- **Framework:** Laravel 11
- **Frontend:** Livewire, Tailwind CSS, Alpine.js
- **Database:** MySQL / MariaDB (customizable in `config/database.php`)
- **Web Server:** Apache / Nginx
- **Node.js & NPM:** For frontend asset management

## Installation Guide

Here are the steps to install and run this project in your local environment:

1. **Clone Repository**
```bash
git clone https://github.com/username/project-name.git
cd project-name
```

2. **Install Composer Dependencies**
Make sure you have Composer installed (https://getcomposer.org/). ```bash
composer install
```

3. **Install NPM Dependencies**
Make sure you have Node.js and NPM installed.
```bash
npm install
npm run build
```

4. **Configure Environment**
Copy the `.env.example` file to `.env` and configure your database connection.
```bash
cp .env.example .env
```
Open the `.env` file and set the following variables according to your database configuration:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

5. **Generate Application Key**
```bash
php artisan key:generate
```

6. **Migrate and Seed Database**
Run migrations to create the necessary tables and seeders to populate the initial data (including admin and user accounts).
```bash
php artisan migrate --seed
```
The above command will create the following tables and data:
- **Admin** account: `admin@example.com` with password `password`
- **User** account: `user@example.com` with password `password`
- Initial template for page creation.

7. **Run Development Server**
```bash
php artisan serve
```
The application will run on `http://127.0.0.1:8000`.

## Role-Based Features

### Role: Admin

Admins have full access to manage content and users in the system.

- **Admin Dashboard:** The main page after logging in that provides a summary of statistics or quick navigation to key features.
- **User Management:**
- View a list of all users registered in the system.
- View details about each user.
- **Template Management:**
- View a list of available templates.
- Add a new template by providing a name, description, and blade file.
- Edit existing template information.
- Delete a template from the system.

### Role: User

A user is a registered user who can create and manage their own pages.

- **User Dashboard:** Displays a list of pages created by the user.
- **Page Create:**
- Users can create a new page by selecting one of the available templates.
- Provide a title and slug (URL) for the new page.
- **Page Editor:**
- Once a page is created, the user is redirected to the visual editor.
- The editor allows users to edit text and image content directly within the selected template.
- Changes are automatically saved to ensure no data is lost.
- **Public Pages:** Every created page is accessible to anyone through a public URL (`/page/{slug}`).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).