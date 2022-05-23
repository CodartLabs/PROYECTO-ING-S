/*--------------------------------------
INSERTANDO usuarios
---------------------------------------*/
/*INSERTANDO HOMBRES*/
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('semper','NBV83JPY5QL','Daniel','Weber','1998/12/11','424-3298 Nulla St.',null, '2.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('turpis','FER29RYT3YU','Connor','Mccormick','1996/4/2','Ap #409-5414 Egestas. Ave',null, '1.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('elementum','VAG92MRH5TP','Gannon','Mcdonald','1999/6/13','Ap #855-3849 Non, Av.',null, '3.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('Morbi','PPL45YDM7IN','Zahir','Bridges','2003/1/12','P.O. Box 134, 1288 Interdum St.',null, '4.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('erat','NXX15PFJ5ON','Judah','Donaldson','1993/3/9','215-9927 Cursus. Av.',null, '5.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('pede','ISX65NFW6FQ','Kenneth','Ochoa','2001/10/16','P.O. Box 535, 3108 Ac St.',null, '6.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('Pellentesque','FKG48VSR8TR','Thane','Meyers','1994/11/6','Ap #280-6188 Gravida. Avenue',null, '7.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('elyisus','yisusmorales','Jesus','Morales Huaman','2001/11/18','940-8836 Aenean Street',null, '8.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('nisi','IXQ98JPM9EF','David','De Morales','1997/6/22','P.O. Box 172, 146 Nullam Road',null, '9.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('libero','GOC11KLA7VB','Fitzgerald','Schneider','1993/3/7','Ap #535-1667 Libero. Ave',null, '10.jpg', 1);
/*INSERTANDO MUJERES*/
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('vel','DRW62OIU6YL','Jocelyn','Patterson','1999-08-20','291-1837 Odio Ave',null, '11.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('mauris','YYC47UCL0AQ','Taylor','Mcdonald','1999-04-11','520-6174 Ridiculus Avenue',null, '12.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('purus','PGW46EDV7JG','Ava','Burks','1998-12-01','P.O. Box 803, 9159 Blandit Road',null, '13.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('sit','WZI22MBQ3VG','Victoria','Giles','1998-07-23','498-4026 Curae; Street',null, '14.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('May','GVU17QVF9VE','May','Conrad','1998-03-14','Ap #946-8253 Montes, Av.',null, '15.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('Leslie','RWK60ILK8QC','Leslie','Mullen','1997-11-03','918 Eget Road',null, '16.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('eget','QZB52XLN0ND','Xandra','Bean','1997-06-25','Ap #196-9742 Torquent Street',null, '17.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('Alexandra','KWO54FWJ9XN','Alexandra','Best','1997-02-14','Ap #200-6839 At Road',null, '18.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('Aileen','QNL84LGA9FB','Aileen','Schneider','1996-10-06','938-2790 Ultrices St.',null, '19.jpg', 1);
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto, administrador) VALUES('carrol','SRB18ILN6SA','Kyla','Carroll','1996-05-28','P.O. Box 590, 1309 Lobortis Rd.',null, '20.jpg', 1);
/*INSERTANDO PROFESOR*/
INSERT INTO usuarios (username, password, nombres, apellidos, nacimiento, direccion, sobre_mi,foto) VALUES('Profesor','profesor','Wagner','Vicente Ramos','2021-08-14','P.O. Box 590, 1309 Lobortis Rd.','Profesor del área de Ingenieria de software en la Universidad Nacional de Cañete','21.jpg');

/*---------------------------------------------------
INSERTANDO FOTOS
----------------------------------------------------*/
/*INSERTANDO CATEGORIAS*/
CALL agregar_categoria('Naturaleza');
CALL agregar_categoria('Festivo');
CALL agregar_categoria('Emotivo');
CALL agregar_categoria('Abstracto');
CALL agregar_categoria('Dibujo');
CALL agregar_categoria('Viaje');
CALL agregar_categoria('Universo');
CALL agregar_categoria('Personas');
CALL agregar_categoria('Ciencia');
CALL agregar_categoria('Deseo');
CALL agregar_categoria('Tecnologia');

/*INSERTANDO FOTOS DE usuarios*/
CALL inicializar_fotos(1,1,'1.jpg','2021/06/11','Volcan Misti','Esta es la mejor foto que he tomado en mi primer viaje a la ciudad de Arequipa, he quedado muy impresionado con el imponente volcán que hay en mi querido Perú, el Misti',30);
CALL inicializar_fotos(2,2,'2.jpg','2021/06/11','Recibiendo el año nuevo','En esta foto muestro como recibí el año nuevo 2021 fue un día muy bonito y la vista es increible',40);
CALL inicializar_fotos(3,3,'3.jpg','2021/06/12','Puedo tocar el sol','En esta increible foto se ve nuestro magnífico sol, es muy impactante',45);
CALL inicializar_fotos(4,4,'4.jpg','2021/06/14','Vive la vida a full color','Arte abstracto a base de acuarelas en el que empleo una gran diversidad de colores',48);
CALL inicializar_fotos(5,5,'5.png','2021/06/14','Chica fans','Un retrato de color diferente',45);
CALL inicializar_fotos(6,6,'6.jpg','2021/06/6','Machupicchu','La maravilla del Perú para el Mundo',34);
CALL inicializar_fotos(7,3,'7.jpg','2021/06/16','Mar y arena','Cuando el mar se atreve a besar la arena',67);
CALL inicializar_fotos(8,3,'8.jpg','2021/06/17','Cielo de fuego','Una fotografia espectacular con efecto solar',79);
CALL inicializar_fotos(9,1,'9.jpg','2021/06/17','Cielo azul','Una fotografia cuando estaba en mi bote',40);
CALL inicializar_fotos(10,7,'10.jpg','2021/06/17','Las galaxias','Imaginate si pudieras estar en el espacio y ver a los astros',32);
CALL inicializar_fotos(11,1,'11.jpg','2021/06/18','Hongo rojo','La naturaleza nos sorprende cada día',35);
CALL inicializar_fotos(12,3,'12.jpg','2021/06/18','Respiracion profunda','Un momento para sentir paz en el atardecer frente al mar',48);
CALL inicializar_fotos(13,8,'13.jpg','2021/06/10','Fotografa amateur','He viajado por muchos lugares del mundo y me gusta tomar fotografias por todos lados',39);
CALL inicializar_fotos(14,8,'14.jpg','2021/06/8','En el transito','Me he quedado mirando la velocidad de los taxis en New York y le di un retoque de velocidad a esta foto',47);
CALL inicializar_fotos(15,9,'15.jpg','2021/06/11','Robotic','La NASA envia a robotic a explorar el territorio marciano',39);
CALL inicializar_fotos(16,8,'16.jpg','2021/06/11','La paparazzi','Me gusta ver a los personajes de farandula en momentos donde ellos creen que no los estamos observando',70);
CALL inicializar_fotos(17,3,'17.jpeg','2021/06/12','Saltanto en la arena','Ha sido un dia espectacular la pase super bien al lado de mi mejor amiga',43);
CALL inicializar_fotos(18,9,'18.jpeg','2021/06/12','Otra vez robotic','Robotic recorriendo la superfice marciana en el pleno desierto',56);
CALL inicializar_fotos(19,7,'19.jpg','2021/06/14','Selfie en el espacio','Estoy lejos de casa, es mi sueño hecho realidad poder estar aqui en el espacio',47);
CALL inicializar_fotos(20,9,'20.jpg','2021/06/15','Tunel del tiempo','Alguna has pensado en viarjar al futuro y ver lo que sucedera para evitar cometer errores',67);
CALL inicializar_fotos(1,10,'21.jpg','2021/06/16','Mi auto','Gracias a mi esfuerzo y dedicacion, pude comprarme mi primer de un auto',36);
CALL inicializar_fotos(2,1,'22.jpg','2021/06/17','Mi lorito','Hoy publico mi hermoso loro que lo compre cuando fui de viaje a loreto',46);
CALL inicializar_fotos(3,7,'23.jpg','2021/06/18','Nuestro sistema solar en el universo','Desde el colegio vamos aprendiendo que no estamos solos y nuestro sol brinda su radiente luz a muchos planetas',69);
CALL inicializar_fotos(4,10,'24.jpg','2021/06/18','Un lindo deportivo','Hoy me gustaria presumir en las calles este hermoso auto , alguien puede adivinar la marca',53);
CALL inicializar_fotos(5,3,'25.jpg','2021/06/19','Mi hermoso auto rojo','Este auto lo vi en youtube sinceramente es un auto fabuloso y me gustaria poder comprarlo',55);
CALL inicializar_fotos(6,3,'26.jpg','2021/06/19','Mi linda mascota','Le tome la foto justo cuando estaba descansando en mi sofa',46);
CALL inicializar_fotos(7,11,'27.jpg','2021/06/10','Un recuerdo de windows XP','Alquien recuerda los buenos tiempos con windows XP , con procesadores intel corel duo',54);
CALL inicializar_fotos(8,8,'28.jpeg','2021/07/1','Mi bella amiga','Estoy muy agradecido de su linda amistad , gracias por estar siempre a mi lado. Tu amigo, Jesús Morales',76);
CALL inicializar_fotos(12,1,'29.jpg','2021/07/1','Vida salvaje','Este desafiante animal lo vi en un documental de Animal Planet',55);
CALL inicializar_fotos(13,1,'30.jpg','2021/07/1','Montaña de nubes','Esta impactante fotografia me lonevio mi amigo desde Canada',34);
CALL inicializar_fotos(14,3,'31.jpeg','2021/07/1','Mi linda hija','Estamos de paso por la ciudad y de forma casual nos tomamos una foto',49);
CALL inicializar_fotos(15,11,'32.jpeg','2021/07/1','Mentes conectadas','Una ilustraciòn de como la inteligencia artificial puede asemejarse a la mente humana',53);
CALL inicializar_fotos(16,11,'33.jpeg','2021/07/1','Nuevas Tecnologias','Una vision de como los ordenadores pueden conectarse gracias a las nuevas tecnologias de informacion y comunicacion',52);
CALL inicializar_fotos(17,4,'34.jpg','2021/07/1','Flores en el anochecer','Una foto flores exoticas con efectos nocturnos',64);
CALL inicializar_fotos(4,11,'35.jpg','2021/07/1','Quien quiere programar','Muchos de mis amigos me preguntan porque estoy todo el dia en la computadora jugando free fire , cuando en realidad estoy haciendo cosas distintas',37);
CALL inicializar_fotos(5,11,'36.jpg','2021/07/1','Inteligencia artificial','La economia y los mercados bursatiles pronto podran tener mejores proyecciones gracias a la inteligencia artificial',52);

/*INSERTANDO COMENTARIOS */
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (1,1,'2021/6/17','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (2,2,'2021/6/18','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (3,3,'2021/6/19','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (4,4,'2021/6/20','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (5,5,'2021/6/20','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (6,6,'2021/6/21','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (7,7,'2021/6/21','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (8,8,'2021/6/22','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (9,9,'2021/6/22','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (10,10,'2021/6/24','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (11,11,'2021/6/25','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (12,12,'2021/6/26','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (13,13,'2021/6/27','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (14,14,'2021/6/28','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (15,15,'2021/6/28','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (16,16,'2021/6/29','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (17,17,'2021/6/30','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (18,18,'2021/6/30','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (19,19,'2021/7/1','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (20,20,'2021/7/1','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (21,1,'2021/7/2','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (22,2,'2021/7/3','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (23,3,'2021/7/4','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (24,4,'2021/7/5','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (25,5,'2021/7/5','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (26,6,'2021/7/6','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (27,7,'2021/7/6','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (28,8,'2021/7/1','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (29,12,'2021/7/1','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (30,13,'2021/7/2','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (31,14,'2021/7/3','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (32,15,'2021/7/4','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (33,16,'2021/7/5','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (34,17,'2021/7/5','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (35,4,'2021/7/6','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (36,5,'2021/7/6','Apóyenme dándole 5 estrellas a mi foto y dejando un comentario, compartan el enlace con sus amigos');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (28,9,'2021/7/9','Harían bonita pareja Atte: Daviddd');


/*----------------------------------------------------------------
COMENTARIOS DE JHOHANS
-------------------------------*/
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (1,14,'2021/7/18','City break');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (1,4,'2021/7/19','UwU');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (1,6,'2021/7/20','Super la foto');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (1,12,'2021/7/21','wow, what country is this?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (1,3,'2021/7/22','Bellísima la foto');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (2,19,'2021/7/23','Cuando un pary?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (2,12,'2021/7/24','Falta poco para año nuevo Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (2,4,'2021/7/25','Reventemos cohetes :v//');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (2,20,'2021/7/26','¿Porqué tantos fuegos artificiales?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (2,6,'2021/7/27','Contaminas el medio ambiente');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (3,6,'2021/7/28','Como si pateara una pelota Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (3,6,'2021/7/29','Quiero intentarlo...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (3,13,'2021/7/30','Yo también deseo tomarme una foto así');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (3,5,'2021/7/31','Dónde me puedo tomar una así?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (3,2,'2021/8/1','En Perú?... No sé...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (4,5,'2021/8/2','No entiendo esta imagen');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (4,3,'2021/8/3','X2 es alguna obra de arte esto?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (4,3,'2021/8/6','Sigue intentando crack.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (5,2,'2021/8/8','Es un dibujo hecho en una máquina?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (5,5,'2021/8/9','Eso que importa, está lindo');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (5,14,'2021/8/10','Desearía aprender a dibujar');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (5,14,'2021/8/11','Dré una donación al dibujante');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (6,14,'2021/8/12','Maravilloso.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (6,6,'2021/8/13','Majestuoso');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (6,15,'2021/8/14','Divino.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (7,14,'2021/8/16','En verano voy a la playa :v');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (7,2,'2021/8/17','Cerro Azul ps...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (7,8,'2021/8/18','No es Cerro Azul...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (7,2,'2021/8/19','Ups... Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (8,15,'2021/8/20','Está editado la foto?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (8,20,'2021/8/21','Creo que sí...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (8,18,'2021/8/22','Que importa, está lindo');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (8,2,'2021/8/23','AHora sí me animé a ir a la playa por segunda vez Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (9,6,'2021/8/24','Mar...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (9,11,'2021/8/25','Nubes...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (9,4,'2021/8/26','Tierra...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (9,16,'2021/8/27','???');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (10,7,'2021/8/28','Y pensar que todo esto existe.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (10,20,'2021/8/29','Cuantos planetas habrá?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (10,17,'2021/8/30','Y cuantas galaxias?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (10,16,'2021/8/31','Creo que pueden existir aún más');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (10,14,'2021/9/1','Yo también pienso así.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (11,7,'2021/9/2','Hongo?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (11,3,'2021/9/3','Será comestible?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (12,15,'2021/9/5','El fondo me encanta');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (13,2,'2021/9/9','que me tome fotos a mí... :v');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (13,8,'2021/9/10','no a mí.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (13,9,'2021/9/11','y xq no a mí?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (14,18,'2021/9/12','Tengo mi skate, pero no sé usarlos :c');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (14,13,'2021/9/13','Hay una gran variedad...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (15,12,'2021/9/14','No me creo esa foto, debe ser falso.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (16,13,'2021/9/21','Sé posar muy bien ante la camara Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (17,9,'2021/9/23','yupi...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (17,5,'2021/9/24','que infantil');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (17,1,'2021/9/25','nunca lo hice con mis amistades...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (17,11,'2021/9/26','Recuerdos...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (17,5,'2021/9/27','x2, esos tiempos donde no había covid e ibas a la playa');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (17,5,'2021/9/28','Ahora está prohibido. :c');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (20,8,'2021/10/5','Numeros...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (20,14,'2021/10/6','Binarios...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (20,20,'2021/10/7','Literalmente hermoso');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (20,10,'2021/10/8','0 & 1.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (21,19,'2021/10/9','Es un ferrari?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (21,12,'2021/10/10','No..., es un avión Xd.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (22,20,'2021/10/11','Amo a los animales ♥');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (23,13,'2021/10/12','cuantos planetas habrá en este sistema solar?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (23,9,'2021/10/13','Cada año se descubren más');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (23,12,'2021/10/14','Es que la tecnología va avanzando ♥');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (24,2,'2021/10/15','que marca es?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (24,16,'2021/10/16','Aple.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (24,16,'2021/10/17','No. Es Microsoft Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (25,3,'2021/10/18','Algún día lo tendré');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (25,1,'2021/10/19','Yala, ahora voy por mi Jet.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (25,20,'2021/10/20','Pa qué quiero si ya tengo mi burrito en mi cerro Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (25,7,'2021/10/21','jajajajaja');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (26,5,'2021/10/22','que lindo ♥');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (26,7,'2021/10/23','una ternurita ♥');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (26,9,'2021/10/24','será macho o hembra?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (26,19,'2021/10/25','Que importa, está lindo');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (26,7,'2021/10/26','esos ojitos que pone ♥');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (27,14,'2021/10/27','El Callao');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (27,14,'2021/10/28','jajajaja, es Windows...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (27,7,'2021/10/29','En qué versión aparece?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (27,16,'2021/10/30','Windows XP');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (29,9,'2021/11/4','Firefox?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (29,3,'2021/11/5','hermoso♥');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (30,5,'2021/11/6','wow');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (30,17,'2021/11/7','un poco de escalofríos ...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (30,14,'2021/11/8','me entraron ganas de iniciar una aventura');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (30,4,'2021/11/9','donde es?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (31,18,'2021/11/10','que lindas ...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (31,2,'2021/11/11','quisiera tener esos rulos ♥');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (32,2,'2021/11/12','la I.A.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (32,8,'2021/11/13','♥ algún día tendré mi chica robot Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (32,10,'2021/11/14','jajaja, sigue soñando Rick.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (32,13,'2021/11/15','jajajjaja >:d');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (33,20,'2021/11/16','IoT?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (33,20,'2021/11/17','Una enorme red detrás de lo que se vé por pantalla.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (33,7,'2021/11/18','Que tal complejidad del mundo abstracto de las redes...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (34,19,'2021/11/19','que es eso?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (34,16,'2021/11/20','se come? Xd');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (34,20,'2021/11/21','gusanos?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (34,14,'2021/11/22','Noooo, son flores en un jardin...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (34,18,'2021/11/23','ayaaaa... pero que tal foto a :v');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (35,15,'2021/11/24','frontend o backend?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (35,8,'2021/11/25','frontend♥ papu...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (36,6,'2021/11/26','me hace recordar a una película antigua..');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (36,5,'2021/11/27','el del extraterrestre y un niño creo...');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (36,7,'2021/11/28','se refieren a E.T.');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (36,16,'2021/11/29','Los extraterrestres habrán desarrollado la I.A.?');
INSERT INTO foto_comentarios(id_foto, id_usuario, fecha_foto_comentario,comentario_foto) VALUES (36,10,'2021/11/30','Supongo que sí...');


/*----------------------------------------------------------------
INSERTANDO BLOGS
----------------------------------------------------------------*/
-- INSERT INTO blogs (id_usuario, fecha_blog, nombre_blog, contenido) VALUES(1,'2021/7/12','El valor de la dedicación','Si buscamos la palabra dedicación en los diccionarios, dedicación es la acción de dedicar o dedicarse, la atención y esfuerzo que una persona destina a una actividad, y la acción y efecto de entregarse intensamente a una profesión o trabajo.');
