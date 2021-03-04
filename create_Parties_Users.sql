USE OnlineDating
CREATE TABLE Membership (
    UserID int,
    PartyID int, 
    PRIMARY KEY (PartyID, UserID),

    CONSTRAINT memberUser FOREIGN KEY (UserID) REFERENCES Users (ID),
    CONSTRAINT memberParty FOREIGN KEY (PartyID) REFERENCES Parties (ID)



);
