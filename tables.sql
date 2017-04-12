CREATE DATABASE university;

CREATE TABLE university.students (
    id int(15) UNSIGNED NOT NULL AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    last_name varchar(25) NOT NULL,
    ssn char(9) NOT NULL,
    email varchar(40) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY `ix_ssn` (`ssn`)
    );

INSERT INTO university.students (name, last_name, ssn, email)
VALUES ("moshe", "cohen", "123456789", "moshe@gmail.com");

INSERT INTO university.students (name, last_name, ssn, email)
VALUES ("david", "levi", "987654321", "david@gmail.com");
CREATE TABLE university.lecturers (
        id int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
        name varchar(20) NOT NULL,
        last_name varchar(25) NOT NULL,
        ssn char(9) NOT NULL,
        email varchar(40) NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY `ix_ssn` (`ssn`)
        );

CREATE TABLE university.courses (
        id int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
        name varchar(30) NOT NULL,
        course_number int(10) UNSIGNED NOT NULL,
        faculty varchar(20) NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY `ix_course_number` (`course_number`)
        );
