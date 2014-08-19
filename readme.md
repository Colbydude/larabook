Larabook
========

A work-along repository to go with Laracasts' "[Let's Build Larabook From Scratch](https://laracasts.com/series/build-a-laravel-app-from-scratch)" series.

Live demo available at http://larabook.voidteamdev.net

**Lesson 1:** Basically covered just setting up homestead, although not quite relevant to this repo.

**Lesson 2:** Added some dependencies including generators, codeception, and a couple laracasts-specific packages.

**Lesson 3:** This just showcases how to use environment variables to protect sensitive database information and hook up to Sequel Pro, which I have done before the lessons even started.

**Lesson 4:** Added our "Master Page" and pulled in Bootstrap for design. Also created a simple PagesController for our simple static pages.

**Lesson 5:** Basic Homepage design with Bootstrap boilerplate code, prepared for SASS install.

**Lesson 6:** Install Gulp and set up some basic tasks for automatically watching and compiling scss files.

**Lesson 7:** We setup some unit tests with Codeception and fake registration functionality.

**Lesson 8:** Extremely basic user registration and authentication.

**Lesson 9:** Registration Validation and some nicer styling.

**Lesson 10:** For larger applications that need to be maintained for years, it makes sense to take a step back, and think about architecture. Let's use commands to describe the various instructions that our app offers, as well as a command bus to manage the act of translating these commands into handler classes.

**Lesson 11:** Add a simple domain event for user registration.

**Lesson 12:** Add simple Flash Messaging to use between views.

**Lesson 13:** Setup basic user feedback if we're logged in or not.

**Lesson 14:** We set up signing into Larabook and create a simple test to prove that this works.

**Lesson 15:** Fix up Codecept and make our tests return to green. We also move fixtures.yml from app/tests to test/.

**Lesson 16:** Boy this was a long one! In this lesson we add in extremely basic functionality to publish and view statuses.

**Lesson 17:** We add some integration tests to make sure repositories work well.

**Lesson 18:** We add simple Gravatar support by using a User Presenter.

**Lesson 19:** Style out the statuses and make things much prettier and easier to comprehend. We update our tests as well.

**Lesson 20:** Import Faker to be easily able to generate dummy data. Also handled trying to log in to an account that doesn't exist (did I miss this earlier?).

**Lesson 21:** We add a simple user index to browse through all the registered users.

**Lesson 22:** Add User Profiles as well as according tests and the ability to post statuses from your own profile.

**Lesson 23:** Quick refactoring session. Fixed my user table migration to include `remember_token` as well.

**Lesson 24:** A lot here! We add the ability to follow users as well as clean up our statuses page to display the statuses of who you're following, as well as yourself.

**Lesson 25:** This time we make it so the user is able to unfollow users they are following, and tidy up the user profile a bit. As well as add appropriate tests.

**Lesson 26:** Some slight refactoring. Allows us to now view the "Browse Users" page and profiles without being logged in.

**Lesson 27:** Threw in a simple mailer to handle welcome emails on registration. However, this won't fire in production at the moment.

**Lesson 28:** Setup some SASS partials. The lesson also uses a theme made by Laracasts User Amit Erandole, however I've already implemented some styling of my own. So we'll continue with that.

**Lesson 29:** We add the ability to reset a user's password, however we're only logging at this point. No emails are actually sent.

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
