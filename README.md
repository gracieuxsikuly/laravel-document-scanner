
# Laravel Document Scanner

Laravel Document Scanner is a web application built with Laravel and Livewire that allows users to scan documents using a selected printer device and manage the scanned files efficiently.

## Features
- Select and list available printer devices.
- Scan documents directly from the web interface.
- Display scanned documents in real-time.
- Save scanned documents to the server.

## Installation

### Prerequisites
- PHP 8.x or higher
- Composer
- Laravel 9.x or higher
- NAPS2 (for document scanning)
- A working printer/scanner device

### Steps to Install

1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/laravel-document-scanner.git
   cd laravel-document-scanner
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Set up environment variables:**
   - Copy the `.env.example` file to `.env`.
   - Update database credentials and other configurations.

4. **Run migrations:**
   ```bash
   php artisan migrate
   ```

5. **Install NAPS2:**
   - [Download NAPS2](https://www.naps2.com/) and install it on your system.
   - Ensure the NAPS2 Console is available in your PATH or adjust the path in your application accordingly.

6. **Serve the application:**
   ```bash
   php artisan serve
   ```

7. **Access the application:**
   - Open your web browser and go to `http://localhost:8000`.

## Usage
- **Select a Printer:** Choose the printer device from the list to scan a document.
- **Scan a Document:** Click the scan button and wait for the document to be processed.
- **View Scanned Documents:** The scanned document will be displayed in the interface and saved to the server.

## Contributing
Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
```
