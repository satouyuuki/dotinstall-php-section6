create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;

create table posts (
  id int not null auto_increment primary key,
  user_id int not null,
  text text not null,
  created datetime,
  modified datetime
);


後で文字コードの問題になりそう
SHOW VARIABLES LIKE '%collation%';
SHOW VARIABLES LIKE '%char%';

// TODO 追加予定
- ./mysql/db/my.cnf:/etc/mysql/conf.d/my.cnf
- ./mysql/db/sql:/docker-entrypoint-initdb.d


select p.text, u.email from posts as p INNER JOIN users as u on p.user_id = u.id
