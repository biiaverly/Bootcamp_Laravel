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
***Padr??o email:***
Segue a lista de pendencias:

lista -> n de colaboradores

**Colaboradores** - vencidos : **objetos** e **outra coisa**

Fonte: [Laravel Docs](https://laravel.com/docs/9.x)

<h1> Teoria de Laravel</h1>

## 1.0 - Introdu????o

O Laravel ?? um framework muito utilizado em PHP. Utiliza a arquitetura **MVC**. 
- Model: que lida com dados.
- Controller: as l??gicas de programa????o.
- View: trata das exibi????es do c??digo.

## 2.0 - Rotas e Views

## 2.1 - B??sico
As **Routes** controlam os fluxos invocando os **views**, que s??o as representa????es gr??ficas.Elas s??o instauradas atrav??s dos **tampletes(blade)**,geralmente em HTML.

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
Se precisar fazer v??rias rotas que respondem ao mesmo verbo HTTP usamos a fun????o match.

```php
Route::match(['get', 'post'], '/', function () {});
Route::any('/', function () {});
```
### Inje????o de depend??ncia
Voc?? pode digitar qualquer depend??ncia exigida as depend??ncias declaradas ser??o automaticamente resolvidas e injetadas no callback
```php
use Illuminate\Http\Request;
??
Route::get('/users', function (Request $request) {
    // ...
});
```
### Redirecionamento
Se voc?? estiver definindo uma rota que redireciona para outro URI.
```php
Route::redirect('/here', '/there');
```
### Comandos artisan
```php
php artisan route:list -> vis??o geral das routes definidas
php artisan route:list -v ->exibir o middleware de rota adicionando
php artisan route:list --path=api -> come??am com determinado uri
```


## 2.2 - Par??metros de rota
### Par??metros Necess??rios
??s vezes, voc?? precisar?? capturar segmentos do URI em sua rota.

```php
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});
```
Par??metros de rota s??o sempre colocados dentro {}chaves e deve consistir em caracteres alfab??ticos. Sublinhados (_) tamb??m s??o aceit??veis ??????em nomes de par??metros de rota.
### Par??metros e Inje????o de Depend??ncia 

Ocasionalmente, pode ser necess??rio especificar um par??metro de rota que nem sempre esteja presente no URI.

```php
use Illuminate\Http\Request;
??
Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});
```
## Restri????es de Express??o Regular 
Voc?? pode restringir o formato de seus par??metros de rota usando o wherem??todo em uma inst??ncia de rota. o whereO m??todo aceita o nome do par??metro e uma express??o regular definindo como o par??metro deve ser restringido:
```php
Route::get('/user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');
??
Route::get('/user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');
??
Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


# --------------------- Metodos ja setados ----------------------

Route::get('/user/{id}/{name}', function ($id, $name) {
    //
})->whereNumber('id')->whereAlpha('name');
??
Route::get('/user/{name}', function ($name) {
    //
})->whereAlphaNumeric('name');
??
Route::get('/user/{id}', function ($id) {
    //
})->whereUuid('id');
??
Route::get('/user/{id}', function ($id) {
    //
})->whereUlid('id');
??
Route::get('/category/{category}', function ($category) {
    //
})->whereIn('category', ['movie', 'song', 'painting']);
```

### Restri????es globais
Se voc?? quiser que um par??metro de rota seja sempre limitado por uma determinada express??o regular, voc?? pode usar o patternm??todo.Uma vez definido o padr??o, ele ?? aplicado automaticamente a todas as rotas que usam esse nome de par??metro.

```php

public function boot()
{
    Route::pattern('id', '[0-9]+');}


Route::get('/user/{id}', function ($id) {
    // Only executed if {id} is numeric...} );
```
## Rotas nomeadas
As rotas nomeadas permitem a gera????o conveniente de URLs ou redirecionamentos para rotas espec??ficas. Voc?? pode especificar um nome para uma rota encadeando o namem??todo na defini????o de rota:

```php
Route::get('/user/profile', function () {
    //
})->name('profile');

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');
```
Depois de atribuir um nome a uma determinada rota, voc?? pode usar o nome da rota ao gerar URLs ou redirecionar por meio do Laravel routee redirectfun????es auxiliares: 

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
Os grupos de rotas permitem que voc?? compartilhe atributos de rota, como middleware, em um grande n??mero de rotas sem precisar definir esses atributos em cada rota individual. 
### Middleware
O middleware fornece um mecanismo conveniente para inspecionar e filtrar as solicita????es HTTP que entram em seu aplicativo. Por exemplo, o Laravel inclui um middleware que verifica se o usu??rio do seu aplicativo est?? autenticado. Se o usu??rio n??o estiver autenticado, o middleware redirecionar?? o usu??rio para a tela de login do seu aplicativo. No entanto, se o usu??rio estiver autenticado, o middleware permitir?? que a solicita????o prossiga para o aplicativo. 

Para atribuir middleware a todas as rotas dentro de um grupo, voc?? pode usar o middlewareantes de definir o grupo. Os middlewares s??o executados na ordem em que est??o listados no array: 

```php
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });
??
    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
```
## Prefixos de rota 
o prefixO m??todo pode ser usado para prefixar cada rota no grupo com um determinado URI.Por exemplo, voc?? pode querer prefixar todos os URIs de rota dentro do grupo com admin: 

```php
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
```
o nameO m??todo pode ser usado para prefixar cada nome de rota no grupo com uma determinada string. Por exemplo, voc?? pode querer prefixar todos os nomes de rotas agrupadas com admin

```php
Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // Route assigned name "admin.users"...
    })->name('users');
});
```

## 3 - Prote????o CSRF(Cross-site request forgery)
Imagine que seu aplicativo tenha um /user/emailrota que aceita um POSTsolicita????o para alterar o endere??o de e-mail do usu??rio autenticado. Muito provavelmente, esta rota espera um emailcampo de entrada para conter o endere??o de e-mail que o usu??rio gostaria de come??ar a usar. 
Sem prote????o CSRF, um site mal-intencionado pode criar um formul??rio HTML que aponta para o endere??o do seu aplicativo /user/emailroute e envia o pr??prio endere??o de e-mail do usu??rio mal-intencionado: 
Para evitar essa vulnerabilidade, precisamos inspecionar todas as entradas POST, PUT, PATCH, ou DELETEsolicita????o de um valor de sess??o secreta que o aplicativo mal-intencionado n??o consegue acessar. 



## 3 - Controllers
Os controladores podem agrupar a l??gica de tratamento de solicita????es relacionadas em uma ??nica classe. Por exemplo, um UserControllerA classe pode lidar com todas as solicita????es recebidas relacionadas aos usu??rios, incluindo exibi????o, cria????o, atualiza????o e exclus??o de usu??rios. Por padr??o, os controladores s??o armazenados no app/Http/Controllersdiret??rio.


## 3.0 Layouts com Blade
O layoyt permite que a gente reaproveite o c??digo. Usando o mesmo header e footer em todas as p??ginas sem repetir o c??digo.

**1- Criar arquivo Blade na pasta Layout**
```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- muda o titulo da p??gina dinamicamente --}}
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

Uma vez criado o blade padr??o de template, temos que acrescenta-lo na p??gina que gostaria. POr exemplo, iremos adicionar o rodap?? (footer) e o titulo dinamico na p??gina welcome.

```html
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- muda o titulo da p??gina dinamicamente --}}
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


### Resgatando par??metros de URL
Se temos, por exemplo,uma aba de produtos onde podemos encontrar diversos produtos diferentes.Podemos expandir a p??gina para cada produtor ter seu URL.

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

No geral ?? onde a maior parte da l??gica se localiza.
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
Index ?? uma fun????o que est?? dentro do controller bia.

## 5.0 Banco de Dados

- Configurada pelo arquivo .env.
- Maior seguran??a, j?? que os dados n??o ser??o acessados diretamente.
- Utiliza????o um **ORM** (Object- Relational Mapping) chamado _**Eloquent**_.
- Migration auxilia mexer com o banco.

No meu caso, utilizei o gerenciador de banco de dados Dbeaver.Quando vamos sincronizar o banco com o VSCODE tem que conpiar o arquivo .env para l?? atrav??s do comando:

```linux
cp .env.localhost .env -> copia o banco de dados
php artisan key:generate
```

## Migrations
Funciona como um versionamento de banco, podemos adiconar colunas,remover, verificar status do banco.


-----------------------------------------------------------------------------------------

# API - GER LOGIN

## 1.0 - WEB