# Project Setup

## Settings

### Step 1: Clone the repository

```bash
git clone https://github.com/alexsanders-git/php-teacher-schedule.git
cd project-name
```

### Step 2: Set up a database connection

Before running the application, you need to configure the connection to the database. Create or update
the `config/db-config.php`
file with the database settings. Example of configuration:

```php
$db_config = [
	'host' => 'localhost',
	'dbname' => 'your_database_name',
	'username' => 'your_username',
	'password' => 'your_password',
	'charset' => 'utf8', // utf8mb4,
	'options' => [
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	],
];
```

### Step 3: Create tables in the database

For the application to work, you need to create tables in the database. Use the following SQL commands to create the
necessary tables:

```sql
CREATE TABLE schedule
(
    id      INT AUTO_INCREMENT PRIMARY KEY,
    day     VARCHAR(255),
    subject VARCHAR(255)
);

CREATE TABLE teachers
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name  VARCHAR(255)
);

CREATE TABLE teacher_schedule
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    teacher_id  INT NOT NULL,
    schedule_id INT NOT NULL,
    FOREIGN KEY (teacher_id) REFERENCES teachers (id),
    FOREIGN KEY (schedule_id) REFERENCES schedule (id)
);

```