INSERT INTO users (name, phone, email, birthday) VALUES ('hai', '098765432', 'nghea@gmail.com', '1999-02-02'), ('nhan', '098765432', 'nghea@gmail.com', '1999-02-02'), ('nhan', '098765432', 'nghea@gmail.com', '1999-02-02'), ('nhan', '098765432', 'nghea@gmail.com', '1999-02-02'), ('nhan', '098765432', 'nghea@gmail.com', '1999-02-02'), ('nhan', '098765432', 'nghea@gmail.com', '1999-02-02')

SELECT * FROM users WHERE name LIKE'%a%'

UPDATE users
SET email = 'a@gmail.com'
WHERE email LIKE '%n%' OR phone LIKE '%5%'

DELETE	FROM users
WHERE birthday LIKE '%1999%' AND phone LIKE '%8%'