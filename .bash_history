ls
cd public_html/
ls
git pull git@github.com:nurielmeni/memad3.git
git clone git@github.com:nurielmeni/memad3.git
git clone https://github.com/nurielmeni/memad3.git
git pull
pwd
ls
cd memad3/
ls
cd ..
mv memad3/* ./
mv memad3/.* ./
mv memad3/*. ./
ls
rm -f memad3/
rm -rf memad3/
ll
git pull
php -r "copy('https://getcomposer.org/9991b72d9c8cbd3ffbc63edff210eb73d46ffbfce88669ad33695ef77dc76976') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" php composer-setup.php php -r "unlink('composer-setup.php');"
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'c5b9b6d368201a9db6f74e2611495f369991b72d9c8cbd3ffbc63edff210eb73d46ffbfce88669ad33695ef77dc76976') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
composer update --no-dev
./composer.phar update --no-dev
ll
php ./yii migrate
vi config/db.php 
ls
ls -la
