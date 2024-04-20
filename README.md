# Fairytale App - IT Step
Webiste made for IT Step company in Sofia, Bulgaria. 
Started: 16.04.2024

In below description are given minimal version of programs and frameworks. On this versions was originally made the website. Sign '^' means that to proper work is required equal or higher version. for example: [^2.1.0]

### How to develop this site on Windows platform?
1. Download and install [xampp](https://www.apachefriends.org/) [^8.2.12]
2. Download and install [composer](https://getcomposer.org/download/) [^2.7.2] (remeber during installation process to choose php version from xampp directory)
3. Download and install [Node.js](https://nodejs.org/en/download) [^20.12.2 LTS]
4. Install using composer laravel: In terminal type `composer global require laravel/installer` and that's all. [Full docs here](https://laravel.com/docs/11.x#creating-a-laravel-project) [^11.0]

Now only you just need go to *ft-app* where is main project and type in terminal: `php artisan serve`

### How to upload the website on the server?

You need optimize this and copy whole project on server. And change in *ft-app/.env* file, the data to connect with your database MySql on server. Upload also database file .sql from this folder.

## Email Verification

Current email used to verify: wiktorbojanowski2006@gmail.com
If you need change email used to send verifications, you need go to *ft-app/.env* and change all variables starting on MAIL_ word.