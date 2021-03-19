CREATE SCHEMA IF NOT EXISTS cinema;

CREATE TABLE IF NOT EXISTS cinema.users
(
    id         bigint NOT NULL AUTO_INCREMENT,
    name       varchar(200)  NOT NULL,
    email      varchar(200)  NOT NULL UNIQUE,
    password   varchar(200)  NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS cinema.director
(
    id		int NOT NULL AUTO_INCREMENT,
    name	text,
    surname	text,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS cinema.film
(
    id 			int NOT NULL AUTO_INCREMENT,
    film_title		text,
    year 		int,
    director_id		int,
    genre		text,
    url 		varchar(200),
    description 	text,
    running_time 	int,
    PRIMARY KEY (id),
    FOREIGN KEY (director_id) REFERENCES cinema.director (id)  
);

CREATE TABLE IF NOT EXISTS cinema.film_dates
(
    id			int NOT NULL AUTO_INCREMENT,
    film_date		timestamp NOT NULL,
    film_id		int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (film_id) REFERENCES cinema.film (id)  
);

CREATE TABLE IF NOT EXISTS cinema.film_hours
(
    id			int NOT NULL AUTO_INCREMENT,
    film_date_id	int NOT NULL,
    film_hour		time NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (film_date_id) REFERENCES cinema.film_dates (id)  
);