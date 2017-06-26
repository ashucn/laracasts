https://laracasts.com/series/laravel-from-scratch-2017
----  

### Laravel Installation and Composer
Before we can review how incredible and flexible Laravel is, we, of course, must first learn how to install it. In this episode, we'll review all necessary prerequisites, and then setup Composer on our machine.

## EPISODE 2 ● RUN TIME 4:58
### Basic Routing and Views
Your first step, when learning Laravel, should be to visit your main routes/routes.php file. Here, we may define any number of routes for our application. Or, in other words, when the user visits a particular URL, what logic should we trigger?

## EPISODE 3 ● RUN TIME 4:22
### Laravel Valet is Your Best Friend
We'll get back to the PHP in just a few minutes, but let's t

Sorry Windows folks, this one is exclusively for Mac users. Don't worry: only this ## episode is Mac-specific### .
## EPISODE 4 ● RUN TIME 2:36
### Database Setup and Sequel Pro
In this episode, we'll review the process of creating a new database in MySQL, connecting to it (via our .env config), and then setting up any database GUI, such as Sequel Pro.

## EPISODE 5 ● RUN TIME 5:11
### Pass Data to Your Views
Admittedly, so far, we've needed to do a bit of boring infrastructure work. But the silver lining is that you now have everything you need to work in a professional environment. You should have PHP 7.1, MySQL, Brew, Composer, and Valet or Homestead installed. Now, we can get back to our Laravel application, and learn about passing data to any view.

## EPISODE 6 ● RUN TIME 9:52
### Working With the Query Builder
We can use Laravel's query builder to construct fluent database queries with PHP. No longer are you forced to write fragile and difficult-to-read SQL queries as strings. Let me show you how it works!

## EPISODE 7 ● RUN TIME 12:48
### Eloquent 101
Now that you're familiar with the query builder, we can switch over to Eloquent: one of the core pillars of the framework. Eloquent is Laravel's Active Record implementation, which allows each of your models to be associated with a companion database table.

## EPISODE 8 ● RUN TIME 4:31
### Controllers
So far, we've exclusively been using route closures to handle the logic associated with each URI endpoint. But I think you'll find that, for most projects, you'll instead opt for dedicated controllers. Let's review what they are, and how to migrate over.

## EPISODE 9 ● RUN TIME 2:43
### Route Model Binding
Route model binding provides a useful way to automatically method-inject a model's instance into your route closures, or controller actions. For example, if a user visits /tasks/1, thanks to route model binding, we can make Laravel automatically fetch the Task with an id of 1, and then inject that instance into your controller action.

## EPISODE 10 ● RUN TIME 11:48
### Layouts and Structure
In this lesson, I'll teach you about how you'll go about organizing layout files, using Blade. You'll find that we can easily allow for dedicated layout/master pages. This way, each of our views only needs to reference the layout it extends, and then build upon it.

## EPISODE 11 ● RUN TIME 20:47
### Form Request Data and CSRF
Let's begin reviewing how you'll go about submitting forms, while also touching upon some of the security concerns that go alongside it.

## EPISODE 12 ● RUN TIME 6:05
### Form Validation 101
It's true that we can now successfully submit and process forms; however, we haven't yet implemented any form of validation. This means that a user can (and will) type anything at all. We can't allow that.

## EPISODE 13 ● RUN TIME 7:23
### Rendering Posts
Now that we've added the necessary functionality to publish new posts to the database, we can now filter through and render them on the page, using Blade.

## EPISODE 14 ● RUN TIME 6:25
### Laravel Mix and the Front-end
Of course, you won't spend all of your time working with PHP. At some point, you'll need to write some CSS, perhaps some JavaScript, and, naturally, you'll need some way to optimize that workflow. Let me show you how Laravel Mix works.

## EPISODE 15 ● RUN TIME 5:58
### Eloquent Relationships and Comments
If a post can have many comments, and, consequently, a comment belongs to a specific post... well how might we represent this within our code? Let's tackle that very thing in this episode.

## EPISODE 16 ● RUN TIME 8:37
### Add Comments
Imagine that you're building this little blog for a client. While speaking with them, they naturally bring up the fact that they'd like to have the ability to add comments to any post. Let's see if we can use that exact terminology in our code to provide a solution for them.

