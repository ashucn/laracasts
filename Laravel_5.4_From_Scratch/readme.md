https://laracasts.com/series/laravel-from-scratch-2017
----  
  
### Laravel Installation and Composer  
Before we can review how incredible and flexible Laravel is, we, of course, must first learn how to install it. In this episode, we'll review all necessary prerequisites, and then setup Composer on our machine.
  
````  
laravel new blog --dev // 创建新项目  
laravel -V //查看laravel版本  
````  
  
## EPISODE 2   
### Basic Routing and Views  
Your first step, when learning Laravel, should be to visit your main routes/routes.php file. Here, we may define any number of routes for our application. Or, in other words, when the user visits a particular URL, what logic should we trigger?

````  
php artisan serve --port=8090 // 启动php内置web服务器
````  

## EPISODE 3   
### Laravel Valet is Your Best Friend  
We'll get back to the PHP in just a few minutes, but let's take a brief pause to learn about Laravel Valet and how incredibly useful it is. What if you could create a new project with laravel new project, and then immediately view it in the browser by visiting "project.dev"? How cool would that be?

Sorry Windows folks, this one is exclusively for Mac users. Don't worry: only this episode is Mac-specific.

## EPISODE 4   
### Database Setup and Sequel Pro  
In this episode, we'll review the process of creating a new database in MySQL, connecting to it (via our .env config), and then setting up any database GUI, such as Sequel Pro.

## EPISODE 5   
### Pass Data to Your Views  
Admittedly, so far, we've needed to do a bit of boring infrastructure work. But the silver lining is that you now have everything you need to work in a professional environment. You should have PHP 7.1, MySQL, Brew, Composer, and Valet or Homestead installed. Now, we can get back to our Laravel application, and learn about passing data to any view.

````  
composer require phpspec/phpspec
````  

## EPISODE 6   
### Working With the Query Builder  
We can use Laravel's query builder to construct fluent database queries with PHP. No longer are you forced to write fragile and difficult-to-read SQL queries as strings. Let me show you how it works!

## EPISODE 7   
### Eloquent 101  
Now that you're familiar with the query builder, we can switch over to Eloquent: one of the core pillars of the framework. Eloquent is Laravel's Active Record implementation, which allows each of your models to be associated with a companion database table.

## EPISODE 8   
### Controllers  
So far, we've exclusively been using route closures to handle the logic associated with each URI endpoint. But I think you'll find that, for most projects, you'll instead opt for dedicated controllers. Let's review what they are, and how to migrate over.

## EPISODE 9   
### Route Model Binding  
Route model binding provides a useful way to automatically method-inject a model's instance into your route closures, or controller actions. For example, if a user visits /tasks/1, thanks to route model binding, we can make Laravel automatically fetch the Task with an id of 1, and then inject that instance into your controller action.

## EPISODE 10   
### Layouts and Structure  
In this lesson, I'll teach you about how you'll go about organizing layout files, using Blade. You'll find that we can easily allow for dedicated layout/master pages. This way, each of our views only needs to reference the layout it extends, and then build upon it.

## EPISODE 11   
### Form Request Data and CSRF  
Let's begin reviewing how you'll go about submitting forms, while also touching upon some of the security concerns that go alongside it.

## EPISODE 12   
### Form Validation 101  
It's true that we can now successfully submit and process forms; however, we haven't yet implemented any form of validation. This means that a user can (and will) type anything at all. We can't allow that.

## EPISODE 13   
### Rendering Posts  
Now that we've added the necessary functionality to publish new posts to the database, we can now filter through and render them on the page, using Blade.

## EPISODE 14   
### Laravel Mix and the Front-end  
Of course, you won't spend all of your time working with PHP. At some point, you'll need to write some CSS, perhaps some JavaScript, and, naturally, you'll need some way to optimize that workflow. Let me show you how Laravel Mix works.

## EPISODE 15   
### Eloquent Relationships and Comments  
If a post can have many comments, and, consequently, a comment belongs to a specific post... well how might we represent this within our code? Let's tackle that very thing in this episode.

## EPISODE 16   
### Add Comments  
Imagine that you're building this little blog for a client. While speaking with them, they naturally bring up the fact that they'd like to have the ability to add comments to any post. Let's see if we can use that exact terminology in our code to provide a solution for them.

