USE OnlineDating
DROP TABLE Posts;
CREATE TABLE Posts (
    ID int NOT NULL AUTO_INCREMENT,
    Post_content varchar(255),
    Post_time datetime NOT NULL, 
    Like_num int DEFAULT 0,
    PRIMARY KEY (ID)
);
