//Añadir a la tabla categoria los siguientes valores: 10 categorias


INSERT INTO categoria (nombre_categoria) VALUES 
('Cuentos'),
('Novelas'),
('Poesía'),
('Teatro'),
('Ensayo'),
('Biografía'),
('Historia'),
('Ciencia'),
('Tecnología'),
('Otros');

// Añadir a la tabla libro los siguientes valores: 10 libros
// Campos: id_libro, nombre_libro, autor, editorial, fecha_lanzamiento, estatus	

INSERT INTO libro (nombre_libro, autor, editorial, fecha_lanzamiento, estatus) VALUES
('Harry Potter y la piedra filosofal', 'J.K. Rowling', 'Salamandra', '1997-06-26', 'Disponible'),
('El señor de los anillos', 'J.R.R. Tolkien', 'Minotauro', '1954-07-29', 'Disponible'),
('El principito', 'Antoine de Saint-Exupéry', 'Reynal & Hitchcock', '1943-04-06', 'Disponible'),
('El alquimista', 'Paulo Coelho', 'HarperCollins', '1988-01-01', 'Disponible'),
('El código Da Vinci', 'Dan Brown', 'Doubleday', '2003-03-18', 'Disponible'),
('El nombre del viento', 'Patrick Rothfuss', 'DAW Books', '2007-03-27', 'Disponible'),
('El retrato de Dorian Gray', 'Oscar Wilde', 'Lippincott''s Monthly Magazine', '1890-07-01', 'Disponible'),
('El arte de la guerra', 'Sun Tzu', 'Desconocido', '500-01-01', 'Disponible'),
('El hombre en busca de sentido', 'Viktor Frankl', 'Herder Editorial', '1946-01-01', 'Disponible'),
('El perfume', 'Patrick Süskind', 'Diogenes Verlag', '1985-01-01', 'Disponible');

// Añadir a la tabla libro_categoria los siguientes valores: 10 libros con 2 categorias cada uno
// Campos: id_libro_categoria,id_libro,id_categoria	

INSERT INTO libro_categoria (id_libro, id_categoria) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2);


