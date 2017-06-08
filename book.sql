CREATE TABLE book (
  book_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(255),
  category varchar(255),
  description varchar(255)
);

insert into book (
  name,
  category,
  description
)
VALUES (
  'PHP',
  'Web Development',
  'Lear PHP!'
);
