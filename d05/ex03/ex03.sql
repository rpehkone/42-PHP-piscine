insert into ft_table(login, `group`, creation_date)
select last_name, "other", birthdate from user_card
where length(last_name) < 9 and last_name like "%a%"
order by last_name asc
limit 10;
