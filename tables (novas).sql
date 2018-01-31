CREATE TABLE customers (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  cpf varchar(14) NOT NULL,
  mail varchar(100) NOT NULL,
  password varchar(255) NOT NULL,
  birthdate date NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code int(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(100) NOT NULL,
  phone int(13) NOT NULL,
  mobile int(13) NOT NULL,
  photo longblob NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL,
  ip binary(16) NOT NULL
);

ALTER TABLE customers
  ADD PRIMARY KEY (id);
  
ALTER TABLE customers
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE advisors (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  cpf varchar(14) NOT NULL,
  mail varchar(100) NOT NULL,
  password varchar(255) NOT NULL,
  birthdate date NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code int(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(100) NOT NULL,
  phone int(13) NOT NULL,
  mobile int(13) NOT NULL,
  photo longblob NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL,
  ip binary(16) NOT NULL
);

ALTER TABLE advisors
  ADD PRIMARY KEY (id);
  
ALTER TABLE advisors
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


CREATE TABLE administrators (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  cpf varchar(14) NOT NULL,
  mail varchar(100) NOT NULL,
  password varchar(255) NOT NULL,
  birthdate date NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code int(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(100) NOT NULL,
  phone int(13) NOT NULL,
  mobile int(13) NOT NULL,
  photo longblob NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL,
  ip binary(16) NOT NULL
);

ALTER TABLE administrators
  ADD PRIMARY KEY (id);
  
ALTER TABLE administrators
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE gyms (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  cnpj varchar(14) NOT NULL,
  mail varchar(100) NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code int(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(100) NOT NULL,
  phone int(13) NOT NULL,
  mobile int(13) NOT NULL,
  icon longblob NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

ALTER TABLE gyms
  ADD PRIMARY KEY (id);
  
ALTER TABLE gyms
MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;