php practitioner=================
part3: in order to see the code on browser we can define a server like
this:   php -S localhost:8888
-----------------------
part4: PHP and Html:
query builder:  when we pass ?key=value  in url ==> we need to define that variable in php document with a SUPERGLOBAL variable like this:
url: localhost:8080?name=moji
in php file: $name = $_GET['name']
===> another syntax for <?php echo    -----> <?=
htmlspecialchars($_GET['name'])  --> is a function that sanitizes the code viewers may add to url to manipulate our code. this function will convert that to a string and it wont be executed.   
------------------------
part5: separate php logic from the html view.
require:  is a function that pulls everything from the view to php file and links the view and php together. (separation of concerns)

-------------------------
part6:arrays
nothing new.
-------------------------
part7-Associative arrays:
associative arrays are made of pairs of 'key' => 'value'  ==> we use '' for strings.
in order to fetch both key and value in the view, we can use foreach loop this way:
<?php foreach($person as $key=>$val): ?>
       <li><?= $key ?> : <?= $val ?> </li>
<?php endoforeach; ?>

add a new pair of key/value to an existing array:   $array_name['key'] = 'value'
var_dump() ==> This function displays structured information about one or more expressions that includes its type and value.
die() ==> this function will execute inside it and stop the code.
for die and dump at the same time we can do :  die(var_dump($person)) or simply say: dd() in laravel.
for removing a value from the array we use:  unset($key['value']);
--------------------------
part8: booleans:
ucwords() ==> will make the text uppercase
turnery operators(inline if statement):
$x = $valid ? 'yes' : 'no';

-----------------------
part9 : Conditionals:
html unicode icons are so useful for small icons, instead of having to use extra libraries. these are just a few characters we put together and thats it. e.g.

----------------------
part 10: Functions:
we can write functins in another file and insert it into the main php code by saying:  require("<functions_file_name.php>");
we have to use the functions after we import the file. so the functions file import comes on the top after the php tag.
----------------------
part 11: MySql:
just as a reminder: (after logingin to mysql):
to create database:    create database <database_name>
to use the database:  use <database_name>
to make a table :  create table <table_name> (field1 type1, field2 type2, ,,,,,,,)
to list tables: show tables
to show a table's schema:  <table_name> describe
to drop a table:  drop table <table_name>
in order to make a field not Nullable ==> when we create table: create table <table_name> (field1 type1 NOT NULL, field2 type2, ,,,,,,,)
to make a field primary key we add PRIMARY KEY when we make the table.
to make a field auto increment we add AUTO_INCREMENT when we make the table.
to add data;  insert into <table_name> (field1, field2, ....) values(value1,value2, .....)
to show all records ==> select * from <table_name>
--------------------------
part 12: classes:
class name has to be capitalized.
on the top of the class we will have the constructor function. it will automatically be triggered everytime the class instantiates.
in order ro instantiate the class we say $task = new Task();
any values we need at the instantiation, we can pass them to constructor.
- inside the constructor we say:  $this-<variable_name>  = <variable_name>
also we pass the variable name in construct method.
- property of the class:   $this->description    ====> description is a property
- the instance of the class is called object.   
- before the construct, we need to say:  protected <property_name>
- if we want the default value for a property on the top we can say:    protected $property = <default_value>   
- inside the class we can define different functions. for example isComplete()  and reference them like:   $task->isComplete()
we can also define an array of class objects and define liek this:  
$tasks = [
new Task('go to store'),
new Task('do shopping'),
new Task('come back home')
]
- the values inside the class which are protected are not accessible outside the class. one way is to change the protected to public. the other way is;
make a public function with the same name and inside it return $this-><property> and then use the function outside the class.
-----------------------------------
