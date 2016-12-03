CREATE TABLE items (                                                                                                                                                                                                    
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,                                                                                                                                                                         
    name VARCHAR(50),                                                                                                                                                                                                   
    theme VARCHAR(50),                                                                                                                                                                                                  
    rank INTEGER,                                                                                                                                                                                                       
    trivia TEXT,                                                                                                                                                                                                        
    created DATETIME DEFAULT NULL,                                                                                                                                                                                      
    modified DATETIME DEFAULT NULL                                                                                                                                                                                      
);
