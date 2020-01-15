SELECT COUNT(date) 'movies'
FROM member_history
WHERE DATE(date) >= '2006-10-30' && DATE(date) <= '2007-07-27' || DATE(date) LIKE '%12-24';