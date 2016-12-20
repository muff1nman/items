
SELECT i.id AS id, i.name AS name, SUM(r.rating) AS total 
FROM ratings r, items i
WHERE r.name = i.name
GROUP BY name
UNION
SELECT id AS id, name AS name, 0 AS total
FROM items
WHERE name NOT IN
(SELECT DISTINCT name
 FROM ratings)
ORDER BY total DESC, id ASC;
