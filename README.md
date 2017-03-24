<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

<p align="center"><a href="https://vuejs.org" target="_blank"><img width="100"src="https://vuejs.org/images/logo.png"></a></p>

<p align="center">
  <a href="https://circleci.com/gh/vuejs/vue/tree/dev"><img src="https://img.shields.io/circleci/project/vuejs/vue/dev.svg" alt="Build Status"></a>
  <a href="https://codecov.io/github/vuejs/vue?branch=dev"><img src="https://img.shields.io/codecov/c/github/vuejs/vue/dev.svg" alt="Coverage Status"></a>
  <a href="https://www.npmjs.com/package/vue"><img src="https://img.shields.io/npm/dt/vue.svg" alt="Downloads"></a>
  <a href="https://www.npmjs.com/package/vue"><img src="https://img.shields.io/npm/v/vue.svg" alt="Version"></a>
  <a href="https://www.npmjs.com/package/vue"><img src="https://img.shields.io/npm/l/vue.svg" alt="License"></a>
  <br>
  <a href="https://saucelabs.com/u/vuejs"><img src="https://saucelabs.com/browser-matrix/vuejs.svg" alt="Sauce Test Status"></a>
</p>

## About Vue.js

Vue.js is a library for building interactive web interfaces. It provides data-reactive components with a simple and flexible API. Core features include:

- [Declarative rendering with a plain JavaScript object based reactivity system.](https://vuejs.org/guide/index.html#Declarative-Rendering)
- [Component-oriented development style with tooling support](https://vuejs.org/guide/index.html#Composing-with-Components)
- Lean and extensible core
- [Flexible transition effect system](https://vuejs.org/guide/transitions.html)
- Fast without the need for complex optimization

Note that Vue.js only supports [ES5-compliant browsers](http://kangax.github.io/compat-table/es5/) (IE8 and below are not supported). To check out live examples and docs, visit [vuejs.org](https://vuejs.org).

## About this web application
A system which allows users to manage a pond of frogs.

Here are some feature and ideas have been implemented:

- Killing
- Creating
- Mating (available on create)
- Genders
- Names
- Birth / death
- Dad / Mom
- Feeding (not available yet)


Instructions:

- Set .env file to access MySql
- Run "composer dumpautoload"
- Run "composer install"
- Run "php artisan key:generate"
- Run "php artisan migrate --seed"
- Use webpack if you wish to make changes on front-end
- Enjoy