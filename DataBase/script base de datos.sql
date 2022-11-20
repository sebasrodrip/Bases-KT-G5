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

SELECT * FROM mantenimientos;
SELECT * FROM usuario;
SELECT foto_bici as Fotografía, marca as Marca, arreglos as Arreglos_por_realizar FROM mantenimientos;

INSERT INTO usuario (nombre,apellido,usuario,contrasena)
VALUES ('Andres','Diaz','andres1','123');

INSERT INTO mantenimientos VALUES (1,'bici_totem.jpg',
'Totem','Ajuste de suspensión',1);





