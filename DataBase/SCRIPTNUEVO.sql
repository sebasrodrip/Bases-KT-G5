CREATE TABLE usuario (
id_usuario number GENERATED ALWAYS AS IDENTITY not null,
nombre varchar2(20) not null,
apellido varchar2(20) not null,
usuario varchar2(20) not null,
contrasena varchar2(20) not null,
constraint pk_usuario primary key (id_usuario)
);

CREATE TABLE bicicletas(
id_bicicletas number GENERATED ALWAYS AS IDENTITY not null,
img varchar2(100) not null,
nombre varchar2(100) not null,
precio number not null,
constraint pk_bicicletas primary key (id_bicicletas)
);

CREATE TABLE categorias(
id_categoria number GENERATED ALWAYS AS IDENTITY not null,
descripcion varchar2(100) not null,
constraint pk_categoria primary key (id_categoria)
);

CREATE TABLE proveedores(
id_proveedor number GENERATED ALWAYS AS IDENTITY not null,
nombre varchar2(100) not null,
constraint pk_proveedor primary key (id_proveedor)
);


CREATE TABLE facturas (
id_factura number GENERATED ALWAYS AS IDENTITY not null,
id_usuario number not null,
constraint pk_factura primary key (id_factura),
constraint fk_usuario foreign key (id_usuario) references usuario(id_usuario)
);

CREATE TABLE productos(
id_producto number GENERATED ALWAYS AS IDENTITY not null,
img varchar2(100) not null,
nombre varchar2(100) not null,
precio number not null,
constraint pk_producto primary key (id_producto)
);

CREATE TABLE detalle_factura (
id_detalle number GENERATED ALWAYS AS IDENTITY not null,
id_factura number not null,
cantidad number not null,
precio number,
id_usuario number not null,
constraint pk_detalle primary key (id_detalle),
constraint pk_factura foreign key (id_factura) references facturas(id_factura),
constraint fk_usuario foreign key (id_usuario) references usuario(id_usuario)
);

CREATE TABLE ventas(
id_venta number GENERATED ALWAYS AS IDENTITY not null,
id_factura number not null,
constraint pk_venta primary key (id_venta),
constraint fk_factura foreign key (id_factura) references facturas(id_factura)
);

CREATE TABLE mantenimientos (
id_mantenimiento number GENERATED ALWAYS AS IDENTITY not null,
id_venta number not null,
arreglos varchar2(200),
id_factura number not null,
constraint pk_mantenimiento primary key (id_mantenimiento),
constraint fk_factura foreign key (id_factura) references facturas(id_factura)
);

