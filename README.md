
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

## Tasks

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
