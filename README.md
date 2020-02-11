### Instalación

1 paso: Clonar el repositorio

```bash
git clone https://github.com/soyFelixBarros/gestion.git
cd gestion
```

2 paso: Ejecutar docker compose

```bash
docker-compose up -d
```

3 paso: Ingresar dentro del contenedor de php para instalar las dependencias

```bash
docker exec -it gestion-php-fpm bash
composer install
```

### Base de datos

Al correr docker compose se crea automáticamente un base de datos y un usuario en MariaDB. Dichos datos se encuentran en el archivo **docker.compose.yml**:

```yml
- MYSQL_ROOT_PASSWORD=root
- MYSQL_DATABASE=gestion
- MYSQL_USER=demo
- MYSQL_PASSWORD=demo
```

Para configurar la conexión a la base de datos de nuestro proyecto, tenemos que editar el archivo **.env.local** y modificar la siguiente línea:

```yml
DATABASE_URL=mysql://demo:demo@mariadb/gestion
```