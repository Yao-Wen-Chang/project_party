USE OnlineDating
DROP TABLE Parties;
CREATE TABLE Parties (
    ID int NOT NULL AUTO_INCREMENT,
    Party_name varchar(255) NOT NULL,
    Holder varchar(255) NOT NULL,
    Party_type varchar(255) NOT NULL,
    Party_time datetime NOT NULL, 
    Location varchar(255) NOT NULL,
    Limit_members_num int DEFAULT 0,
    Curr_members_num int DEFAULT 0,
    Description varchar(255),
    PRIMARY KEY (ID)
);
