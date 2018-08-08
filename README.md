# Alif_project

## Create a database called registration. In the registration database, add a table called users. The users table will take the following four fields.

id
username  -  varchar(100)
email  -  varchar(100)
password  -  varchar(100)

## or use this sql: 
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `username` varchar(100) NOT NULL, 
  `email` varchar(100) NOT NULL, 
  `password` varchar(100) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 


### For add to cart option follow these instructions: 
 #### 1. Create a databsae named "blog_template"
 #### 2. Then import the sql of tblproduct.sql
