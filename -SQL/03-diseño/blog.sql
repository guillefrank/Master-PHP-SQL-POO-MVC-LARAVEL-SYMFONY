CREATE TABLE usuarios(
    id int(255) auto_increment NOT NULL,
    nombre varchar(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(255)NOT NULL,
    password VARCHAR(255)NOT NULL,
    fecha DATE NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT  uq_email UNIQUE (email)
)ENGINE=InnoDb;
CREATE TABLE categorias(
    id int(255) auto_increment NOT NULL,
    nombre varchar(100),    
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;
CREATE TABLE entradas(
    id int(255) auto_increment NOT NULL,
    usuario_id int(255) NOT NULL,
    categoria_id int(255) NOT NULL,
    titulo VARCHAR(255)NOT NULL,
    descripcion MEDIUMTEXT,
    fecha DATE NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT pk_entradas_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios (id),
    CONSTRAINT pk_entradas_categorias FOREIGN KEY(categoria_id) REFERENCES categorias (id)
)ENGINE=InnoDb;
