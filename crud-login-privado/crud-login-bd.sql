create table users(
iduser int not null primary key auto_increment,
nome varchar(150) not null,
email varchar(150) not null,
senha varchar(150) not null
);

create table models(
idmodel int not null primary key auto_increment,
nome varchar(150) not null,
arquivo varchar(150) not null
);

create table views(
idview int not null primary key auto_increment,
idmodel int not null,
foreign key(idmodel) references models(idmodel),
iduser int not null,
foreign key(iduser) references users(iduser)
);

insert into models(nome,arquivo)
values 
("Cadeira","CadeiraPai.glb"),
("Enfeite","EnfeiteChao.glb"),
("Enfeite de vidro","EnfeiteVidro.glb"),
("Lareira","Lareira.glb"),
("Mesa","Mesa.glb");