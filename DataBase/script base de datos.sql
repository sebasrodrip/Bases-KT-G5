create database electro_comp;
use electro_comp;

create table productos (
	img varchar(50) not null,
    nombre varchar(50) not null,
    precio decimal not null
) engine=InnoDB;

INSERT INTO productos VALUES ('gskill-aegis-8-gb-ddr4-3200.jpg', 'G.SKILL AEGIS 8 GB DDR4 3200', 19000);
INSERT INTO productos VALUES ('teamgroup-gx1-120-gb.jpg', 'TEAMGROUP GX1 120 GB', 9900);
INSERT INTO productos VALUES ('msi-n210-1-gb.jpg', 'MSI GEFORCE GT210 1 GB', 29000);
INSERT INTO productos VALUES ('adata-hd680-1-tb-usb-31.jpg', 'ADATA HD680 1 TB USB 3.2', 39000);
INSERT INTO productos VALUES ('corsair-obsidian-1000d.jpg', 'CORSAIR OBSIDIAN 1000D', 399000);
INSERT INTO productos VALUES ('ups-apc-br1500g-1500va.jpg', 'UPS APC BR1500G 1500VA', 162000);

SELECT * FROM productos;

set sql_safe_updates = 0;

delete from productos;

drop database electro_comp;

INSERT INTO productos VALUES ('aorus-17.jpg', 'AORUS 17', 1655000);

create table usuarios (
	codigo int not null auto_increment,
    usuario varchar(50) not null,
    clave varchar(50) not null,
    primary key(codigo)
) engine=InnoDB;

INSERT INTO usuarios (usuario, clave) VALUES ("Carlos777", "777");
INSERT INTO usuarios (usuario, clave) VALUES ("Mario888", "888");
INSERT INTO usuarios (usuario, clave) VALUES ("Ana999", "999");

SELECT * FROM usuarios;

SELECT * FROM usuarios WHERE usuario = "Carlos777";

create table ordenes (
	numero int not null auto_increment,
    cliente varchar(50) not null,
	tipo_dispositivo varchar(50) not null,
    marca varchar(50),
    problema varchar(200) not null,
    estado tinyint not null,
    solucion varchar(200),
    primary key (numero)
) engine=InnoDB;

Insert into ordenes (cliente, tipo_dispositivo, marca, problema, estado, solucion) 
values ("Daniel Torres", "Tablet", "Samsung", "No enciende", 1, null);
    
Insert into ordenes (cliente, tipo_dispositivo, marca, problema, estado, solucion) 
values ("Adrian Lopez", "Celular", "Sony", "Pantalla rota", 2, "Cambio de la pantalla");

select * from ordenes;