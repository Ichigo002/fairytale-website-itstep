# fairytale Website Itstep
Webiste made for IT Step company in Sofia, Bulgaria. 16.04.2024


### How to install must-have things?
It is Laravel php app, so you must first install laravel on your machine or server. Everything is described in detail on oficial website: https://laravel.com/docs/5.7/installation

Short description:
1. Install php 8.1 or higher on your server OR if you install locally. You can just install the newest (8.2.12) [xampp](https://www.apachefriends.org/) with built-in php interpreter.
2. Download and install (2.7.2) [composer](https://getcomposer.org/). Make sure during installation you will choose **correct php interpreter**.
3. Installation process of laravel (5.7.2) [docs](https://laravel.com/docs/5.7#installing-laravel). First download laravel using composer: `composer global require laravel/installer`
4. Now you must install breeze kit starter. [Here installation doc](https://laravel.com/docs/11.x/starter-kits#laravel-breeze-installation). Paste in the terminal this command: `composer require laravel/breeze --dev`
5. Now type one by one commands below:
   * `php artisan breeze:install`
   * `php artisan migrate`
   * `npm install` (if you don't have npm then install [node.js](https://nodejs.org/en))

### How to run website?
If you have already installed must-have things then you run this!

You should go to the directory with this project and:
* Run in new terminal `npm run dev`
* Run in next new terminal (still running previous) and type `php artisan serve`

Both things should run at the same time.
After that go on your website or if you work on local machine, go to localhost addrress *127.0.0.1:8000*
