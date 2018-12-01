
## Sobre o Projeto



## Como instalar o projeto

- Clonar o repositório com : `git clone -b dev https://gitlab.com/matthausnawan/oscviva-v1.git`
- Criar o banco de dados localmente
- configurar o .env que se encontra na raiz do projeto as variáveis:

    1.`APP_NAME=OSCVIVA`
    2.`APP_URL=http://oscviva-v1.test (somente para quem usa laragon)`
    
    1.`DB_CONNECTION=mysql`
    2.`DB_HOST=127.0.0.1`
    3.`DB_PORT=3306`
    4.`DB_DATABASE=nomeDoBanco`
    5.`DB_USERNAME=usuarioDoBanco`
    6.`DB_PASSWORD=senha (se nao tiver deixar em branco)`

- Abrir o console/terminal na pasta do projeto e executar o comando artisan:  
`php artisan key:generate`
- atualizar as dependencias do composer com o comando:  
`composer install`    
- por fim no terminal executar o comando artisan para criar as tabelas:  
`php artisan migrate --seed`
- poderá optar por executar o projeto com o comando artisan:  
`php artisan serve`  
o projeto estará servido no endereço: http://localhost:8000/ e quem usa o laragon é so digitar no navegador http://oscviva-v1.test

