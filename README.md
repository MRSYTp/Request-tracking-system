
# Request Tracking System

## Overview
This project is a request tracking system designed to manage user requests. It allows users and admins to submit, manage, and track requests. Users can submit requests by specifying priorities and categories, as well as attaching files such as images, PDFs, and Word documents. Admins can manage these requests and view detailed information about their status.

## Features

### For Users:
- **Request Submission**: Users can submit their requests by specifying priority and category.
- **File Attachment**: Users can attach files such as images, PDFs, and Word documents to their requests.
- **View Requests**: Users can view their submitted requests and add more information if necessary.

### For Admins:
- **Manage Requests**: Admins can view requests and filter them by category, priority, or status (open or closed).
- **View Reports**: Admins can view reports showing the number of open, closed, priority, and category-based requests.
- **Request Details**: Admins can view the complete details of each request, including attached files and additional notes.
- **Change Request Status**: Admins can close or reopen requests, and an email will be sent to the user when the request is closed.

## Features:
- **Verta**: A package used for handling Persian dates in the system.
- **PHPMailer**: A package for sending emails, used to notify users when a request is closed.

## Project Setup

### URL and Path Configuration:
To set up the project, go to `bootstrap/constants.php` and configure the following constants:
```php
define("TRACK_URL", "http://localhost/Traking-system/");
define("TRACK_PATH", "C:/xampp/htdocs/Rucket.RF2/Traking-system/");
```

### Database:
The project requires a database to store user and request data. The SQL file is included in the project and should be imported into PHPMyAdmin.

### Installation and Setup:
1. **Download or Clone the Project**
   Clone the project from GitHub:
   ```bash
   git clone https://github.com/MRSYTp/Request-tracking-system.git
   ```

2. **Configure Constants**
   Go to the `bootstrap/constants.php` file and set the `TRACK_URL` and `TRACK_PATH` constants according to your project path.

3. **Set Up Database**
   Upload the SQL database file to PHPMyAdmin to create the necessary tables for the project.

4. **Email Configuration (Optional)**
   If you need to send emails to users, configure the email settings in the project.

5. **Run the Project**
   Open the project in your browser and start using the request tracking system.

## Usage

### User Registration and Login:
Users can register and log in using the provided forms and submit their requests.

### Admin Request Management:
Admins can view and manage submitted requests after logging in. Admins can change the status of requests, and when a request is closed, an email will be sent to the user.

### Request Prioritization and Categorization:
Users can define the priority and category for their requests when submitting them.

---

## License
This project doesn't currently have a license.

## Contact Me
For any inquiries or assistance, feel free to contact me:
- **Email**: [mo.salehi1387p@gmail.com](mailto:mo.salehi1387p@gmail.com)
- **LinkedIn**: [Mohamadreza Salehi](https://www.linkedin.com/in/mohamadreza-salehi-5681a2339/)
