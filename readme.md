
## Sobre o Projeto

Depois alguem vem aqui e edita esse texto!

## Como instalar o projeto

- Clonar o repositório com : `git clone -b dev https://gitlab.com/matthausnawan/oscviva-v1.git`
- Criar o banco de dados localmente
- configurar o .env que se encontra na raiz do projeto as variáveis:

    `APP_NAME=OSCVIVA`
    `APP_URL=http://oscviva-v1.test (somente para quem usa laragon)`
    
    `DB_CONNECTION=mysql`
    `DB_HOST=127.0.0.1`
    `DB_PORT=3306`
    `DB_DATABASE=nomeDoBanco`
    `DB_USERNAME=usuarioDoBanco`
    `DB_PASSWORD=senha (se nao tiver deixar em branco)`

- Abrir o console/terminal na pasta do projeto e executar o comando artisan: 
    `php artisan key:generate`
- atualizar as dependencias do composer com o comando: 
    `composer install`    
- por fim no terminal executar o comando artisan para criar as tabelas: 
    `php artisan migrate --seed`
- poderá optar por executar o projeto com o comando artisan:
    `php artisan serve`
   o projeto estará servido no endereço: http://localhost:8000/ e quem usa o laragon é so digitar no navegador oscviva-v1.test

## Desenvolvedores

Aos desenvolvedores trabalharem sempre na branch dev nunca na master! ou vou comer seu figado!

para mudar de branch:  git checkout dev

## Sem mais!
