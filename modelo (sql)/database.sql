DROP DATABASE IF EXISTS photo_stock;
CREATE DATABASE photo_stock;
USE photo_stock;
CREATE TABLE usuarios(
    id_usuario BIGINT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(250) NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100)NOT NULL,
    nacimiento DATE NOT NULL,
    direccion TEXT NOT NULL,
    sobre_mi TEXT NULL,
    foto TEXT NULL
    );
CREATE TABLE correos(
	id_usuario BIGINT NOT NULL,
    correo varchar(100) NOT NULL,
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario)
    );
CREATE TABLE categorias(
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nombre_categoria VARCHAR(50) NOT NULL 
	);
CREATE TABLE fotos(
    id_foto BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_usuario BIGINT NOT NULL,
    id_categoria INT NOT NULL,
    archivo TEXT NULL,
    fecha_foto DATE DEFAULT CURRENT_DATE,
    titulo VARCHAR(100) NOT NULL,
    descripcion TEXT NULL,
    visualizaciones BIGINT NOT NULL DEFAULT 0,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
    );
CREATE TABLE foto_rating(
    id_foto BIGINT NOT NULL,
    id_usuario BIGINT NOT NULL,
    puntuacion INT(1),
    FOREIGN KEY (id_foto) REFERENCES fotos(id_foto),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
    );
CREATE TABLE fotos_favoritas(
    id_usuario BIGINT NOT NULL,
    id_foto BIGINT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
	FOREIGN KEY (id_foto) REFERENCES fotos(id_foto)
    );
CREATE TABLE foto_comentarios(
    id_foto_comentario BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_foto BIGINT NOT NULL,
    id_usuario BIGINT NOT NULL,
    fecha_foto_comentario DATE NOT NULL DEFAULT CURRENT_DATE,
    comentario_foto TEXT NOT NULL,
	FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
	FOREIGN KEY (id_foto) REFERENCES fotos(id_foto)
    );
CREATE TABLE galerias (
    id_galeria BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre_galeria VARCHAR(100),
    fecha_galeria DATE NOT NULL DEFAULT CURRENT_DATE,
    id_usuario BIGINT NOT NULL,
    id_categoria INT NOT NULL,
    visualizaciones BIGINT NOT NULL DEFAULT 0,
	FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria)
    );
CREATE TABLE fotos_galeria(
    id_galeria BIGINT NOT NULL,
    id_foto BIGINT NOT NULL,
    FOREIGN KEY (id_foto) REFERENCES fotos(id_foto),
    FOREIGN KEY (id_galeria) REFERENCES galerias(id_galeria)
    );
CREATE TABLE blogs(
    id_blog BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_usuario BIGINT NOT NULL,
    fecha_blog DATE NOT NULL DEFAULT CURRENT_DATE,
    nombre_blog VARCHAR(50) NOT NULL,
    contenido TEXT NOT NULL,
    id_foto BIGINT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_foto) REFERENCES fotos(id_foto)
    );
CREATE TABLE blogs_comentarios(
    id_blog_comentario BIGINT PRIMARY KEY AUTO_INCREMENT,
    id_blog BIGINT NOT NULL,
    id_usuario BIGINT NOT NULL,
    comentario_blog TEXT NOT NULL,
    fecha_blog_comentario DATE NOT NULL DEFAULT CURRENT_DATE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_blog) REFERENCES blogs(id_blog)
    );

/*----------------------------------------------------------------
STORED PROCEDURES
----------------------------------------------------------------*/

/*LOGIN*/
CREATE PROCEDURE login(IN user VARCHAR (50), IN pass VARCHAR(250))
SELECT id_usuario, username, nombres, apellidos, foto FROM usuarios WHERE username = user and password = pass LIMIT 1;

/*REGISTRAR*/
CREATE PROCEDURE registrar (IN user VARCHAR (50), IN pass VARCHAR(250), IN nomb VARCHAR(100), IN ape VARCHAR(100), IN nac DATE, IN dir TEXT, IN sobre TEXT )
INSERT INTO usuarios(username, password, nombres, apellidos, nacimiento, direccion, sobre_mi) 
VALUES (user,pass, nomb, ape, nac, dir, sobre);

/*AGREGAR CATEGORIAS*/
CREATE PROCEDURE agregar_categoria(IN in_categoria VARCHAR(50))
INSERT INTO categorias (nombre_categoria) VALUES (in_categoria);

/*OBTENER LAS CATEGORIAS DISPONIBLES*/
CREATE PROCEDURE obtener_categorias()
SELECT * FROM categorias;

