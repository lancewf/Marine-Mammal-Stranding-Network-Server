# Marine-Mammal-Stranding-Network-Server


## Database ORM

The database ORM is generated with (propel 1.6)[https://github.com/propelorm/Propel/releases/tag/1.6]. 

Install php-pear. 

```
sudo apt-get install php-pear
```

Then install phing/phing through pear.
```
pear channel-discover pear.phing.info
pear install phing/phing
pear install Log
```

Then install propel download https://github.com/propelorm/Propel/archive/1.6.zip. 

To generate the database files run `propel-gen om` in the same directory as the build.properties and schema.xml file. 
Then merge the file in the the existing files. 

CodeIgniter 3.1.4
