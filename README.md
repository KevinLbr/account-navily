# Projet de demo pour Navily

## Composer install
```bash
docker run --rm --interactive --tty --volume $PWD:/app --volume ${COMPOSER_HOME:-$HOME/.composer}:/tmp composer install
```

## Copy env
```bash
cp .env.example .env
```

## Generate Key 
```bash
sail art key:generate
```

## Install npm package
```bash
sail npm install
sail npm run dev
```

## Migrate & seed
```bash
sail art migrate --seed
```