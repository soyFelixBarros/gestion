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

3 paso: Ingresar dentro del contenedo de php para instalar las dependencias

```bash
docker exec -it gestion-php-fpm bash
composer install
```