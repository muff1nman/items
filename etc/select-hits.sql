SELECT id, sessionid, CONVERT_TZ(created, "-04:00", "+11:30") 
FROM hits;