## EPISODE 17   
### Rapid Authentication and Configuration  
Laravel provides a useful make:auth Artisan command that will rapidly scaffold the necessary views and logic for registration, authentication, and password resets. Imagine if you could take this incredibly tedious work, and have it done for you automatically in seconds? How cool would that be!?

## EPISODE 18   
### Associating With Users  
You won't always have the luxury of scaffolding your authentication layer from scratch. And, further, it's of course educational to learn how to perform these steps manually on your own. Let's review the full process from scratch, without deferring to make:auth.

## EPISODE 19   
### Associating With Users: Part 2  
Now that we have our database relationships all set to go, we can begin scaffolding out the necessary registration and login forms.

## EPISODE 20   
### Archives  
It would be nice to have a section in the sidebar that displays all months that have associated posts. To allow for this, we'll need to construct a special SQL query that collects and joins the necessary columns. In this lesson, you'll learn how to write this query, and then translate it to Eloquent.
  
````   
$posts = Post::last()->get();
$archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
	->groupBy('year', 'month')
	->orderByRaw('min(created_at) desc')
	->get()
	->toArray();
return view('posts.index', compact('posts', 'archives'));
----------
优化代码
----------
$posts = Post::last()
	->filter(request(['month', 'year']))
	->get()

Post.php: 
public function scopeFilter($query, $filters)
{
	if($month = $filters['month']){
		$query->whereMonth('created_at', Carbon::parse($month)->month);
	}

	if($year = $filters['year']){
		$query->whereYear('created_at', Carbon::parse($year)->year);
	}
}

````   
  
## * EPISODE 21   
### View Composers  
Very quickly, you'll encounter the situation when multiple views require the same piece of data. For example, if a sidebar widget requires a particular variable for every single page, well we can't be expected to pass that data from every single controller. No, instead, we can leverage view composers.
  
````    
给每一个含有sidebar的view带上archives的数据：  
------
Model file: app\Post.php
------
public static funtion archives()
{
	static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
		->groupBy('year', 'month')
		->orderByRaw('min(created_at) desc')
		->get()
		->toArray();
}

