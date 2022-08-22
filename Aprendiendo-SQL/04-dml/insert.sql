#Insertar nuevos registros#

INSERT INTO usuarios VALUES(null, 'Guillermo','Vazquez','guillermogaston@hotmail.com','123123','2022-08-19');
INSERT INTO usuarios VALUES(null, 'Florencia','Bernachea','florencia@hotmail.com','123123','2022-08-19');
INSERT INTO usuarios VALUES(null, 'Ariana','Bernachea','ariana@hotmail.com','123123','2022-08-19');
INSERT INTO usuarios VALUES(null, 'Gabriela','Bernachea','gabriela@hotmail.com','123123','2022-08-19');
INSERT INTO usuarios VALUES(3, 'Roberto','Perez','roberto@hotmail.com','123123','2022-08-19');
#Como insertar filas solo en algunas columnas#
INSERT INTO usuarios (email, password) VALUES ('admin@hotmail.com','admin');