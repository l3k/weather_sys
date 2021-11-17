# :rocket: Sobre o projeto

Esse projeto foi desenvolvido com a finalidade de teste, o mesmo serve como Api para o projeto no link abaixo:

- [WeatherApp](https://github.com/l3k/weather_app)

# 🤔 Como excutar

Antes de executar os passos abaixo é necessário ter o PHP em sua versão 8 instalado e o gerenciador de pacotes do mesmo, o Composer. Para mais informações acesse as documentações nos links abaixo

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)


### Passo 1: Faça o clone ou download do projeto:
```sh
git clone https://github.com/l3k/weather_sys.git
```


### Passo 2: Download das dependências do PHP:
```sh
composer install
```

### Passo 3: Gerando arquivo .env:
Na pasta raiz do projeto execute o comando abaixo
```sh
cp .env.example .env
```


### Passo 4: Configurando APP_KEY:
   - Aceese o site [OpenWeather](https://openweathermap.org/)
   - Crie uma conta
   - Crie um AppKey
   - Abra o arquivo ``.env``
   - Copie e cole a AppKey gerada anteriormente na chave ``APP_KEY_OPENWEATHER``

### Passo 5: Configurando cache:
```sh
php artisan key:generate
php artisan config:cache
php artisan cache:clear
php artisan config:clear
```

### Passo 6: Iniciando servidor:
```sh
php artisan serve
```


Feito com ♥ e ☕ por Lucas Krul 
