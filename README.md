# Laiba Portfolio

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT) [![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com) [![PHP](https://img.shields.io/badge/PHP-8.2%2B-brightgreen.svg)](https://www.php.net) [![MySQL](https://img.shields.io/badge/MySQL-%3E%3D8.0-blue.svg)](https://www.mysql.com)

## Overview

**Laiba Portfolio** is a premium personal portfolio and portfolio management system built with **Laravel 12**, **PHP 8+**, **MySQL**, **Bootstrap 5**, **HTML5**, **CSS3**, and **JavaScript**. It provides a modern public portfolio website with a custom admin dashboard for managing projects, experience, skills, education, certifications, contact messages, and site settings.

- Owner: **Laiba Rafique**
- Role: **Junior Full Stack Web Developer**
- Live Portfolio: **(Add live URL here)**
- GitHub: [https://github.com/laibarafique25](https://github.com/laibarafique25)
- LinkedIn: [https://www.linkedin.com/in/laiba-rafique-6745623b9/](https://www.linkedin.com/in/laiba-rafique-6745623b9/)

## Table of Contents

- [Features](#features)
- [Screenshots](#screenshots)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Environment Configuration](#environment-configuration)
- [Admin Login](#admin-login)
- [Folder Structure](#folder-structure)
- [Future Improvements](#future-improvements)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Features

### Public Portfolio

- Dynamic hero section
- Services display
- Featured projects with live demo and GitHub links
- Experience timeline
- Skills & technology stack
- Education section with links
- Certifications gallery
- Contact form with admin message management
- CV download button
- Responsive mobile-first design
- SEO-friendly page structure
- Dark luxury UI inspired by Linear, Vercel, and Framer

### Admin Panel

- Secure authentication for admin users
- Dashboard analytics overview
- Project management (CRUD)
- Experience management (CRUD)
- Skills management (CRUD)
- Education management (CRUD)
- Certifications management (CRUD)
- Site settings management
- Contact message review
- Image upload and file upload support

## Screenshots

> Add your own screenshots in the `screenshots/` folder and update these links.

- `screenshots/hero.png`
- `screenshots/projects.png`
- `screenshots/admin-dashboard.png`
- `screenshots/admin-project-form.png`

## Tech Stack

### Frontend

- HTML5
- CSS3
- Bootstrap 5
- JavaScript

### Backend

- PHP 8+
- Laravel 12

### Database

- MySQL

### Tools

- Git
- GitHub
- VS Code
- XAMPP

## Installation

1. Clone the repository:

```bash
git clone https://github.com/laibarafique25/laiba-portfolio-laravel.git
cd laiba-portfolio-laravel
```

2. Install PHP dependencies:

```bash
composer install
```

3. Copy the environment file and generate an application key:

```bash
copy .env.example .env
php artisan key:generate
```

4. Configure your database in `.env`.

5. Run migrations and seed the database:

```bash
php artisan migrate --seed
```

6. Create the storage symlink:

```bash
php artisan storage:link
```

7. Serve the application locally:

```bash
php artisan serve
```

## Database Setup

Set the following variables in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laiba_portfolio
DB_USERNAME=root
DB_PASSWORD=
```

Then run:

```bash
php artisan migrate --seed
php artisan storage:link
```

If you need to refresh the database:

```bash
php artisan migrate:fresh --seed
```

## Environment Configuration

Key `.env` settings:

- `APP_NAME` — Application name
- `APP_URL` — Local URL (e.g. `http://localhost:8000`)
- `DB_*` — Database credentials
- `MAIL_*` — Optional mail settings for contact form notification

## Admin Login

The admin dashboard is accessible via the admin login route, typically:

- `http://localhost:8000/admin/login`

Default seeded admin credentials:

- Email: `admin@laiba.dev`
- Password: `password`

> Change the default password immediately after login for security.

## Folder Structure

```text
app/
  Http/Controllers/         # Public and admin controllers
  Models/                   # Eloquent models
  Http/Controllers/Admin/   # Admin dashboard controllers

config/                     # Application configuration

database/
  migrations/               # Database schema definitions
  seeders/                   # Seeder classes

public/                     # Public assets and storage proxy
resources/
  views/                    # Blade templates
    admin/                   # Admin dashboard views
    layouts/                 # Shared layout templates

routes/
  web.php                   # Web routes
```

## Future Improvements

- Add multi-language support
- Implement searchable and filterable admin tables
- Add email notifications for contact form submissions
- Add role-based admin access and permissions
- Add automated testing with PHPUnit and Pest
- Add user-friendly file preview and drag-and-drop uploads
- Add portfolio analytics and performance monitoring

## Contributing

Contributions are welcome! If you'd like to contribute:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/name`)
3. Commit your changes (`git commit -m "Add feature"`)
4. Push to your branch (`git push origin feature/name`)
5. Open a pull request

Please keep the project aligned with the existing Laravel structure and naming conventions.

## License

This project is licensed under the MIT License.

## Contact

- GitHub: [laibarafique25](https://github.com/laibarafique25)
- LinkedIn: [Laiba Rafique](https://www.linkedin.com/in/laiba-rafique-6745623b9/)
- Portfolio: **(Add live URL here)**
