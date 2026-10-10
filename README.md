# ECOPS — Citizen Service Portal

ECOPS is a PHP and MySQL-based citizen service portal designed to provide access to public safety information and citizen-oriented services through a web interface.

## Features

- **User Registration and Login:** Account registration and login interface.
- **Crime Reporting:** Submit crime reports through an online form.
- **Women's Safety Portal:** Dedicated interface for submitting women's safety complaints.
- **Complaint Tracking:** Look up submitted complaints using the available case lookup feature.
- **Police Information:** Access police-related information and public safety resources.
- **Contact Form:** Submit messages through the contact page.
- **Informational Resources:** Browse achievements, photo galleries, self-defence tips, and important contact numbers.

## Technology Stack

- PHP
- MySQL
- HTML5 and CSS3
- Bootstrap
- JavaScript

## Project Structure

```text
Ecops/
├── ECOPS.php
├── ECOPS2.php
├── connection.php
├── registrationp.php
├── registercrimeee.php
├── women.php
├── case.php
├── cased.php
├── contact.php
├── about.php
├── polices.php
├── selfd.php
├── achi.php
├── photog.php
├── impno.php
├── a.css
├── css/
├── images/
├── fonts/
├── bootstrap/
└── pdf/
```

## Prerequisites

- PHP with the MySQLi extension enabled
- MySQL or MariaDB
- A local PHP development environment, such as XAMPP
- A web browser

## Local Setup

1. Install and start Apache and MySQL using your local PHP development environment.
2. Place the project folder in your web server's document root.
3. Create a MySQL database named `ecops`, or configure the application to use your chosen database name.
4. Import the database schema required by the application. The database schema was not included in the project archive, so it must be obtained or documented separately before the application can run correctly.
5. Configure the database connection using your local environment settings.
6. Start Apache and MySQL.
7. Open the project through your local web server, for example:

   `http://localhost/Ecops/ECOPS.php`

## Security Notes

Before deploying this project publicly:

- Use prepared statements for database queries.
- Store passwords using PHP's password hashing functions.
- Keep database credentials and API keys out of source control.
- Validate submitted data and escape output rendered in HTML.
- Protect sessions and restrict access to private complaint information.
- Configure external API keys with appropriate restrictions.

## Development Status

This project is being improved incrementally, with a focus on security, maintainability, documentation, and reliable citizen-service workflows.

## License

Review the licenses of bundled third-party libraries and assets before redistributing the project.