# lerning-with-mySQL

### What's the Goal
Here I'am trying to lern littel bit op MySQL.
- How to connect php with SQL
- make a new data 
- connect that data to SQL
- read data from MySQL
- Update data in Php (change it in MySQL)
- Delete data

### What's happing

- I made a simple layout onlu username and password
- used a bootstrap to make responsive

#### login_create
Here I try to learn how to connect with MySQL. Made a form and gave the name. Made a variable where that data can be saved.
 ##### CODE TO REMEMBER (variable can be changed)
 - if (isset($_POST['submit']))
 ==> If buttun is select it runs
 - $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
 ==> It will connect to database
 - $query = "INSERT INTO users (username, password)";
 ==> The things we made in MySQL
 - $query .= "VALUE ('$username', '$password')";
 ==> Which value we want to save
 - $result = mysqli_query($connection, $query);
 ==> to save value to database

#### login_read
How can we read data from MySQL in php. That is what I try to know here.
##### CODE TO REMEMBER (variable can be changed)
- if (isset($_POST['submit'])) 
==> is not need here
- $query = "SELECT * FROM users";
==> select all data from
- while($row = mysqli_fetch_assoc($result)){ print_r($row);}
==> in html we can show data. Data is in array so we have to loop.

#### login_update 
Made a form to change data in MySQL. Create input id to know which data to change. To many code in one place so I made new database.php file. This file will connect to MySQL.
##### CODE TO REMEMBER (variable can be changed)
- $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
==> it will update username from value variable username and so on

In login_update I had a lot of problem too many error but all were simple error like space, forgot put ; , wrote code outside of if statement so it was showing variable undefine, in form action wrote wrong name.

#### login_delete
Here I will try to delete data from that I have create by login_create.php.
##### CODE TO REMEMBER (variable can be changed)
- $query = "DELETE FROM users WHERE id='$id'"; ==> This code will delete data 