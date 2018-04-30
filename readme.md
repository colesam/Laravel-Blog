# Laravel-Blog
A blog content management system built using PHP and Laravel.

For more information about the project and how I solved problems that came up, please visit the dedicated <a href="https://portfolio-colesam.c9users.io/portfolio/laravel-blog.html" target="_blank">project page</a> on my portfolio website.

<h2>Description</h2>

This project is a content management system for managing a blogging website. The project leverages Laravel's MVC structure to keep code organized into models, views, and controllers. 

This project was built with the help of JA Curtis' <a href="https://www.youtube.com/watch?v=R8B4og-BeCk&list=PLwAKR305CRO-Q90J---jXVzbOd4CDRbVx" target="_blank">Laravel Tutorial</a>, although my project varies greatly from the project he builds in that series.

<h2>Features</h2>
<ul>
  <li>Guests may view the public sections of the site</li>
  <li>Authenticated users may create, edit, and delete blog posts</li>
  <li>Authenticated users may assign a category to a blog post</li>
  <li>Authenticated users may manage the site-wide categories, including creating, editing, or deleting categories</li>
  <li>Assign zero to many tags to a blog post, create and delete tags</li>
  <li>Guests may sign up for an account (all accounts are administrative at the moment)</li>
  <li>Registered users may log in, or request an email be sent to reset password</li>
</ul>

<h2>Get Started</h2>

The <a href="https://portfolio-colesam.c9users.io/portfolio/laravel-blog.html" target="_blank">dedicated page</a> for this project includes a video explaining how to get this project up and running. It also demonstrates the key features of the project.

If you would like to get the project up and running, simply clone the files into a directory on a machine with <a href="https://getcomposer.org/" target="_blank">Composer</a> installed, set up your .env file to connect to a MySQL database, and run the following commands in the terminal:

```
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

These commands will set up the database and run the server on `localhost:8000`.
