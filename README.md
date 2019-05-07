Imhio

### Backend Deploy

###### install dependency for symfony
`composer install`

###### add `.env` file and code inside
`CORS_ALLOW_ORIGIN=.`
 
###### fetch symfony serve
`curl -sS https://get.symfony.com/cli/installer | bash`

###### add global command

`export PATH="$HOME/.symfony/bin:$PATH"`

###### start serve

`symfony server:start`


### Frontend Deploy

`yarn install `

`npm run dev`
