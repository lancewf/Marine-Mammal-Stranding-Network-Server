# Marine-Mammal-Stranding-Network-Server

## Database ORM

To generate new ORM files with Propel use vagrant.
1. From the root directory run `vagrant up`
1. ssh into the newly created vagrant vm with `vagrant ssh`
1. cd /vagrant/persistence/conf/
1. modify the schema.xml file with database changes. 
1. Then run `propel-gen`
1. The generated file will be in the `build` folder.
1. Copy the needed files to the correct location. 

## Dependencies
CodeIgniter 3.1.4
Propel 1.7.1
