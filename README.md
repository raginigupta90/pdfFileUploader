# PDF File Uploader

This repository contains the code for a PDF File Uploader, allowing users to upload PDF files through a web interface.

## Prerequisites

### Technical Knowledge
- Basic understanding of PHP
- Basic HTML and CSS

### Software Requirements
1. XAMPP Server or any other PHP server
2. Text Editor (e.g., Notepad++)
3. Web Browser

## Project Structure

- `dbcon.php`: Handles database connection.
- `index.php`: Main script for uploading PDF files.
- `style.css`: Stylesheet for the web interface.

## Setting Up the Application

1. **Start XAMPP**: Open the XAMPP control panel and start Apache and MySQL.
2. **Clone Repository**: Clone this repository into the `htdocs` directory of your XAMPP installation.
3. **Create Database and Tables**: Use phpMyAdmin to create a new database (e.g., `pdfUploader`). Create necessary tables as required by the application.
4. **Configure Database Connection**: Update `dbcon.php` with your database details.
5. **Run the Application**: Open your web browser and navigate to `http://localhost/pdfFileUploader/index.php`.

## Usage

1. Open `index.php` in a web browser.
2. Use the provided form to select and upload a PDF file.
3. The uploaded file will be stored in the specified directory, and the file details will be saved in the database.

## About

This project is a simple PHP application designed to upload and store PDF files. It includes a user-friendly interface for selecting and uploading files, with backend functionality to handle file storage and database management.

For more details, visit the repository [here](https://github.com/raginigupta90/pdfFileUploader).
## Happy Coding !!
