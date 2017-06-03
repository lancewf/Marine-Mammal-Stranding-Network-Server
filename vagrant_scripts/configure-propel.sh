apt-get update
apt-get install php -y
apt-get install php-pear -y

pear channel-discover pear.phing.info
pear install phing/phing
pear install Log

apt-get install zip -y

mkdir -p /opt
wget -O /tmp/propel.zip https://github.com/propelorm/Propel/archive/1.7.1.zip
unzip /tmp/propel.zip -d /opt

echo 'export PATH=$PATH:/opt/Propel-1.7.1/generator/bin/' >> /home/vagrant/.bashrc
