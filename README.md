# ISUD
These are SELECT,INSERT,UPDATE,DELETE libraries in PHP


tip : there is PDO  connection. these files has been writen in OOP.
tip : the function are all public cause of accebility problems. Becides the connection function is mutual function between all functions.
tip : the "" are symbols of your parameters

You have to downlaod the library.php file to include it in your main php file.
first you have to include it in your file like this :
```php
include "library.php";
```
and then you must create an OBJ as OOP fundamentals :
```php
$obj = new library();
```

these are the samples

### CONNECTION
Altought php has a nice simple connection functions and the basics is ```php mysqli ``` function, thes function will connect to DATABASE and if it could not it will die and raise an error. with obj that you have created recently you can set access to the connection function in this way by creating a new variable.
You have to fill the function in that way you want :username, password,dbname


```php
$connect = $obj->connection("","","");

```
there you go, your connnection has been established.

### SELECT
we have to seprate functions. one of them is selecting one value and the other one is selecting all values

#### selectOneTuples

fill the parameters in this way : username,password,dbname,$option,tablename,condition,col
```php
$selector = $obj->selectOneTuple("","","","","","","");
```
#### selectAllTuples
fill the parameters in this way : username,password,dbname,tablename,condition,col

```php
$selectAll = $obj->selectAllTuples("","","","","","","");
```

### INSERT :

As selection, we have to seprate functions. one of them is inserting one value and the other one is inserting multiple values

#### insertOnetuple
in this function you have to fill these parameters : username,password,dbname,tablename,onevalue,col
```php
$insertone = $obj->insertOneTuples("","","","","","","","");
```
#### insertMultTuples
Fill the parameters in this way : username,password,dbname,tablename,value1,value2,value3,value4,value5,col

```php
$insertmult = $obj->insertMultTuples("","","","","","","","","","");
```

### Update

the same as Insert and select, there are functions ready 

#### updateOneTuple

fill it : username,password,dbname,tablename,col,value1,condition
```php
$updateone = $obj->updateOneTuple("","","","","","","");

```
#### updateMultTuples

fill it : username,password,dbname,tablename,value1,value2,value3,value4,value5,col1,col2,col3,col4,col5,condtion,condition
```php
$updateMultiple = $obj->updateMultTuples("","","","","","","","","","","","","","","","");
```

### Delete

fill it : username,password,dbname,tablename,condition
```php
$deletetuple = $obj->deleteTuple("","","","","","","","","");
```


I hope these classes can help you clean your codes












