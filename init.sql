CREATE TABLE public.posts (
    postid integer,
    postname character varying(255),
    postdescription text
);

insert into posts (postid, postname, postdescription) values (default, 'Post 1', 'Description 1');
insert into posts (postid, postname, postdescription) values (default, 'Post 2', 'Description 2');