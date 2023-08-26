# Projet de demo pour Navily
Pendant la phase de recrutement, Navily ne m'a pas donner de test a faire, juste un echange technique. J'ai pris l'initiative de faire rapidement une fonctionnalité de sur leur site internet, la partie authentification.
Afin de gagner du temps, j'ai copié collé leur css, etc, tout ce qui etait accessible publiquement

Tout a été fait en TDD. J'avais commencé un storybook mais j'ai manqué de temps. J'ai fait quelques tests d'interfaces avec Laravel Dusk 

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
