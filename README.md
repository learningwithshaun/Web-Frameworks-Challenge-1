<<<<<<< HEAD
# Laravel Framework Practice Exercise  
## Routes, Middleware, Controllers & Views  

---

## Objective
This exercise will help you practice essential Laravel skills covered in class, including:
- Defining routes  
- Using route parameters  
- Creating middleware  
- Implementing controllers  
- Passing data to views  

---

## Scenario
You are developing a simple web application for a **bookstore**.  

The app will:
- Display a list of books  
- Allow users to view details of a selected book  
- Restrict access to certain pages using middleware  

---

## 📝 Tasks

### 1. Setting Up Routes (`web.php`)
- Define a route for the homepage (`/`) that returns a welcome view  
- Create a route that displays a list of books (`/books`)  
- Create a route to display book details (`/books/{id}`) using a route parameter  
- Implement a named route for a **Contact Us** page (`/contact`)  

---

### 2. Route Parameters & Named Routes
- Modify the book details route (`/books/{id}`) to accept an **optional category parameter**  
- Use the `route()` function to generate a URL for the named **Contact Us** route in a view  

---

### 3. Implementing Middleware
- Create a middleware named `CheckAgeMiddleware`  
- Restrict access to a specific route (`/restricted`)  
- If the user’s age (passed via request) is below **18**:
  - Redirect them to the homepage  
  - Display an error message  
- Register the middleware and apply it to the `/restricted` route  

---

### 4. Working with Controllers
- Create a `BookController` with the following methods:

  - `index()`  
    - Returns a view with a list of books  

  - `show($id)`  
    - Returns book details for a given ID  

- Generate the controller and define **RESTful routes** in `web.php`  

---

### 5. Passing Data to Views
- Create a `books.blade.php` view:
  - Displays a list of books passed from `BookController`  

- Modify the book details route:
  - Pass book data dynamically to `book-details.blade.php`  

---

## Expected Outcome
By completing this exercise, you will:
- Understand Laravel routing and parameters  
- Work with middleware for access control  
- Use controllers to manage logic  
- Pass dynamic data to Blade views  
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> bcb7d05 (Added Bookstore App.)
