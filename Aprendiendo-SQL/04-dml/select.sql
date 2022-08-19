#Mostrar todos los registros de una tabla#
SELECT * FROM usuarios;
#Mostrar solo las registro que deseo de una tabla#
SELECT email, nombre, apellidos FROM usuarios;

#Operadores aritmeticos#
SELECT id,email, (4+7) as 'OPERACION' FROM usuarios;
SELECT email, (4-7) as 'OPERACION' FROM usuarios;
SELECT email, (4*7) as 'OPERACION' FROM usuarios;
SELECT email, (14/2) as 'OPERACION' FROM usuarios;

SELECT id,email, (id+7) as 'OPERACION' FROM usuarios;

#Ordenar#
SELECT id,email, (4+7) as 'OPERACION' FROM usuarios ORDER BY id;

SELECT id,email, (4+7) as 'OPERACION' FROM usuarios  ORDER BY id DESC;
SELECT id,email, (4+7) as 'OPERACION' FROM usuarios  ORDER BY id ASC;


#Funciones matematicas#
SELECT ABS(4) as 'OPERACION' FROM usuarios;
SELECT CEIL(3.1457) as 'OPERACION' FROM usuarios;
SELECT FLOOR(3.1457) as 'OPERACION' FROM usuarios;

SELECT ROUND(7.91, 1) as 'OPERACION' FROM usuarios;

SELECT SQRT(7.91) as 'OPERACION' FROM usuarios;
SELECT TRUNCATE(7.91, 0) as 'OPERACION' FROM usuarios;