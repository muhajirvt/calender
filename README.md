<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# My Laravel Project

Holidays Calender

# Overview

Showing holidays in the calender event

## Installation

Follow these steps to set up the project locally.

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

Clone the repository:

`git clone https://github.com/muhajirvt/calender.git`

### Install dependencies:

`composer install`

`npm install`

`npm run dev`

### Set up the environment file:

cp .env.example .env

Configure your .env file with your database credentials.

`php artisan config:clear`

### Run migrations:
    
`php artisan migrate`

### Run Command for storing holidays to database:

`php artisan store:holidays`

### Serve the application:

`php artisan serve`

   




