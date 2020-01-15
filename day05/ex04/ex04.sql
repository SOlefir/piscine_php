UPDATE ft_table 
SET creation_date = TIMESTAMPADD(YEAR, 20, creation_date)
WHERE id > 5;