
SELECT name, SUM(rating) AS total 
FROM ratings
GROUP BY name
ORDER BY total DESC, id ASC;
