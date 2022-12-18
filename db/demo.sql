CREATE TABLE `member` (
        `username` VARCHAR(255) NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) NOT NULL,
        `fullname` VARCHAR(255) NOT NULL,
    
    ) ENGINE = MyISAM'

CREATE TABLE acc_user (
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

UPDATE
    acc_user
SET
    username = '',
    password = ''
WHERE
    username = ''
    AND password = '';

INSERT INTO
    acc_user (user_id, username, password, email)
VALUES
    (
        '1',
        'khang1',
        'bruh1',
        'bruh@gmail.com'
    ),
    (
        '2',
        'khang2',
        'bruh2',
        'bruh@gmail.com'
    ),
    (
        '3',
        'khang3',
        'bruh3',
        'bruh@gmail.com'
    ),
    (
        '4',
        'khang4',
        'bruh4',
        'bruh@gmail.com'
    ),