------
app\Providers\AppServiceProvider.php:
------
public function boot(
{
	view()->composer('layouts.sidebar', function($view) {
		$view->with('archives', \App\Post::archives());
	});
} 
````    
  
## * EPISODE 22   
### Testing 101  
While testing is a bit beyond the scope of this series (see the rest of Laracasts for over a hundred testing-specific lessons), it's important that we, at the very least, review the general layout and workflow for testing a Laravel application.    

需要看文档和范例： https://laravel.com/docs/5.4/testing     
产生测试数据范例： factory('App\User', 100)->make();    
------
定义新的factory: databases\factories\ModelFactory.php
------


````  
$factory->define(App\Post::class, function(Faker\Generator $faker) {
	return [
		'user_id' => function () {
			return factory(App\User::class)->create()->id;
		},
		'title' => $faker->sentence,
		'body' => $faker->paragraph
	];
});

````   

生成自定义模型的测试数据：   
````  
factory(App\Post::class)->make();

````  
  
------
可以在\phpunit.xml中定义测试的db(新添加一条记录)
   
````  
<env name="DB_DATABASE" value="blog_testing" />

````  

在test文件中使用"databaseTransaction"这个trait，每次执行完测试后，会自动清空回转数据库    
````  
class ExampleTest extends TestCase
{
    use DatabaseTransactions;  
    ...  

````  

## EPISODE 23   
### *** DI, Auto-Resolution, and Repositories  
In this episode, we'll review a few scary terms. But, like with most terminology, the underlying concepts are quite simple. Please note that a solid understanding of dependency injection and Laravel's automatic resolution will be key to your future, as a developer.

app\Repositories\PostsRepositories.php

````  
class PostsRepositories
{
	protected $redis;

	public function __construct(Redis $redis)
	{
		$this->redis = $redis;
	}

	public function all()
	{
		return Post::all();
	}
}
````  

## EPISODE 24   
### The Service Container  
In many ways, the service container is the heart of Laravel. Any and all registered dependencies will be resolved out of it. This includes Laravel's various components, as well as your own.  

````  
------
app\Stripe.php
------
class Stripe
{
	protected $key;
	public function __construct($key)
	{
		$this->key = $key;
	}
}

------
Service Container: 
------  

App::bind('App\Billing\Stripe', function () {
	return new \App\Billing\Stripe(config('services.stripe.secret'));
});
$scripe = App::make('\App\Billing\Stripe');
dd($scripe);

或者 ( 需要放在 app\Providers\AppServiceProvier.php  -> register() )
App::singleton('App\Billing\Stripe', function () {
	return new \App\Billing\Stripe(config('services.stripe.secret'));
}); // each new class, will get the same instance

App::instance('App\Billing\Stripe', $stripe);


````  
  
## EPISODE 25   
### Service Providers Explained  
Service providers represent the building blocks of Laravel. In fact, Laravel, itself, is composed of countless providers that bootstrap themselves into the framework. The same will be true for any package you install, tha  t includes Laravel-specific support. And, naturally, you can (and will) create your own providers.  


#### https://laravel.com/docs/5.4/providers#deferred-providers   

app\Providers\AppServiceProvier.php    
````    
pupblic function register()
{
	$this->app()->singleton('App\Billing\Stripe', function () {
		return new \App\Billing\Stripe(config('services.stripe.secret'));
	}); // each new class, will get the same instance
}
````  
  
## EPISODE 26   
### Sending Email  
You'll very likely need to send email, as part of your application. Perhaps when a new blog post is published, you want to notify your various subscribers. Or, possibly, when a user cancels their account, you'll want to send them a goodbye email. How exactly might we accomplish that?  

````  
https://laravel.com/docs/5.4/mail  
php artisan make:mail Welcome -> app\Mail\Welcome.php
````  
   
  
## EPISODE 27   
### Markdown Mail  
So we can now send email, as needed. Excellent! But we're still left in the position of needing to build a nice looking email template. If you've ever had the displeasure of doing this before, you'll know that it's a fairly painful process, due to the various inconsistencies between mail clients. One option, however, is to leverage Laravel's Markdown mailable support.

````  
php artisan make:mail WelcomeAgain --markdown="emails.welcome-again" -> app\Mail\WelcomeAgain.php   
php artisan vendor:publish --tag=laravel-mail    
测试：
Mail::to($user = App\User::first())->send(new App\Mail\WelcomeAgain($user));
````  
  
## EPISODE 28   
### Form Requests and Form Objects  
In most cases, performing your form validation directly in your controller will work beautifully. However, particularly for larger forms with unique validation requirements, you'll likely want to extract this code to a dedicated class. In this episode, we'll review form request classes.

````  
php artisan make:request RegistrationRequest  
````  


## EPISODE 29   
### Session Handling and Flash Messaging  
The web is stateless. This means that any set of data won't persist from page to page. It simply disappears. Sessions provide a solution for this fact, by offering a mechanism to maintain state for a particular user across any number of requests.     
````  
controller: 
session()->flash('message' 'success');

view:
@if($flash = session('message'))
	$flash
@endif 
````   

## EPISODE 30   
### Tags and Pivot Tables  
It would be nice if we could associate any number of tags with a given post. This is fairly standard for any blogging application. The only problem is that the traditional belongsTo or hasMany relationships that we've learned so far don't quite fit the bill. In this episode, we'll review many-to-many relationships.  

app\Providers\AppServiceProvider.php:    
````    
public function boot(
{
	view()->composer('layouts.sidebar', function($view) {
		$view->with('archives', \App\Post::archives()); // 在每个view中包含归档文章链接
		$view->with('tags', App\Tag::pluck('name')); // 在每个view中包含tag名称的 list
	});
} 
````    
  

## EPISODE 31   
### Sorting Posts By Tags  
It's great that we can now associate any post with any tag (via the belongsToMany relationship), but how might we go about allowing the user to filter all posts according to their requested tag name?
````  
$tags = \App\Tag::has('posts')->pluck('name'); // 只显示有post的标签
````  
  
## EPISODE 32   
### Eventing  
If you find that particular classes in your code base have become incredibly complicated, it might be worth considering a general observer model. That way, when a notable event takes place in your system (OrderRefunded, ThreadPublished, etc.), you only need to make an announcement to the rest of your application. Then, you may loosely register any number of handlers that will hook into this event, and respond as needed.