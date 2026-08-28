# Eajen Rainier S. Benabese - Portfolio

A sleek, modern static online portfolio built with **Laravel** and **Tailwind CSS**, featuring a dark mode interface. This portfolio showcases personal information, educational background, work experience, skills, certifications, and projects.

## Features

- **Basic Information**: Name, profile picture (avatar), contact details, and a short bio
- **Educational Background**: Schools attended, years, and degrees/certifications
- **Work Experience**: Detailed professional history with achievements
- **Skills & Certifications**: Interactive skill bars and certification listing
- **Projects**: Responsive grid showcasing work with descriptions
- **GitHub Repository Links**: Clickable icons and links to source code
- **Dark Mode**: Sleek dark theme throughout
- **Responsive Design**: Mobile-friendly layout with navigation menu
- **Smooth Scrolling**: Animated navigation between sections

## Technologies Used

- [Laravel](https://laravel.com) - PHP Framework
- [Tailwind CSS](https://tailwindcss.com) - Utility-first CSS framework
- Blade Templating Engine
- Vite for asset compilation

## Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM

## Installation

1. Clone the repository:

```bash
git clone https://github.com/benabeseeajen-hue/portfolio.git
```

2. Navigate to the project directory:

```bash
cd portfolio
```

3. Install PHP dependencies:

```bash
composer install
```

4. Install JavaScript dependencies:

```bash
npm install
```

5. Generate application key:

```bash
cp .env.example .env
php artisan key:generate
```

6. Build frontend assets:

```bash
npm run build
```

7. Start the development server:

```bash
php artisan serve
```

8. Visit `http://localhost:8000` in your browser.

## Customization

To customize the portfolio content, edit the following files:

- `resources/views/portfolio.blade.php` - Main portfolio template

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Author

**Eajen Rainier S. Benabese**
- GitHub: [@benabeseeajen-hue](https://github.com/benabeseeajen-hue)
- Email: benabeseeajen@gmail.com
- Location: Bangued, Abra
