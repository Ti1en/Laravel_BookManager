# Laravel BookManager

A simple Book Manager application built with PHP and Laravel. This application demonstrates basic CRUD (Create, Read, Update, Delete) operations for managing books.

## Description

Laravel BookManager is a web application that allows users to manage a collection of books. Users can create, view, update, and delete book records. This project serves as an example of using Laravel for building CRUD functionalities.

## Features

- Add new books with title, author, and publication year
- View a list of all books
- Edit details of an existing book
- Delete books

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Ti1en/Laravel_BookManager.git
   cd Laravel_BookManager
   
2. Install the dependencies:
    ```bash
    composer install
    npm install
    npm run dev

3. Copy the .env.example file to .env and configure your environment variables:
    ```bash
    cp .env.example .env

4. Generate the application key:
    ```bash
    php artisan key:generate

5. Run the migrations to set up the database:
    ```bash
    php artisan migrate

6. Start the local development server:
    ```bash
    php artisan serve

7. Visit http://localhost:8000 in your web browser.

## Usage
To add a new book, click on the "Create New Book" button and fill in the form.
To edit or delete a book, use the corresponding buttons in the book list.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).v