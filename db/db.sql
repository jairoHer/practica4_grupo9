create database practicaAYD1;
use practicaAYD1;

CREATE TABLE IF NOT EXISTS categoria(
	codigo int not null,
	nombre varchar(255) not null,
	primary key (codigo)
);

Create table if not exists Producto(
	codigo int not null AUTO_INCREMENT,
    categoria int,
    nombre varchar(255) not null,
    descripcion varchar(255)not null,
    precio float(10,2) not null,
    estado int not null default 1,/*Si el estado es 1 el producto esta disponible, si es 2 el producto esta vendido*/
    primary key (codigo),
	foreign key (categoria) references categoria(codigo)
);

insert into categoria (codigo,nombre)values(1,"Computadoras");
insert into categoria (codigo,nombre)values(2,"Consolas");
insert into categoria (codigo,nombre)values(3,"Limpieza");
insert into categoria (codigo,nombre)values(4,"Muebles");
insert into categoria (codigo,nombre)values(5,"Utensilio de cocina");
insert into categoria (codigo,nombre)values(6,"Utiles escolares");
insert into categoria (codigo,nombre)values(7,"Zapatos");
insert into categoria (codigo,nombre)values(8,"Juguetes");
insert into categoria (codigo,nombre)values(9,"Lentes");
insert into categoria (codigo,nombre)values(10,"Ropa");

insert into Producto(categoria,nombre,descripcion,precio)values(1,"Acer x200","Computadora portatil,4 GB de Ram con procesador Core I5, Espacio interno de 1 TB",4500.00);
insert into Producto(categoria,nombre,descripcion,precio)values(2,"Play Station 2","Play station 2, casi nueva. incluye 4 juegos",800.00);
insert into Producto(categoria,nombre,descripcion,precio)values(2,"Xbox 360","Xbox casi nueva, inculye dos controles y 3 juegos",1600.50);
insert into Producto(categoria,nombre,descripcion,precio)values(2,"Play Station 3","Play Station 3 con 2 controles y con 3 juegos",2200.00);
insert into Producto(categoria,nombre,descripcion,precio)values(7,"Tenis depotivos Adidas","Tenis talla 42 originales, color negro suela alta",650);
insert into Producto(categoria,nombre,descripcion,precio)values(7,"Tenis depotivos Nike","Tenis talla 41 originales, color azul, resitentes al agua",700.90);
insert into Producto(categoria,nombre,descripcion,precio)values(8,"Señor cara de papa","Jueguete armable de pelicula Toy Story, para mayores de 3 años",125.50);

select * from Producto;