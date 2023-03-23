CREATE TABLE usuario (
id_usuario number GENERATED ALWAYS AS IDENTITY not null,
nombre varchar2(20) not null,
apellido varchar2(20) not null,
usuario varchar2(20) not null,
contrasena varchar2(20) not null,
constraint pk_usuario primary key (id_usuario)
);

CREATE TABLE mantenimientos (
id_bicicleta number GENERATED ALWAYS AS IDENTITY not null,
foto_bici varchar2(20) not null,
marca varchar2(20) not null,
arreglos varchar2(200),
id_usuario number not null,
constraint pk_bicicleta primary key (id_bicicleta),
constraint fk_usuario foreign key (id_usuario) references usuario(id_usuario)
);

CREATE TABLE bicicletas(
id_bicicletas number GENERATED ALWAYS AS IDENTITY not null,
img varchar2(100) not null,
nombre varchar2(100) not null,
precio number not null,
constraint pk_bicicletas primary key (id_bicicletas)
);

CREATE TABLE cascos(
id_casco number GENERATED ALWAYS AS IDENTITY not null,
img varchar2(100) not null,
nombre varchar2(100) not null,
precio number not null,
constraint pk_cascos primary key (id_casco)
);

CREATE TABLE zapatillas(
id_zapatilla number GENERATED ALWAYS AS IDENTITY not null,
img varchar2(100) not null,
nombre varchar2(100) not null,
precio number not null,
constraint pk_zapatillas primary key (id_zapatilla)
);

CREATE TABLE gafas(
id_gafa number GENERATED ALWAYS AS IDENTITY not null,
img varchar2(100) not null,
nombre varchar2(100) not null,
precio number not null,
constraint pk_gafas primary key (id_gafa)
);

CREATE TABLE bicicletas(
id_bicicletas number GENERATED ALWAYS AS IDENTITY not null,
img varchar2(100) not null,
nombre varchar2(100) not null,
precio number not null,
constraint pk_bicicletas primary key (id_bicicletas)
);

INSERT INTO usuario (nombre,apellido,usuario,contrasena)
VALUES ('Andres','Diaz','andres1','123');

INSERT INTO mantenimientos VALUES (1,'bici_totem.jpg',
'Totem','Ajuste de suspensión',1);

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

INSERT INTO bicicletas (id_bicicletas,img,nombre,precio)
VALUES (11, 'rockhopper.jpg','Specialized Rockhopper',800000),
(22, 'marlin-5.jpg','Treck Marlin-5',320000),
(33, 'scalpel.jpg','Cannondale Scalpel',2200000),
(44, 'orca.jpg','Orbea Orca M40',2150000),
(55, 's-works.jpg','Specialized S-Works',3100000),
(66, 'domane.jpg','Treck Domane SL-5',1850000);

