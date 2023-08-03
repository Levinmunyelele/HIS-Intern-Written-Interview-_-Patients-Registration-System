CREATE DATABASE patients_form;
CREATE TABLE patients (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  date_of_birth DATE NOT NULL,
  id_number VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  county VARCHAR(255) NOT NULL,
  sub_county VARCHAR(255) NOT NULL,
  telephone VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  gender VARCHAR(255) NOT NULL,
  marital_status VARCHAR(255) NOT NULL,
  next_of_kin_name VARCHAR(255) NOT NULL,
  next_of_kin_date_of_birth DATE NOT NULL,
  next_of_kin_id_number VARCHAR(255) NOT NULL,
  next_of_kin_gender VARCHAR(255) NOT NULL,
  next_of_kin_relationship VARCHAR(255) NOT NULL,
  next_of_kin_telephone VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);