/*AGREGAR UNA NUEVA FOTO*/
CREATE PROCEDURE agregar_foto(IN in_id_usuario BIGINT, IN in_id_categoria INT, IN in_titulo VARCHAR(100),IN in_descripcion TEXT )
INSERT INTO fotos(id_usuario, id_categoria, titulo, descripcion)
VALUES (in_id_usuario, in_id_categoria, in_titulo, in_descripcion);
/*AGREGAR EL NOMBRE DEL ARCHIVO GENERADO*/
CREATE PROCEDURE actualizar_archivo (IN in_archivo TEXT, IN in_id_foto BIGINT)
UPDATE fotos SET archivo = in_archivo WHERE id_foto = in_id_foto;

/*OBTENER TODAS LAS FOTOS PARA EL HOME*/
CREATE PROCEDURE obtener_todas_fotos ()
SELECT id_foto, username, nombre_categoria,archivo, fecha_foto, titulo, descripcion, visualizaciones
FROM fotos INNER JOIN categorias ON categorias.id_categoria = fotos.id_categoria 
INNER JOIN usuarios ON usuarios.id_usuario =fotos.id_usuario
ORDER BY visualizaciones DESC;

/*OBTENER TODAS LAS FOTOS DE UN USUARIO */
CREATE PROCEDURE fotos_usuario(IN in_id_usuario BIGINT)
SELECT id_foto, username, nombres, apellidos, nombre_categoria, archivo, fecha_foto, titulo, descripcion, visualizaciones
FROM usuarios INNER JOIN fotos ON usuarios.id_usuario=fotos.id_usuario INNER JOIN categorias ON categorias.id_categoria = fotos.id_categoria
WHERE usuarios.id_usuario =in_id_usuario
ORDER BY visualizaciones DESC LIMIT 30;

/*AGREGAR GALERÍAS*/
CREATE PROCEDURE agregar_galeria(IN in_id_usuario BIGINT,IN in_id_categoria INT, IN nombre_galeria VARCHAR(50))
INSERT INTO galerias (id_usuario, id_categoria,nombre_galeria)
VALUES(in_id_usuario,in_id_categoria,nombre_galeria);

/*OBTENER TODAS LAS GALERIAS*/
CREATE PROCEDURE obtener_galerias()
SELECT id_galeria, nombre_galeria, username, nombre_categoria, fecha_galeria, visualizaciones
FROM usuarios INNER JOIN galerias ON galerias.id_usuario = usuarios.id_usuario INNER JOIN categorias ON categorias.id_categoria = galerias.id_categoria
ORDER BY visualizaciones DESC LIMIT 30;

/*OBTENER TODAS LAS GALERÍAS DE UN USUARIO*/
CREATE PROCEDURE galerias_usuario(IN in_id_usuario BIGINT)
SELECT id_galeria, nombre_galeria, username, nombre_categoria, fecha_galeria, visualizaciones
FROM usuarios INNER JOIN galerias ON galerias.id_usuario = usuarios.id_usuario INNER JOIN categorias ON categorias.id_categoria = galerias.id_categoria
WHERE usuarios.id_usuario =in_id_usuario
ORDER BY visualizaciones;

/*AGREGAR FOTOS DENTRO DE LA GALERIAS */
CREATE PROCEDURE agregar_foto_galeria (IN in_id_galeria BIGINT, in_id_foto BIGINT)
INSERT INTO  fotos_galeria VALUES(in_id_galeria, in_id_foto);

/*OBTENER FOTOS DE UNA GALERIA*/
CREATE PROCEDURE obtener_foto_galeria(IN in_id_galeria BIGINT)
SELECT fotos_galeria.id_foto, archivo, fecha_foto, titulo, descripcion, visualizaciones
FROM fotos_galeria INNER JOIN fotos ON fotos_galeria.id_foto = fotos.id_foto
WHERE fotos_galeria.id_galeria = in_id_galeria;

/*INICIALIZANDO FOTOS EN BASE DE DATOS*/
CREATE PROCEDURE inicializar_fotos(IN in_id_usuario BIGINT, IN in_id_categoria INT ,IN in_archivo TEXT ,IN in_fecha_foto DATE, IN in_titulo VARCHAR(100),IN in_descripcion TEXT, IN in_visualizaciones BIGINT)
INSERT INTO fotos(id_usuario, id_categoria, archivo, fecha_foto, titulo, descripcion, visualizaciones)
VALUES (in_id_usuario, in_id_categoria, in_archivo, in_fecha_foto, in_titulo, in_descripcion, in_visualizaciones);


/*OBTENER POPULARES POR COOKIE */
CREATE PROCEDURE fotos_cookies(in_id_categoria BIGINT)
SELECT * FROM fotos where id_categoria =in_id_categoria ORDER BY RAND() LIMIT 5;

