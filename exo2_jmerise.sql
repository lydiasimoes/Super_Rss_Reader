#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: customer
#------------------------------------------------------------

CREATE TABLE customer(
        id_customer Int  Auto_increment  NOT NULL ,
        lastname    Varchar (50) NOT NULL ,
        firstname   Varchar (50) NOT NULL ,
        birthdate   Date NOT NULL ,
        mail        Varchar (50) NOT NULL
	,CONSTRAINT customer_PK PRIMARY KEY (id_customer)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: gender
#------------------------------------------------------------

CREATE TABLE gender(
        id_gender Int  Auto_increment  NOT NULL ,
        type_book Varchar (50) NOT NULL
	,CONSTRAINT gender_PK PRIMARY KEY (id_gender)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: author
#------------------------------------------------------------

CREATE TABLE author(
        id_author Int  Auto_increment  NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        firstname Varchar (50) NOT NULL
	,CONSTRAINT author_PK PRIMARY KEY (id_author)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: book
#------------------------------------------------------------

CREATE TABLE book(
        id_book          Int  Auto_increment  NOT NULL ,
        title            Varchar (50) NOT NULL ,
        author_lastname  Varchar (50) NOT NULL ,
        author_firstname Varchar (50) NOT NULL ,
        id_gender        Int NOT NULL ,
        id_author        Int NOT NULL
	,CONSTRAINT book_PK PRIMARY KEY (id_book)

	,CONSTRAINT book_gender_FK FOREIGN KEY (id_gender) REFERENCES gender(id_gender)
	,CONSTRAINT book_author0_FK FOREIGN KEY (id_author) REFERENCES author(id_author)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: loan_register
#------------------------------------------------------------

CREATE TABLE loan_register(
        id_loan_register Int  Auto_increment  NOT NULL ,
        loan_date        Date NOT NULL ,
        return_date      Date ,
        id_book          Int NOT NULL ,
        id_customer      Int NOT NULL
	,CONSTRAINT loan_register_PK PRIMARY KEY (id_loan_register)

	,CONSTRAINT loan_register_book_FK FOREIGN KEY (id_book) REFERENCES book(id_book)
	,CONSTRAINT loan_register_customer0_FK FOREIGN KEY (id_customer) REFERENCES customer(id_customer)
)ENGINE=InnoDB;

