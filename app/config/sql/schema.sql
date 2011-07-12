drop table makes;
drop table cmodels;
drop table motors;
drop table cars;
drop table revisions;
drop table owners;
drop table users;

create table makes(
    id SERIAL NOT NULL primary key,
    name varchar(100) not null
);

create table cmodels(
    id SERIAL NOT NULL primary key,
    make_id integer not null,
    name varchar(100) not null
);

create table motors(
    id SERIAL NOT NULL primary key,
    cmodel_id integer not null,
    name varchar(100) not null
);

create table cars(
    id SERIAL NOT NULL primary key,
    make_id integer not null,
    cmodel_id integer not null,
    motor_id integer not null,
    vim_number varchar(100) not null,
    name varchar(100) not null
);

create table owners(
    id SERIAL NOT NULL primary key,
    car_id integer not null,
    firstname varchar(100) not null,
    lastname varchar(100) not null,
    phone varchar(100) not null,
    cellphone varchar(100) not null
);

create table revisions
(
    id SERIAL NOT NULL primary key,
    car_id integer not null,
    revision_date date not null,
    description text not null,
    next_revision date not null,
    price float not null
);

CREATE TABLE users (
    id SERIAL NOT NULL primary key,
    username char(50),
    password char(40)
);

insert into users (username, password) VALUES ('admin', '18b4d6bd1c2197f25b5e9ea2c412c47857a3543f');
