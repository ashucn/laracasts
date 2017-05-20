https://laracasts.com/series/phpunit-testing-in-laravel

### EPISODE 1 - 8:29
#### Intro to Application Testing
So you have an existing application, and you'd love to begin writing tests for it. Great! But, then, you review unit testing tutorials around the web, and you realize that none of it is applicable to what you actually want to test. How do you use PHPUnit to actually hit a web page, and assert that certain text exists on the page?

````  
composer create-project laravel/laravel app dev-develop
````  

### EPISODE 2 - 13:09
#### Beginning Unit Testing
In the opening lesson of this series, we've reviewed a form of zoomed-out testing, where we trigger a route, hit the controller, and make assertions against the view. Now, let's zoom in and focus on basic unit testing workflow.

### EPISODE 3 - 10:25
#### More Unit Testing Review
What about when you need to test related classes. For example, an Order that consists of Products. Well, the process is very much the same. Don't overcomplicate it.

### EPISODE 4 - 13:25
#### Testing Eloquent
If you're hoping to write tests for your Laravel projects, then one of the first things you'll want to test is Eloquent. But, should you mock out the database, and write isolated unit tests here? Well...no. Let me show you a better workflow.

### EPISODE 5 - 3:23
#### A Testing Database Connection
So far, we've used our main local database for testing. But that's not ideal. Let's instead create a new database specifically for PHPUnit. In the process, we'll also need to create a new connection type so that we can trigger our migrations, as needed.

### EPISODE 6 - 18:14
#### Testing Collaborators
If we have two Eloquent models... and we need them to interact with one another... and these interactions create and modify database records...well, how do we go about testing that? Let's answer this question, while, in the process, continuing our review of TDD, PHPUnit, guards, and more.

If you'd like to try your hand at the homework assigned at the end of the video, here's a link to the source code.

### EPISODE 7 - 12:28
#### Homework Solutions
In the previous episode, at the end, I assigned a small bit of homework: add two small pieces of functionality to your Team class. In this lesson, we'll review one (of many) solution.

### EPISODE 8 - 9:26
#### Regression Testing
A test suite that returns green doesn't necessarily mean there are no bugs in the app. So what happens when you push to production, only to realize a few months later that, given a specific scenario, your code does not work as intended? Well, in these situations, we can write a regression test to pinpoint the bug, and provide a fix.

### EPISODE 9 - 20:35
#### "Liking" a Model With TDD
Using the example of a user having the ability to like any type of resource (comment, post, status, etc.), how might we use TDD to design this API and workflow from scratch?

### EPISODE 10 - 7:08
#### Test Method Refactoring
Let's take some time to refactor the tests we wrote in the previous lesson. We'll review simple setUp extractions, global testing helper functions, and a reusable signIn method.

### EPISODE 11 - 27:08
#### Design a Fluent API with TDD
In this lesson, we'll build a fluent wrapper around the confusing regular expression syntax (using this project as inspiration). Similar to all other lessons in this series, the basic process remains the same: design the API you want (through tests), and then create the necessary production code to make it work!

### EPISODE 12 - 24:01
#### Testing Email With Custom Assertions
So you need to write some assertions to ensure that the necessary email is delivered when you hit a particular route? Well, at the time of this writing, Laravel doesn't offer any such functionality out of the box. Let's roll up our sleeves, and learn how to write and organize a custom set of assertions for this very task!

### EPISODE 13 - 18:36
#### PHPUnit Prophecies
While we've been focusing a lot of our energy on outside-in testing, the reality is that, as you dig deeper toward the unit level, you'll often need to create mock objects, stubs, and more. In this lesson, we'll learn how to use the excellent Prophecy framework, which is built into PHPUnit these days.

### EPISODE 14 - 9:45
#### Bug Fixing Workflow
As you've already learned in this series, tests are particularly useful for handling regressions. In this lesson, we'll identify a bug in a real code base, write a test to reproduce it, fix it, and then push our updated code to production. All in nine minutes, too!  

----  
ashucn@gmail.com