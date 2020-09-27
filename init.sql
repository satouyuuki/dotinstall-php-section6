create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;


後で文字コードの問題になりそう
SHOW VARIABLES LIKE '%collation%';
SHOW VARIABLES LIKE '%char%';

// TODO 追加予定
- ./mysql/db/my.cnf:/etc/mysql/conf.d/my.cnf
- ./mysql/db/sql:/docker-entrypoint-initdb.d
