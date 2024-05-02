# XAMPP Stack using Docker (Compose)

You can use this stack to replace your XAMPP instances. It contains a very basic setup with:
- PHP 8.2
- MariaDB 11.3.2
- PHPMyAdmin 5.2.1

**You should only use this for testing/development! It is NOT suitable for production.**

## Configuration
- Database:
 - Root user: _root_
 - Root password: _root_
 - Secondary user: _user_
 - Secondary user password: _user_
 - Hostname: _db_
 - Data is stored in the `mariadb_data` directory
- PHPMyAdmin:
 - Autologin using the credentials above
- PHP:
 - Enabled Apache modules: _rewrite_
 - Installed extensions: _mysqli_, *pdo_mysql*, _pdo_

## Using the database in PHP
To use the database in your PHP application, you can refer to the database using it's hostname (_db_). Check the example `src/index.php` file.

## Running
To run the stack, do the following:
1. Download and install Docker for your OS.
2. Clone this repo.
  ```sh
  $ git clone ... my-web-stack
  ```
3. Open a Terminal in the directory containing this repo.
  ```sh
  $ cd my-web-stack
  ```
4. Use Docker Compose to run.
  ```sh
  $ docker compose up --build
  ```

To run in the background you can add the `-d` flag to the last command, like this:
```sh
$ docker compose up -d --build
```

Note that you don't need to rebuild the stack every time you change the `src/` directory.
