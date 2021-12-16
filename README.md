# php-crud-with-authorisation

This project was created as a homework at Plovdiv University

Backend is implemented with pure PHP; Database is implemented with MySQL


In application there's authorising opportunity, and CRUD of table


# Install locally

### Cloning

```
git clone git@github.com:sasha-ajin/php-crud-with-authorisation.git
```

### Connect MySQL

Create database with this structure

```
.
├── ...
├── test                    # Test files (alternatively `spec` or `tests`)
│   ├── benchmarks          # Load and stress tests
│   ├── integration         # End-to-end, integration tests (alternatively `e2e`)
│   └── unit                # Unit tests
└── ...
```

In **connect_db.php** change server, userid, password and db name of the database you want to connect

```
...
$connect = mysqli_connect('127.0.0.1:3306','root','','**');
...
```

### Running

```
php -S 127.0.0.1:8080
```
Go to http://127.0.0.1:8080/tickets.php
