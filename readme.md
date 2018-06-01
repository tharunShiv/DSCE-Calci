## About this project
  It is built initially for the CSE Department of DSCE, to enter and store the Course Outcomes and Program Specific Outcomes od their individual courses and perform the required calculations. It also holds the student database and insights about the department for the purpose of the department.
  ### Features :
  1. Add CO - Edit CO - View CO
  2. Add PSO - Edit PSO - View PSO
  3. Add Student information 
  All of these available subject vice.

## How to Install this project?
Its a Laravel Project.

1. Download/Clone this repository
2. Download the XAMPP
3. Go to xampp folder, `xampp/apache/conf/extra/httpd-vhosts.conf`
4. Open it as Administrator
5. Add this <br/>
   '`<VirtualHost *:80> `<br/>`
    DocumentRoot "C:/xampp/htdocs/DSCE-Calci/public" `<br>`
    ServerName dsceapp.dev `<br>`
   </VirtualHost>`'<br>
6. Save and Close
7. Open Notepad as <b>admin</b>
   Now from Notepad, hit on `Open` and navigate to `C:\Windows\System32\drivers\etc\hosts`
8. paste this in the last
   `
   127.0.0.1 dsceapp.dev
   `
9. Now paste the dowloaded and extracted dsceFM folder into htdocs folder of the xampp folder.

### We're almost done
1. Now open the project-folder with Visual Studio Code (or any of your favourite text editor)
2. Open the terminal in that folder also
3. Run these commands one by one
`
composer install
`<br>
`
php artisan storage:link
`<br>
`
php artisan key generate
`
4. Now create a .env file and copy paste the model .env file into the new one.
(Now you would know the variables that should be updated, also update the database name)
5. Open phpmyadmin and create the database.
6. At the terminal
`
php artisan migrate
`
7. Open Your Browser - Mostly Internet Explorer (because of the https issue) - Goto dsceapp.dev

## You're done

## Remember to Pull Requests, report issues, contact me for further clarifications.
### Programming is the solution

## The technology used:
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
