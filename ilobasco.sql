create database ilobasco;

create user 'ilobasco'@'localhost' identified by 'ilobascopwd';

grant all privileges on ilobasco.* to 'ilobasco'@'localhost';