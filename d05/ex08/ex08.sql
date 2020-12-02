select last_name, first_name, date(birthdate) as "birthdate" from user_card
where birthdate like "%1989%"
order by last_name;