/*OBTENER MAS INTERACTUADAS */
CREATE PROCEDURE fotos_interaccion()
SELECT fotos.id_foto, fotos.archivo, fotos.fecha_foto, fotos.titulo, fotos.visualizaciones 
FROM fotos INNER JOIN foto_comentarios ON fotos.id_foto = foto_comentarios.id_foto 
GROUP BY foto_comentarios.id_foto ORDER BY COUNT(fotos.id_foto) DESC LIMIT 5;


/*OBTENER FOTO ESPECIFICA*/
CREATE PROCEDURE get_foto (IN in_id_foto BIGINT)
SELECT fotos.id_foto,usuarios.id_usuario, archivo, fecha_foto, titulo, descripcion, visualizaciones, username, nombres, apellidos,nombre_categoria,fotos.id_categoria, usuarios.foto
FROM categorias INNER JOIN fotos ON categorias.id_categoria = fotos.id_categoria 
INNER JOIN usuarios ON usuarios.id_usuario=fotos.id_usuario 
WHERE fotos.id_foto = in_id_foto;

/*AÑADIR LA VISUALIZACION*/
CREATE PROCEDURE visualizaciones(IN in_id_foto BIGINT)
UPDATE fotos SET visualizaciones = visualizaciones+1 WHERE id_foto =in_id_foto;
/*COMENTAR FOTO */
CREATE PROCEDURE comentar_foto(IN in_id_foto BIGINT, IN in_id_usuario BIGINT, in_comentario TEXT)
INSERT INTO foto_comentarios (id_foto,id_usuario,comentario_foto)
 VALUES (in_id_foto,in_id_usuario,in_comentario);
/*OBTENER COMENTARIOS DE UNA FOTO*/
CREATE PROCEDURE get_comentarios (IN in_id_foto BIGINT)
SELECT comentario_foto, usuarios.id_usuario, nombres, apellidos, username, fecha_foto_comentario,foto
FROM foto_comentarios INNER JOIN usuarios ON usuarios.id_usuario = foto_comentarios.id_usuario
WHERE foto_comentarios.id_foto = in_id_foto
ORDER BY fecha_foto_comentario ASC;
/*CREAR BLOG*/
CREATE PROCEDURE crear_blog (IN in_titulo TEXT, IN in_contenido TEXT, IN in_id_usuario BIGINT, IN in_id_foto BIGINT)
INSERT INTO blogs (nombre_blog, contenido, id_usuario, id_foto)
VALUES (in_titulo, in_contenido, in_id_usuario, in_id_foto);
/*OBTENER TODOS LOS BLOGS*/
CREATE PROCEDURE obtener_todos_blogs()
SELECT id_blog, nombre_blog, blogs.id_usuario,nombres, apellidos, usuarios.foto 
FROM blogs INNER JOIN usuarios 
ON blogs.id_usuario= usuarios.id_usuario 
ORDER BY fecha_blog DESC, id_blog DESC;
/*OBTENER UN BLOG ESPECIFICO*/
CREATE PROCEDURE obtener_blog(IN in_id_blog BIGINT)
SELECT id_blog, nombre_blog, blogs.id_usuario,nombres, apellidos, usuarios.foto, fecha_blog, contenido 
FROM blogs INNER JOIN usuarios ON blogs.id_usuario= usuarios.id_usuario 
WHERE id_blog = in_id_blog;
/*OBTENER INFO GENERAL DE LOS USUARIOS */
CREATE PROCEDURE info_general(IN in_id_usuario BIGINT)
SELECT correo, usuarios.id_usuario, username, nombres, apellidos, nacimiento,
direccion, sobre_mi, foto, COUNT(fotos.id_foto) as fotos_subidas, COUNT(blogs.id_blog)as blogs_subidos FROM usuarios
LEFT JOIN fotos ON usuarios.id_usuario = fotos.id_usuario
LEFT JOIN blogs ON usuarios.id_usuario = blogs.id_usuario
LEFT JOIN correos on correos.id_usuario = usuarios.id_usuario 
WHERE usuarios.id_usuario =in_id_usuario LIMIT 1;
/*OBTENER FOTOS RECIENTES*/
CREATE PROCEDURE recientes()
SELECT id_foto, username, nombre_categoria,archivo, fecha_foto, titulo, descripcion,
 visualizaciones FROM fotos INNER JOIN categorias ON categorias.id_categoria = fotos.id_categoria
  INNER JOIN usuarios ON usuarios.id_usuario =fotos.id_usuario 
  ORDER BY fecha_foto DESC LIMIT 5;
/*OBTENER LOS CORREOS*/
/*AGREGAR CORREOS*/
/*VALORAR FOTO*/
/*AGREGAR FOTOS A FAVORITO*/
/*VER FOTOS FAVORITAS*/
