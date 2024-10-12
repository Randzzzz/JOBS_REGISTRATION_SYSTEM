CREATE TABLE admin_records (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (50),
    last_name VARCHAR (50),
    gender VARCHAR (50),
    experiences VARCHAR (50),
    dba_level VARCHAR (50),
    roles VARCHAR (50), 
    email VARCHAR (50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);