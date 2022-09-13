#Inserts para Categorias#
INSERT into categorias VALUES (null,'Accion');
INSERT into categorias VALUES (null,'Rol');
INSERT into categorias VALUES (null,'Deportes');



#Inserts para Entradas# #Como el primer campo es autoincremental setear con null#
INSERT INTO entradas VALUES (null,1, 1, 'Novedades de GTA 5 online', 'REview del GTA 5',CURDATE());
INSERT INTO entradas VALUES (null,1, 2, 'Review del LOL', 'Todo sobre el LOL',CURDATE());
INSERT INTO entradas VALUES (null,1, 3, 'Nuevos jugadores del FIFA 22', 'REview del FIFA 22',CURDATE());

INSERT INTO entradas VALUES (null,2, 1, 'Novedades de ASSASINS CREED', 'Todo sobre el juego de BUGISOFT',CURDATE());
INSERT INTO entradas VALUES (null,2, 2, 'Review del WOW', 'Todo sobre el WOW',CURDATE());
INSERT INTO entradas VALUES (null,2, 3, 'Nuevos jugadores del PES 22', 'REview del PES 22',CURDATE());

INSERT INTO entradas VALUES (null,3, 1, 'Novedades de SCUM online', 'Review del SCUM',CURDATE());
INSERT INTO entradas VALUES (null,3, 2, 'Review del DOTA', 'Todo sobre el DOTA',CURDATE());
INSERT INTO entradas VALUES (null,3, 2, 'Review del Pokemon Unite', 'Todo sobre el juego de pokemon',CURDATE());