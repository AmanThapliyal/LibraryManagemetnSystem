# Library Management System

This project is a Library Management System (LMS) developed using HTML and PHP. It provides functionality to manage books and members in a library.

## Features

- Add new books to the library.
- Register new members.
- Search for books.
- View the catalogue of books.

## File Structure

The project consists of the following files:

- `index.html`: The home page of the Library Management System.
- `connectDB.php`: PHP script to connect to the database.
- `Register_memb.php`: PHP script to handle member registration.
- `search_book.php`: PHP script to search for books.
- `search_book.html`: HTML form to search for books.
- `Addbook.html`: HTML form to add new books.
- `Addbook.php`: PHP script to add new books to the database.
- `Register_memb.html`: HTML form to register new members.
- `catalogue.php`: PHP script to display the book catalogue.

## Getting Started

### Prerequisites

- A web server with PHP support (e.g., XAMPP, WAMP, LAMP).
- MySQL database.

### Installation

1. **Download and Extract:**
   - Download the project files and extract them to your web server's root directory (e.g., `htdocs` for XAMPP).

2. **Database Setup:**
   - Create a MySQL database named `library`.
   - Create the necessary tables (`books`, `members`) in the `library` database. You can use the following SQL statements to create the tables:

   ```sql
   CREATE TABLE books (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       author VARCHAR(255) NOT NULL,
       genre VARCHAR(100),
       year INT
   );

   CREATE TABLE members (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL,
       phone VARCHAR(15)
   );
