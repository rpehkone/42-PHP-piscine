create table ft_table
(
	id int auto_increment not null,
	login varchar(8) default "toto" not null,
	`group` enum("staff", "student", "other") not null,
	creation_date date not null,
	primary key (id)
);