## EPISODE 17 ● RUN TIME 9:13
### Rapid Authentication and Configuration
Laravel provides a useful make:auth Artisan command that will rapidly scaffold the necessary views and logic for registration, authentication, and password resets. Imagine if you could take this incredibly tedious work, and have it done for you automatically in seconds? How cool would that be!?

## EPISODE 18 ● RUN TIME 5:10
### Associating With Users
You won't always have the luxury of scaffolding your authentication layer from scratch. And, further, it's of course educational to learn how to perform these steps manually on your own. Let's review the full process from scratch, without deferring to make:auth.

## EPISODE 19 ● RUN TIME 22:54
### Associating With Users: Part 2
Now that we have our database relationships all set to go, we can begin scaffolding out the necessary registration and login forms.

## EPISODE 20 ● RUN TIME 11:23
### Archives
It would be nice to have a section in the sidebar that displays all months that have associated posts. To allow for this, we'll need to construct a special SQL query that collects and joins the necessary columns. In this lesson, you'll learn how to write this query, and then translate it to Eloquent.

## EPISODE 21 ● RUN TIME 5:05
### View Composers
Very quickly, you'll encounter the situation when multiple views require the same piece of data. For example, if a sidebar widget requires a particular variable for every single page, well we can't be expected to pass that data from every single controller. No, instead, we can leverage view composers.

## EPISODE 22 ● RUN TIME 11:26
### Testing 101
While testing is a bit beyond the scope of this series (see the rest of Laracasts for over a hundred testing-specific lessons), it's important that we, at the very least, review the general layout and workflow for testing a Laravel application.

## EPISODE 23 ● RUN TIME 7:41
### DI, Auto-Resolution, and Repositories
In this episode, we'll review a few scary terms. But, like with most terminology, the underlying concepts are quite simple. Please note that a solid understanding of dependency injection and Laravel's automatic resolution will be key to your future, as a developer.

## EPISODE 24 ● RUN TIME 5:40
### The Service Container
In many ways, the service container is the heart of Laravel. Any and all registered dependencies will be resolved out of it. This includes Laravel's various components, as well as your own.

## EPISODE 25 ● RUN TIME 7:32
### Service Providers Explained
Service providers represent the building blocks of Laravel. In fact, Laravel, itself, is composed of countless providers that bootstrap themselves into the framework. The same will be true for any package you install, that includes Laravel-specific support. And, naturally, you can (and will) create your own providers.

## EPISODE 26 ● RUN TIME 5:41
### Sending Email
You'll very likely need to send email, as part of your application. Perhaps when a new blog post is published, you want to notify your various subscribers. Or, possibly, when a user cancels their account, you'll want to send them a goodbye email. How exactly might we accomplish that?

## EPISODE 27 ● RUN TIME 5:12
### Markdown Mail
So we can now send email, as needed. Excellent! But we're still left in the position of needing to build a nice looking email template. If you've ever had the displeasure of doing this before, you'll know that it's a fairly painful process, due to the various inconsistencies between mail clients. One option, however, is to leverage Laravel's Markdown mailable support.

## EPISODE 28 ● RUN TIME 5:36
### Form Requests and Form Objects
In most cases, performing your form validation directly in your controller will work beautifully. However, particularly for larger forms with unique validation requirements, you'll likely want to extract this code to a dedicated class. In this episode, we'll review form request classes.

## EPISODE 29 ● RUN TIME 5:44
### Session Handling and Flash Messaging
The web is stateless. This means that any set of data won't persist from page to page. It simply disappears. Sessions provide a solution for this fact, by offering a mechanism to maintain state for a particular user across any number of requests.

## EPISODE 30 ● RUN TIME 6:58
### Tags and Pivot Tables
It would be nice if we could associate any number of tags with a given post. This is fairly standard for any blogging application. The only problem is that the traditional belongsTo or hasMany relationships that we've learned so far don't quite fit the bill. In this episode, we'll review many-to-many relationships.

## EPISODE 31 ● RUN TIME 6:41
### Sorting Posts By Tags
It's great that we can now associate any post with any tag (via the belongsToMany relationship), but how might we go about allowing the user to filter all posts according to their requested tag name?

## EPISODE 32 ● RUN TIME 9:09
### Eventing
If you find that particular classes in your code base have become incredibly complicated, it might be worth considering a general observer model. That way, when a notable event takes place in your system (OrderRefunded, ThreadPublished, etc.), you only need to make an announcement to the rest of your application. Then, you may loosely register any number of handlers that will hook into this event, and respond as needed.