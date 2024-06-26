# Laravel + Inertia.js + Vue.js + Tailwind CSS Template

<p align="center">
    <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" width="100"/>
    <img src="https://avatars.githubusercontent.com/u/47703742?s=200&v=4" alt="Inertia.js" width="100"/>
    <img src="https://vuejs.org/images/logo.png" alt="Vue.js" width="100"/>
    <img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg" alt="Tailwind CSS" width="100"/>
    
</p>

This template is a boilerplate for starting a project using Laravel, Inertia.js, Vue.js, and Tailwind CSS. It helps you to get started quickly and provides a basic structure that you can build upon.

## Features

- Laravel 10.x
- Inertia.js
- Vue.js 3
- Tailwind CSS 3

## Prerequisites

Make sure you have the following installed on your system:

- PHP >= 8.0
- Composer
- Node.js & npm

## Installation

Follow these steps to install the project:

1. Clone this repository:

  
2. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```

3. Install JavaScript dependencies using npm:

    ```bash
    npm install
    ```

4. Copy the `.env.example` file to `.env` and set up your database configuration:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Build the front-end assets:

    ```bash
    npm run dev
    ```

6. Start the local Laravel server:

    ```bash
    php artisan serve
    ```

Open your browser and navigate to `http://localhost:8000`.

## Directory Structure

Here is the main directory structure of this project:
project-template/  
├── app/  
├── bootstrap/  
├── config/  
├── database/  
├── public/  
├── resources/  
│ ├── css/  
│ ├── js/  
│ │ ├── Pages/  
├── routes/  
├── storage/  
├── tests/  
├── vite.config.js  
├── tailwind.config.js  
├── package.json  
├── composer.json  
└── .env.example 

## Commands

I have created some commands to simplify the creation of Vue files:

- `php artisan make:inertia-page {filename}`  
  This command will create a .vue file in the `resources/js/Pages/` path.

- `php artisan make:inertia-crud {foldername}`  
  This command will create a folder under the `resources/js/Pages/` path with Index.vue, Edit.vue, and Create.vue files.

- `php artisan make:inertia-component {componentname}`  
  This command will create a .vue file in the `resources/js/Components/` path.


## Contributing

We welcome contributions from everyone. If you find any bugs or have ideas for improvements, feel free to create an issue or a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
