# Requirements

```
Docker >= 19.03.0+
Docker Compose >= 1.27.0+
```
Command `docker-compose` should be available in terminal

# Installation

Clone repository.
``` shell
git clone https://github.com/sanfair/phpstan-rector-demo.git
```

Enter new folder.
```shell
cd phpstan-rector-demo
```


Install docker containers.
```shell
make
```

Install dependencies.
```shell
make php72 "composer install"
```

# Usage

Execute script using specified php version.
```shell
make php71 "php src/index.php"
make php72 "php src/index.php"
make php74 "php src/index.php"
make php80 "php src/index.php"
```

Run PHPStan using specified php version.
```shell
make php72 "vendor/bin/phpstan"
make php74 "vendor/bin/phpstan"
make php80 "vendor/bin/phpstan"
```

Run Rector using specified php version.
```shell
make php72 "vendor/bin/rector --dry-run"
make php74 "vendor/bin/rector --dry-run"
make php80 "vendor/bin/rector --dry-run"
```
