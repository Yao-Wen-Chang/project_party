USE OnlineDating
CREATE TABLE User_Post (
    UserID int,
    PostID int, 
    PRIMARY KEY (PostID, UserID),

    FOREIGN KEY (UserID) REFERENCES Users (ID),
    FOREIGN KEY (PostID) REFERENCES Posts (ID)



);
