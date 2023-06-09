# Correr laravel con Docker

```bash
$ curl -s "https://laravel.build/example-app" | bash
$ cd example-app
 
$ ./vendor/bin/sail up
$ ./vendor/bin/sail down
```

Se puede crear un alias de sail para la carpeta raiz del proyecto por ejemplo en `.bash_profile`

```sh
nano ~/.bash_profile
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
source ~/.bash_profile

sail up
sail down
```

# Correr laravel sin Docker en Mac

Instalar php y composer con `brew`
```bash
brew search php
brew install php
brew install composer
```
Despues de instalar las dependencias para laravel ejecutamos lo siguiente
```sh
mkdir Laravel && cd Laravel
(Laravel): composer create-project laravel/laravel project_name
(project_name): php artisan migrate
(project_name): php artisan migrate:rollback
(project_name): php artisan serve
(navigator): http:127.0.0.1:8000/
```

# Correr ejemplos php

```bash
$ php -S localhost:3000
$ http://localhost:3000/01.php
```
