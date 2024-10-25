# Bookstore

An online bookstore built with PHP using OOP principles and MySQL, offering features like cart management, currency preference, and session handling.

## Features

1. **Database Setup**:
   - MySQL database `bookstore` with a `books` table (id, title, author, price).
   - Populated with sample data.

2. **Classes**:
   - `Book`: Manages book operations (fetching and displaying).
   - `Cart`: Handles adding/removing books and calculating total price.

3. **Pages**:
   - **Homepage**: Welcomes users with a dynamic message.
   - **Book List**: Displays books with an "Add to Cart" button.
   - **Cart**: Shows selected books, using sessions for persistence.
   - **Preferences**: Allows currency selection via cookies.
   - **Logout**: Clears sessions and redirects to the homepage.

## Installation

1. Clone this repository.
2. Import `bookstore.sql` to create the database.
3. Update `db_connection.php` with your database credentials.

## Usage

1. View books, add them to your cart, and set a preferred currency.
2. Check out the cart and log out to clear sessions.
