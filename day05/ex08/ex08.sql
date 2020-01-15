SELECT last_name, first_name, DATE_FORMAT(`birthdate`, '%Y-%m-%d') as birthdate
FROM user_card
ORDER BY last_name ASC;