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

#Funciones con texto#
SELECT UPPER(nombre) FROM usuarios;

SELECT LOWER(nombre) FROM usuarios;

SELECT CONCAT(nombre,' ',apellidos ) FROM usuarios;
SELECT CONCAT(nombre,' ',apellidos ) AS 'Conversion' FROM usuarios;
SELECT UPPER(CONCAT(nombre,' ',apellidos )) AS 'Conversion' FROM usuarios;

SELECT TRIM(CONCAT('      ',nombre,' ',apellidos,'              ' )) AS 'Conversion'FROM usuarios;


#Funciones para trabajar con fechas#
SELECT fecha FROM usuarios;
SELECT fecha, email FROM usuarios;

SELECT email, fecha, CURDATE() AS 'Fecha_actual' FROM usuarios;
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'Dias_Diferencia' FROM usuarios;
SELECT email, DAYNAME(fecha) AS 'Dia' FROM usuarios;

SELECT email, HOUR(fecha) AS 'Hora' FROM usuarios;
SELECT email, CURTIME() AS 'Hora' FROM usuarios;
SELECT email, SYSDATE() AS 'Hora' FROM usuarios;


SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') AS 'Dia' FROM usuarios;

#Funciones varias#
SELECT VERSION() FROM usuarios;
#para no repetir mismo registro con el DISTINCT#
SELECT DISTINCT user() from usuarios;



SELECT DISTINCT DATABASE()FROM usuarios;

SELECT IFNULL(email,'Este campo esta vacio') FROM usuarios;


