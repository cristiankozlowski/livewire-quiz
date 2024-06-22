
# 💥 Quiz

![laravel_version](https://img.shields.io/badge/Laravel-10-blue?style=for-the-badge)
![livewire_version](https://img.shields.io/badge/livewire-3.4-blue?style=for-the-badge)
![php_version](https://img.shields.io/badge/php-8.1-blue?style=for-the-badge)
![vue_router_version](https://img.shields.io/badge/license-MIT-orange?style=for-the-badge)


## 📜 Summary
This is a quiz game where it was used livewire and a little bit of alpine to study about this techs. In this quiz there's time to answer the questions and a ranking to show the positions of competitors where it's necessary to be logged to participate

## 📲 Demo
![quiz](https://github.com/cristiankozlowski/livewire-quiz/assets/26977328/00f85b64-f8e3-43fb-9aec-a4b4ac7616e6)

## ⚙️ Deploy

After you clone the project and access the folder, you need to create the .env file and setup, for example:

![alt text](image.png)

It's also necessary to run these commands:
```bash 
composer install 
php artisan key:generate
php artisan migrate
npm install
```
And to run the project:

```bash 
php artisan serve
npm run dev
```

And that's all folks!

