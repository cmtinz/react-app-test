CREATE TABLE posts (postId SERIAL PRIMARY KEY, postName character varying(255), postDescription text);
insert into posts (postName, postDescription) values ('Post 1', 'Descripción 1');
insert into posts (postName, postDescription) values ('Post 2', 'Descripción 2');
insert into posts (postName, postDescription) values ('Post 3', 'Descripción 3');