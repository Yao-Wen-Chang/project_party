USE OnlineDating
CREATE TABLE Party_User (
    UserID int,
    PartyID int, 
    PRIMARY KEY (PartyID, UserID),

    FOREIGN KEY (UserID) REFERENCES Users (ID),
    FOREIGN KEY (PartyID) REFERENCES Parties (ID)



);
