select upper(last_name) as "NAME", first_name, price from user_card
inner join subscription on user_card.id_user = subscription.id_sub
where subscription.price > 42
order by last_name, first_name asc;
