select count(*) as "movies" from member_history
where ((date(`date`) < date("2007-07-27")) and (date(`date`) > date("2006-10-30"))) or
	(date_format(`date`, "%m-%d") = date_format("2000-12-24", "%m-%d"));
