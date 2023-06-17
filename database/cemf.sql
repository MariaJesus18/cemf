drop database if exists cemf;
create database cemf;
use cemf;

INSERT INTO covenants
VALUES ( 1, 'teste', 10,'2023-06-08 21:23:59', '2023-06-08 21:23:59');

INSERT INTO modalitys
VALUES ( 1, 'teste', 'aa','2023-06-08 21:23:59', '2023-06-08 21:23:59');

INSERT INTO responsibles
VALUES ( 1, 'teste', 10101,'a','1','1','1','1','1','1','1','1','1','1','1','1','1',1,1,'2023-06-08 21:23:59', '2023-06-08 21:23:59',default);

INSERT INTO schools
VALUES ( 1, 'teste','2023-06-08 21:23:59', '2023-06-08 21:23:59');

INSERT INTO subjects
VALUES (1, 'mat', default,'2023-06-08 21:23:59',default),(2, 'mat', default,'2023-06-08 21:23:59',default),(3, 'mat', default,'2023-06-08 21:23:59',default);

INSERT INTO students
VALUES ( 1, 'teste', 10101,'1','1','1','1','1','1','1','1','1','1','1',1,1,1,true,'2023-06-08 21:23:59', '2023-06-08 21:23:59',default);

INSERT INTO units
VALUES ( 1, 'teste', 10101,'1','1','1','1','1','1','1','1','1','1','1','2023-06-08 21:23:59', '2023-06-08 21:23:59');

INSERT INTO type_releases (id,title,created_at,updated_at)
VALUES ( 1, 'teste', '2023-06-08 21:23:59', '2023-06-08 21:23:59');