# Installation
## Install Tailwind via npm
`npm install -D tailwindcss@latest autoprefixer@latest`

## Create your configuration file
* Create default config file: `npx tailwindcss init --full`
* Create custom config file: `npx tailwindcss init`

## Build css
* development: `npx tailwindcss-cli@latest build ./src/styles.css -o ./public/styles.css`
* prod: set `NODE_ENV=production` before running `npx tailwindcss-cli@latest build ./src/styles.css -o ./public/styles.min.css`