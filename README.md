<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

**condicionais**
***Padrão email:***
Segue a lista de pendencias:

lista -> n de colaboradores

**Colaboradores** - vencidos : **objetos** e **outra coisa**

Fonte: [Laravel Docs](https://laravel.com/docs/9.x)

<h1> Teoria de Laravel</h1>

## 1.0 - Introdução

O Laravel é um framework muito utilizado em PHP. Utiliza a arquitetura **MVC**. 
- Model: que lida com dados.
- Controller: as lógicas de programação.
- View: trata das exibições do código.

## 2.0 - Rotas e Views

## 2.1 - Básico
As **Routes** controlam os fluxos invocando os **views**, que são as representações gráficas.Elas são instauradas através dos **tampletes(blade)**,geralmente em HTML.

### Metodos
O roteador permite cadastrar rotas que respondem a qualquer verbo HTTP.

```php
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
```
Se precisar fazer várias rotas que respondem ao mesmo verbo HTTP usamos a função match.

```php
Route::match(['get', 'post'], '/', function () {});
Route::any('/', function () {});
```
### Injeção de dependência
Você pode digitar qualquer dependência exigida as dependências declaradas serão automaticamente resolvidas e injetadas no callback
```php
use Illuminate\Http\Request;
 
Route::get('/users', function (Request $request) {
    // ...
});
```
### Redirecionamento
Se você estiver definindo uma rota que redireciona para outro URI.
```php
Route::redirect('/here', '/there');
```
### Comandos artisan
```php
php artisan route:list -> visão geral das routes definidas
php artisan route:list -v ->exibir o middleware de rota adicionando
php artisan route:list --path=api -> começam com determinado uri
```


## 2.2 - Parâmetros de rota
### Parâmetros Necessários
Às vezes, você precisará capturar segmentos do URI em sua rota.

```php
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});
```
Parâmetros de rota são sempre colocados dentro {}chaves e deve consistir em caracteres alfabéticos. Sublinhados (_) também são aceitáveis ​​em nomes de parâmetros de rota.
### Parâmetros e Injeção de Dependência 

Ocasionalmente, pode ser necessário especificar um parâmetro de rota que nem sempre esteja presente no URI.

```php
use Illuminate\Http\Request;
 
Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});
```
## Restrições de Expressão Regular 
Você pode restringir o formato de seus parâmetros de rota usando o wheremétodo em uma instância de rota. o whereO método aceita o nome do parâmetro e uma expressão regular definindo como o parâmetro deve ser restringido:
```php
Route::get('/user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');
 
Route::get('/user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');
 
Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


# --------------------- Metodos ja setados ----------------------

Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->whereNumber('id')->whereAlpha('name');
 
Route::get('/user/{name}', function ($name) {
    //
})->whereAlphaNumeric('name');
 
Route::get('/user/{id}', function ($id) {
    //
})->whereUuid('id');
 
Route::get('/user/{id}', function ($id) {
    //
})->whereUlid('id');
 
Route::get('/category/{category}', function ($category) {
    //
})->whereIn('category', ['movie', 'song', 'painting']);
```

### Restrições globais
Se você quiser que um parâmetro de rota seja sempre limitado por uma determinada expressão regular, você pode usar o patternmétodo.Uma vez definido o padrão, ele é aplicado automaticamente a todas as rotas que usam esse nome de parâmetro.

```php

public function boot()
{
    Route::pattern('id', '[0-9]+');}


Route::get('/user/{id}', function ($id) {
    // Only executed if {id} is numeric...} );
```
## Rotas nomeadas
As rotas nomeadas permitem a geração conveniente de URLs ou redirecionamentos para rotas específicas. Você pode especificar um nome para uma rota encadeando o namemétodo na definição de rota:

```php
Route::get('/user/profile', function () {
    //
})->name('profile');

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');
```
Depois de atribuir um nome a uma determinada rota, você pode usar o nome da rota ao gerar URLs ou redirecionar por meio do Laravel routee redirectfunções auxiliares: 

```php
Route::get('/user/profile', function () {
    //
})->name('profile');

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');
```
## Grupo de rotas
Os grupos de rotas permitem que você compartilhe atributos de rota, como middleware, em um grande número de rotas sem precisar definir esses atributos em cada rota individual. 
### Middleware
O middleware fornece um mecanismo conveniente para inspecionar e filtrar as solicitações HTTP que entram em seu aplicativo. Por exemplo, o Laravel inclui um middleware que verifica se o usuário do seu aplicativo está autenticado. Se o usuário não estiver autenticado, o middleware redirecionará o usuário para a tela de login do seu aplicativo. No entanto, se o usuário estiver autenticado, o middleware permitirá que a solicitação prossiga para o aplicativo. 

Para atribuir middleware a todas as rotas dentro de um grupo, você pode usar o middlewareantes de definir o grupo. Os middlewares são executados na ordem em que estão listados no array: 

```php
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
 
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
```
## Prefixos de rota 
o prefixO método pode ser usado para prefixar cada rota no grupo com um determinado URI.Por exemplo, você pode querer prefixar todos os URIs de rota dentro do grupo com admin: 

```php
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
```
o nameO método pode ser usado para prefixar cada nome de rota no grupo com uma determinada string. Por exemplo, você pode querer prefixar todos os nomes de rotas agrupadas com admin

```php
Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});
```

## 3 - Proteção CSRF(Cross-site request forgery)
Imagine que seu aplicativo tenha um /user/emailrota que aceita um POSTsolicitação para alterar o endereço de e-mail do usuário autenticado. Muito provavelmente, esta rota espera um emailcampo de entrada para conter o endereço de e-mail que o usuário gostaria de começar a usar. 
Sem proteção CSRF, um site mal-intencionado pode criar um formulário HTML que aponta para o endereço do seu aplicativo /user/emailroute e envia o próprio endereço de e-mail do usuário mal-intencionado: 
Para evitar essa vulnerabilidade, precisamos inspecionar todas as entradas POST, PUT, PATCH, ou DELETEsolicitação de um valor de sessão secreta que o aplicativo mal-intencionado não consegue acessar. 



## 3 - Controllers
Os controladores podem agrupar a lógica de tratamento de solicitações relacionadas em uma única classe. Por exemplo, um UserControllerA classe pode lidar com todas as solicitações recebidas relacionadas aos usuários, incluindo exibição, criação, atualização e exclusão de usuários. Por padrão, os controladores são armazenados no app/Http/Controllersdiretório.


## 3.0 Layouts com Blade
O layoyt permite que a gente reaproveite o código. Usando o mesmo header e footer em todas as páginas sem repetir o código.

**1- Criar arquivo Blade na pasta Layout**
```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- muda o titulo da página dinamicamente --}}
        <title>@yield('title')</title>

        {{-- FONTES DO GOOGLE --}}
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- BOOTSTRAP --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        

        <script src="/js/script.js"></script>
    </head>
    <body>
        {{-- muda o conteudo da pagina dinamicamente --}}
        @yield('content')
        <footer>
            <p> HDC Events &copy; 2020</p>
        </footer>
    </body>

</html>
```

Uma vez criado o blade padrão de template, temos que acrescenta-lo na página que gostaria. POr exemplo, iremos adicionar o rodapé (footer) e o titulo dinamico na página welcome.

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- muda o titulo da página dinamicamente --}}
        <title>@yield('title')</title>

        {{-- FONTES DO GOOGLE --}}
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        {{-- BOOTSTRAP --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        

        <script src="/js/script.js"></
       
        script>
    </head>
    <body>
        {{-- muda o conteudo da pagina dinamicamente --}}
        @yield('content')
        <footer>
            <p> HDC Events &copy; 2020</p>
        </footer>
    </body>

</html>
 ```


### Resgatando parâmetros de URL
Se temos, por exemplo,uma aba de produtos onde podemos encontrar diversos produtos diferentes.Podemos expandir a página para cada produtor ter seu URL.

```php
Route::get('/produtos/{$id}', function ($id) {
    return view('produto',['id'=>$id]);
});

```


```php
Route::get('/produtos', function () {
    $busca=request('search');

    return view('produto',['busca'=>$busca]);
});

```

- Criando 

No blade:
```html
 <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="/img/hdcevents_logo.svg" alt="HDC Events">
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">Eventos</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Criar Eventos</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Entrar</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Cadastrar</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
```

## 4.0 Controller

No geral é onde a maior parte da lógica se localiza.
- Envia e espera resposta do banco de dados.
- Envia e recebe resposta das views.
- Podem ser criados via artisan.
```php
/*Criando o controller */

php artisan make:controller Nome

/*Importando o controller no route */
use App/Http/Controller/Nomedocontroller; 

Route::get('/', [Controller1::class,'index']);
```
Index é uma função que está dentro do controller bia.

## 5.0 Banco de Dados

- Configurada pelo arquivo .env.
- Maior segurança, já que os dados não serão acessados diretamente.
- Utilização um **ORM** (Object- Relational Mapping) chamado _**Eloquent**_.
- Migration auxilia mexer com o banco.

No meu caso, utilizei o gerenciador de banco de dados Dbeaver.Quando vamos sincronizar o banco com o VSCODE tem que conpiar o arquivo .env para lá através do comando:

```linux
cp .env.localhost .env -> copia o banco de dados
php artisan key:generate
```

## Migrations
Funciona como um versionamento de banco, podemos adiconar colunas,remover, verificar status do banco.


-----------------------------------------------------------------------------------------

# API - GER LOGIN

## 1.0 - WEB