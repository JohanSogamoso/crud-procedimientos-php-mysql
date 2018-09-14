create database final_phpCurd;
use final_phpCurd

create table ciudad(
    id_ciudad int primary key not null auto_increment,
    nombre_ciudad varchar(50) not null
);

insert into ciudad(nombre_ciudad) values ('Armenia'), ('Barrancabermeja'),('Barranquilla'),('Bogotá'),('Bucaramanga'),
('Buga'), ('Cali'), ('Cartagena'), ('Chía'), ('Cúcuta'), ('Duitama'), ('Florencia'), ('Fusagasugá'), ('Girardot'), ('Honda'),
('Ibagué'), ('Ipiales'), ('Jamundí'), ('Leticia'), ('Manizales'), ('Mariquita'), ('Medellín'), ('Mompox'), ('Montería'), ('Murillo'),
('Neiva'), ('Pamplona'), ('Pasto'), ('Pereira'), ('Popayán'), ('Riohacha'), ('San Andrés y Providencia'), ('San Antero'), ('Santa Marta'),
('Santafé de Antioquia'), ('Sevilla'), ('Sincelejo'), ('Sogamoso'), ('Tabio'), ('Tocancipá'), ('Tolú'), ('Tuluá'), ('Tumaco'), ('Tunja'),
('Valledupar'), ('Villavicencio'), ('Yopal'), ('Zipaquirá');

create table acudiente(
    id_acudiente int primary key not null auto_increment,
    nombre_acudiente varchar (50) not null,
    apellido_acudiente varchar(50) not null,
    edad int not null,
    telefono int not null,
    direccion varchar(50) not null,
    ciudad int,
    index(ciudad),
    foreign key(ciudad) references ciudad(id_ciudad)
);

insert into acudiente(nombre_acudiente, apellido_acudiente, edad, telefono, direccion, ciudad)
values('Pedro', 'Ortiz', 24, 4859632,'calle 6 #54-6', 4), ('Juan', 'Alvarez', 35, 9876345,'carrera 4 #6-4', 48),
('Jose', 'Almansa', 25, 3124579,'calle 67 #58-4', 6), ('Laura', 'Castellano', 23, 3185677,'calle 57 #58-47', 4),
('Maria', 'Camargo', 20, 3008947,'carrera 5 #87-69', 4), ('Diana', 'Rodriguez', 35, 3204872,'diagonal 24 #57-96', 4);

create table estudiante(
    id_estudiante int primary key not null auto_increment,
    nombre_estudiante varchar(50) not null,
    apellido_estudiante varchar(50) not null,
    edad int not null,
    ciudad_nacimiento varchar(50) not null,
    ciudad int,
    index(ciudad),
    foreign key(ciudad) references ciudad(id_ciudad),
    acudiente int,
    index (acudiente),
    foreign key(acudiente) references acudiente(id_acudiente)
);

