/** Welcome to the user resource SQL.
This SQL will contains all of the user uploaded forms.
**/

CREATE TABLE users (id INTEGER PRIMARY KEY, item_ID TEXT, description TEXT, upload_date INTEGER);
INSERT INTO users VALUES (001, "Nyan Cat", "This is a nyan cat.", 23)
