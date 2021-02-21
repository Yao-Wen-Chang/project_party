USE OnlineDating
DROP TABLE Users;
CREATE TABLE Users (
    ID int NOT NULL AUTO_INCREMENT,
    Username varchar(255) NOT NULL,
    Password varchar(255) NOT NULL,
    Gender enum('male', 'female') NOT NULL,
    Email varchar(255),
    Birth date,
    Job varchar(255) NOT NULL,
    City varchar(255),
    Avatar blob, 
    PRIMARY KEY (ID)
);
