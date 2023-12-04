CREATE TABLE IF NOT EXISTS customer(
    id INT NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(50) NOT NULL,
    postname VARCHAR(50) NOT NULL,
    sex VARCHAR(10) NOT NULL,
    local_address VARCHAR(100) NOT NULL,
    phone_number INT NOT NULL,
    mail_address VARCHAR(100) NOT NULL,
    solde FLOAT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS admin_user(
    id INT NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(50) NOT NULL,
    postname VARCHAR(50) NOT NULL,
    sex VARCHAR(10) NOT NULL,
    phone_number INT NOT NULL,
    mail_address VARCHAR(100) NOT NULL,
    password_key VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);