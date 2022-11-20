CREATE database Ciclo;
use Ciclo;
set SQL_SAFE_UPDATES = 0;

CREATE TABLE usuario (
id_usuario int auto_increment not null,
nombre varchar(20) not null,
apellido varchar(20) not null,
usuario varchar(20) not null,
contrasena varchar(20) not null,
primary key (id_usuario)
) engine=InnoDB;

CREATE TABLE mantenimientos (
id_bicicleta int auto_increment not null,
foto_bici varchar(20) not null,
marca varchar(20) not null,
arreglos varchar(200),
id_usuario int not null,
primary key (id_bicicleta),
foreign key (id_usuario) references usuario(id_usuario)
)engine=InnoDB;

create table bicicletas(
foto_bici varchar(20) not null,
marca varchar(20) not null,
descripcion varchar(200)
);

create table cascos(
id_casco int auto_increment not null,
img varchar(100) not null,
nombre varchar(100) not null,
precio int not null,
primary key (id_casco));

create table zapatillas(
id_zapatilla int auto_increment not null,
img varchar(100) not null,
nombre varchar(100) not null,
precio int not null,
primary key (id_zapatilla));

create table gafas(
id_gafa int auto_increment not null,
img varchar(100) not null,
nombre varchar(100) not null,
precio int not null,
primary key (id_gafa));


INSERT INTO usuario (nombre,apellido,usuario,contrasena)
VALUES ('Andres','Diaz','andres1','123');

INSERT INTO mantenimientos VALUES (1,'bici_totem.jpg',
'Totem','Ajuste de suspensión',1);

INSERT INTO bicicletas VALUES ('bici_totem.jpg',
'Totem','Una poderosa bicicleta de montaña que brinda comodidad y estilo');

INSERT INTO cascos (id_casco,img,nombre,precio)
VALUES (1, 'scott_nero_plus.jpg','Casco Scott Nero Plus (CE Y CPSC)',230000),
(2, 'scott_supra_plus.jpg','Casco Scott Supra Plus (CE)',225000),
(3, 'scott_centric_plus.jpg','Casco Scott Centric Plus (CE)',220000);

INSERT INTO zapatillas (id_zapatilla,img,nombre,precio)
VALUES (1, 'scott_road_rc_ultimate.jpg','Zapatillas Scott Road Rc Ultimate',130000),
(2, 'scott_road_rc_python.jpg','Zapatillas Scott Road Rc Python',125000),
(3, 'scott_road_rc_evo.jpg','Zapatillas Scott Road Rc Evo',120000);

INSERT INTO gafas (id_gafa,img,nombre,precio)
VALUES (1, 'scott_spur.jpg','Gafas de Sol Scott Spur',30000),
(2, 'scott_shield.jpg','Gafas de Sol Scott Shield',25000),
(3, 'scott_vector.jpg','Gafas de Sol Scott Vector',20000);

SELECT * FROM mantenimientos;
SELECT * FROM usuario;
SELECT * FROM bicicletas;
SELECT foto_bici as Fotografía, marca as Marca, arreglos as Arreglos_por_realizar FROM mantenimientos;





