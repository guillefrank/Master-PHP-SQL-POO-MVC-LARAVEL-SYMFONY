#Modificar Filas/ Actualizar Datos#
UPDATE usuarios SET fecha=CURDATE();

UPDATE usuarios SET fecha='2019-07-09',apellidos='Garcia' WHERE id=4;