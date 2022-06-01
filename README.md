# Hype IT-test

A mini project put together in pure PHP with no use of a framework.

## To run
Clone this repo into the desired directory.

Set up the MySQL database using:
```sql
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `developer` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `developer`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
```
Change the `DB_HOST` variable in `config/database.php` to the name of your host i.e. `localhost`

With that set up, you can now run the following from the terminal in the working directory:
```sh
php -S localhost:8000
```
You can then access the index page via [http://localhost:8000/public/index.php](http://localhost:8000/public/index.php) in your browser to start navigating around.

### Featuring
- User registration form
- User login form
- Password hashing for security
- Scope for adding `admin` type users
- User dashboard displaying list of all users
- MySQL connection
    - Subsequent SQL commands to produce the necessary database is provided in `config/database.php`
- Error flash messages
- Input sanitization
- Validation

## Given more time...
- I would like to fix the routing structure so it looks better from the browser, but I felt it was outside the scope of the task
- Create a nav-bar where the login/logout and other nav  items could be nested.
- Give a closer aesthetic to the [existing website](https://hype.com/)
- Extend the project set up to be deployable using docker. It was developed using containers.
