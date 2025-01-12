# EMS-ERP

* PHP 7.3 ou superior
* Banco de dados (por exemplo: MySQL, PostgreSQL, SQLite)
* Servidor Web (por exemplo: Apache, Nginx, IIS)

## Framework

EMS-ERP usa o [Laravel](http://laravel.com), o melhor framework PHP atualmente, como base.

## Instalação

* Instale o [Composer](https://getcomposer.org/download) e o [Npm](https://nodejs.org/en/download)
* Clone o repositório: `git clone https://github.com/skarmory777/EMS-ERP-laravel.git`
* Depois acesse a pasta EMS-ERP-laravel, `cd EMS-ERP-laravel`
* Instale as dependências `composer install ; npm install ; npm run production`
* Crie o arquivo de configuração de variáveis de ambiente `cp .env.production .env`
* Configure as variáveis de ambiente e a conexão com o banco de dados no arquivo .env
* Rode os seeders `php artisan migrate:fresh --seed`
* Rode `php artisan key:generate`
* Rode `php artisan serve` para iniciar o servidor.
* Acesse o EMS-ERP no navegador: http://localhost:8000 ou url que você configurar.
* E logue com as credenciais

```bash
Login: admin@admin.com
Senha: admin
```

## Dependências de front-end

Ao atualizar dependências de front-end ou alterar arquivos CSS ou JS você precisará seguir as instruções abaixo.

1. Garanta que tenha o Node e NPM instalado.

```
npm install
```

2. Execute o comando abaixo para compilar o CSS e JS:

```
npm run prod
```

Este comando irá gerarr os arquivos dentro da pasta `public` com os arquivos CSS, e JavaScript minificados.

## Contribuindo

Por favor, seja muito claro em suas pull requests, as pull requests podem ser rejeitadas sem motivo.

Ao contribuir com código para o EMS-ERP, você deve seguir os padrões de codificação PSR-2. A regra de ouro é: Imite o código EMS-ERP existente.

## Changelog

Por favor, consulte [Changelog](CHANGELOG.md) para obter mais informações sobre todas as atualizações.

## Segurança

Se você descobrir algum problema relacionado à segurança, envie um email para gian_bine@hotmail.com ao invés de usar o issue tracker.

## Créditos

* [Ramon Silva](https://github.com/RamonSilva20)
* [Willmerson](https://github.com/willph)
* [Gianluca Bine](https://github.com/Pr3d4dor)
* [Todos os Contribuidores](../../contributors)

## Licença

O EMS-ERP é distribuído utilizando a [MIT License](LICENSE.md).
