/*
int(n de cifras) ENTERO
integer (n de cifras) ENTERO [max 255]
varchar(n de caracteres) STRING [max 255]
char (n de caracteres) STRING
float (n de cifras, n decimales) DECIMAL/ COMA FLOTANTE
date, time, timestamp
//String mas grandes
TEXT 65K caracteres
MEDIUMTEXT 16M caracteres
LONGTEXT 4B caracteres

//Enteros mas grandes
MEDIUMINT
BIGINT
*/

/*
Crear Tabla

*/

CREATE TABLE usuarios (
id          int(11) AUTO_INCREMENT NOT NULL,
nombre      varchar(100)NOT NULL,
apellidos   varchar(255) default 'hola que tal',
email       varchar(100)NOT NULL,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY (id)
);