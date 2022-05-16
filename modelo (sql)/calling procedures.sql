/*AGREGAR CATEGORIAS*/
CALL agregar_categoria('Natualeza');

/*REGISTRAR*/
CALL registrar('usuario', 'contraseña','Christiam','De la Cruz','2001/01/25','Avenida desconocida','Esta es la descripción de prueba');

/*LOGIN*/
CALL login('usuario','contraseña');

/*AGREGAR NUEVA FOTO*/
CALL agregar_foto (1,1,'Volcan Misti en Arequipa','Descripción de prueba sobre la foto');
CALL actualizar_archivo ('1.txt', 1);

/*OBTENER TODAS LAS CATEGORIAS DISPONIBLES CATEGORIAS*/
CALL obtener_categorias;

/*OBTENER TODAS LAS FOTOS PARA EL HOME*/
CALL obtener_todas_fotos;

/*OBTENER TODAS LAS FOTOS DE UN USUARIO*/
CALL fotos_usuario(1);

/*AGREGAR UNA GALERIA*/
CALL agregar_galeria(1,1,'Nueva galeria');

/*OBTENER TODAS LAS GALERIAS*/
CALL obtener_galerias;

/*OBTENER TODAS LAS GALERIAS DE UN USUARIO*/
CALL galerias_usuario(1);

/*AGREGANDO FOTOS A LAS GALERIAS*/
CALL agregar_foto_galeria(1,1);

/*OBTENER FOTOS DE LAS GALERIAS*/
CALL obtener_foto_galeria(1);

/*INCIALIZANDO FOTOS*/
CALL inicializar_fotos(1,1,'1.jpg','2019/08/16','titulo de la foto','descripcion de la foto',20);

/*OBTENER POR COOKIES*/
CALL fotos_cookies(1);

/*LLAMANDO FOTOS POR INTERACCION*/
CALL fotos_interaccion;

/*INCREMENTAR LAS VISUAZACIONES*/
CALL visualizaciones (1);

/*OBTENER FOTO ESPECIFICA*/
CALL get_foto (1);

/*OBTENER COMENTARIO DE LA FOTO ESPECIFICA*/
CALL get_comentarios (1);

/*COMENTANDO FOTO*/
CALL comentar_foto(28,2,"hola");

/*CREAR BLOG*/
CALL crear_blog ("Titulo","Contenido",2,null);


/*OBTENER INFORMACION GENERAL DE USUARIO*/
CALl info_general(1);
