/** Welcome to the user resource SQL.
This SQL will contains all of the user uploaded forms.
**/

CREATE TABLE users (
  ID INTEGER PRIMARY KEY,
  item_ID TEXT,
  description TEXT,
  upload_date INTEGER,
  upload_month INTEGER,
  upload_year INTEGER,
  views INTEGER);

  CREATE TABLE activity (
    ID INTEGER PRIMARY KEY,
    comment TEXT,
    receiverID TEXT,
    upload_date INTEGER,
    upload_month INTEGER,
    upload_year INTEGER,
    views INTEGER,
  reactions INTEGER);

INSERT INTO users VALUES (001, "Nyan Cat", "This is a nyan cat.", 23)
