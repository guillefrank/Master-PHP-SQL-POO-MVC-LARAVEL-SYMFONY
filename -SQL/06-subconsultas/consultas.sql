/*
SUBCONSULTAS:
-Son consultas que se ejecutan dentro de otras.
-Consiste en utilizar los resultados de la subconsulta para operar en la consulta principal.
-Jugando con las claves foraneas/ajenas.
*/
#Sacar usuarios con entradas#
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);

SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);


INSERT INTO entradas VALUES(NULL, 3, 1, "Guia de GTA Vice City", "GTA", CURDATE());
#Sacar los usuarios que tengan de entrada titulos como el GTA#
SELECT nombre, apellidos FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%" );

#Sacar todas las entradas de la categoria Accion utilizando su nombre#
SELECT titulo FROM entradas WHERE categoria_id IN (SELECT id FROM categorias WHERE nombre = "Accion");
#Mostrar las categorias con mas de 3 entradas#
SELECT nombre FROM categorias WHERE id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id)>=3);

#Mostrar los usuarios que crearon una entrada un martes de cualquier semana#
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

#Mostrar el nombre del usuario que tenga mas entradas#
SELECT CONCAT (nombre,' ',apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id=(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

#'Mostrar las categorias sin entradas#
SELECT * FROM categorias WHERE id NOT IN(SELECT categoria_id FROM entradas);
