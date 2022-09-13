#Consultas de agrupamiento#
SELECT COUNT(titulo) AS'Numero de Entradas', categoria_id FROM entradas GROUP BY categoria_id;

#En las consultas de agrupamiento no es correcto utilizar un where porque hace referencia a columnas#

#Consultas de agrupamiento con condiciones #

SELECT COUNT(titulo) AS'Numero de Entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

/*
AVG Sacar la media
COUNT Contar numeros de elementos
MAX Valor maximo del grupo
MIN Valor minimo del grupo
SUM Sumar todo el contenido del grupo
*/
SELECT AVG (id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS'Maximo ID', titulo FROM entradas; 
SELECT MIN(id) AS'Maximo ID', titulo FROM entradas;

SELECT SUM(id) AS'Suma de ID', titulo FROM entradas;