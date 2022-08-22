#Consultas de agrupamiento#
SELECT COUNT(titulo) AS'Numero de Entradas', categoria_id FROM entradas GROUP BY categoria_id;

#En las consultas de agrupamiento no es correcto utilizar un where porque hace referencia a columnas#