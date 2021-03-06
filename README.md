# Lumen API Studies

My first Lumen project, where I learn how to develop application using Lumen.
For starters, Lumen is a micro framework based on Laravel so, meanwhile Laravel is a full stack framework where you can build an entire application, with client and server side together, Lumen is reduced version where it permits you to build server side applications, highly recommended for API development.

## My goal

I just want to learn how to do my things using Lumen, so I'll make a simple project for that. The project will be an API which provides a service like My Anime List (or MAL for the ones who knows and use the platform). I want to make a service where you can build a list of watched anime, rate them, post comments about them, etc.

## Changelog

 - 2022/XX/XX XX:XX - More routes (in progress)
    - I did nothing impressive from this point, just created more endpoints to make my CRUD
    - But there are some relevant points, like: ```$result = DB::select(<statement>, <params_list>)``` is able to call stored procedures and return an array containing objects of ```stdClass``` class, that you can easily turn into associative arrays making a casting, so something like ```$response = (array) $result[0]``` will return you an array with the results, which can be useful to add the HTTP status code on response and to call ```response(<content>,<status_code>)``` on the controller
    - Consulted material:
        - [HTTP Routing - Lumen - PHP Micro-Framework By Laravel](https://lumen.laravel.com/docs/9.x/routing)
        - [Chamar stored procedure usando Eloquent? | Lumen: API Rest com o Micro-framework do Laravel | Solucionado](https://cursos.alura.com.br/forum/topico-chamar-stored-procedure-usando-eloquent-105598)
        - [Migration for stored procedure](https://laracasts.com/discuss/channels/laravel/migration-for-stored-procedure)
 - 2022/02/20 23:33 - First endpoint
    - I learned how to create a model (of MVC archtecture) and to make transactions with the DB, using Facade.
    - Also learned how to return the JSON response using ```response(<content>,<status_code>)``` function.
    - As I'm used to the MVC, communicate the model with controller was easy.
    - Consulted material:
       
        - [Database - Lumen - PHP Micro-Framework By Laravel](https://lumen.laravel.com/docs/9.x/database)
        - [Database - Lumen - PHP Micro-Framework By Laravel (INSERT query section)](https://laravel.com/docs/9.x/database#running-an-insert-statement)
        - [php - Simple POST using Lumen - Stack Overflow](https://stackoverflow.com/questions/38410357/simple-post-using-lumen)
        - [HTTP Responses - Lumen - PHP Micro-Framework by Laravel](https://lumen.laravel.com/docs/9.x/responses)
        - [sql - How do I catch a query exception in laravel to see if it fails? - Stack Overflow](https://stackoverflow.com/questions/33679996/how-do-i-catch-a-query-exception-in-laravel-to-see-if-it-fails)
        - [Facade root not found ?? Issue #86 ?? nicolaslopezj/searchable](https://github.com/nicolaslopezj/searchable/issues/86)
 - 2022/02/20 18:02 - Create tables migrations
    - I learned what is a migration in Laravel/Lumen and how to create them.
    - Also learned how to use the methods to configure my table fields, like 
        ```php
            $table->foreign('field')->references('other_table_field')->on('other_table_name')
        ```
    - I had some issues with composite primary key, because if you set a field as auto-increment and later try to set the composite n-tuple of primary keys you will get a error from MySQL because there is already a primary setted, so you need to first declare your fields types, to later set your n-tuple of primary key, to finally set your desired field as auto-increment.
    - Also differences on types like integer and biginteger will throw an error on foreign key definition.
    - On the table 'Shows' the auto-increment is set to start on 100000 beacuse I want the codes of the animes to have the same length.
    - For starters, my database has only three simple tables, just to start working on, the plans are for this database to grow more.
    - Consulted material:
        - [Database: Migrations - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/9.x/migrations)
        - [Two primary keys](https://laracasts.com/discuss/channels/eloquent/two-primary-keys)
        - [How to properly  create composite primary keys - MYSQL - Stack Overflow](https://stackoverflow.com/questions/5835978/how-to-properly-create-composite-primary-keys-mysql)
        - [php - Set Auto Increment field start from 1000 in migration laravel 5.1 - Stack Overflow](https://stackoverflow.com/questions/34196045/set-auto-increment-field-start-from-1000-in-migration-laravel-5-1)
 - 2022/02/18 15:05 - Documentation screen
    - I learned how to make redirections and how to serve HTML+CSS.
    - On /routes/web.php you can create new routes, specifying what action to take based on the HTTP verb requested.
    - I wanted to make a documentation screen, which will be useful in the future, and I don't really need a index page, since this project is of an API, so I made the index endpoint redirect to the /docs endpoint.
    - Also I learned how to serve HTML file, using the ```view(<page>,<params>)``` function. This function search for ```<page>``` on /resources/view for a file that the name matches with the string received. Since this file can be a simple static HTML or a PHP file that serve a HTML body with dynamic contents, the second paramenter of ```view()``` refers to the variables that are shown in these PHP files.
        ```php
            $router->get('/', function () use ($router) {
                return redirect('/docs');
            });
            $router->get('/docs', function () use ($router) {
                return view('docs', []);
            });
        ```
    - Since my documentation screen doesn't have any dynamic content, for now, the array passed as second parameter is empty.
    - Consulted material:
       - [HTTP Routing - Lumen Docs](https://lumen.laravel.com/docs/9.x/routing)
       - [Views - Lumen Docs](https://lumen.laravel.com/docs/9.x/views)
       - [PHP anonymous functions](https://www.php.net/manual/pt_BR/functions.anonymous.php)
       - [Redirect to external URL with Lumen](https://stackoverflow.com/questions/39869960/redirect-to-external-url-with-lumen)
       - [Popper way to serve .html files on Lumen](https://laracasts.com/discuss/channels/lumen/popper-way-to-serve-html-files-on-lumen)
 - 2022/02/18 14:05 - Project setup
    - Just installed the framework and changed the database credentials for JawsDB (on Heroku) credentials
   