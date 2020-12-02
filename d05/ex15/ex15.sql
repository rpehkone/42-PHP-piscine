select reverse(right(phone_number, length(phone_number) - 1)) as "rebmunenohp" from distrib
where phone_number like "05%";
