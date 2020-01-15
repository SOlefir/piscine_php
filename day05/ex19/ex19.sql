SELECT DATEDIFF(DATE(MAX(date)), DATE(MIN(date))) 'uptime'
FROM member_history;