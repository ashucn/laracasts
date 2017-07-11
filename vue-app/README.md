# Learn Vue 2: Step By Step

VUECASTS.COM

Vue is easily one of the most exciting additions to the front-end world in many years. With its intuitive API, and the fact that it can be applied to any type of application, it's no wonder why folks have gravitated to it as much as they have.
If you'd like to jump on board, let me show you, step by step, exactly what you need to know. It's the best way to learn Vue!
[https://laracasts.com/series/learn-vue-2-step-by-step/](https://laracasts.com/series/learn-vue-2-step-by-step/)  

### EPISODE 1 ● RUN TIME 4:13  
Basic Data Binding  

Let's begin with a review of basic data binding in Vue. You'll get your first glimpse into the framework's wonderful, and automatic, reactivity.

### EPISODE 2 ● RUN TIME 3:03  
Setup Vue Devtools  

Let's install Vue Devtools sooner, rather than later. As you'll see, this gives us a portal into any Vue instance on the page. Especially in these early stages, you'll get a lot of use out of this Chrome extension.

### EPISODE 3 ● RUN TIME 5:27  
Lists  

In real life, we're often working with arrays, rather than strings. In this episode, you'll learn how to use the v-for directive to filter through a list of items and render them on the page. We'll also continue our review of reactivity, in the process.

### EPISODE 4 ● RUN TIME 5:04  
Vue Event Listeners  

In the previous episode, we defaulted to traditional event listeners and DOM traversal. Luckily, though, there's a simpler way with Vue. Let's review the v-on directive for registering event listeners.

### EPISODE 5 ● RUN TIME 5:57  
Attribute and Class Binding  

We haven't yet reviewed attribute binding in Vue. This is a key concept to understand, so make sure that you pay attention over the next few minutes. We can use the v-bind directive to bind a property in our model to any element attribute.

### EPISODE 6 ● RUN TIME 6:20  
The Need for Computed Propertie  s

Often, you'll find that a piece of data needs a bit of calculation, before it's rendered onto the page. In such instances, Vue's computed properties are exactly what you require.

### EPISODE 7 ● RUN TIME 5:02  
Components 101  

Let's begin reviewing Vue components. You'll make heavy use of these, as you begin to harness all that Vue has to offer, so pay special attention to the next several episodes.

### EPISODE 8 ● RUN TIME 2:36  
Components Within Components  

Not only can we create single components, but, of course, any component may further consist of child components. In this episode, let's review a basic example of that very thing.

### EPISODE 9 ● RUN TIME 6:21  
Practical Component Exercise #1  : Message

Let's begin reviewing the process of creating an assortment of practical components for your own projects. We'll start with a simple one: convert Bulma's "message" component into a full-fledged Vue component with behavior.

### EPISODE 10 ● RUN TIME 5:47  
Practical Component Exercise #2:   Modal

Let's move on to our next practical component exercise. A traditional modal box provides some key learning points. In particular, we're going to learn how to communicate between components. What happens if one Vue instance or component needs to be notified when a particular action takes place? How might we broadcast such things?

### EPISODE 11 ● RUN TIME 14:58  
Practical Component Exercise #3:   Tabs

Let's review one more practical component exercise, before moving on to new topics. Let's re-create the common tabs feature that you've seen on so many websites. This will give us a number of interesting techniques to review.

View the source for this ### episode on GitHub.  
  
### EPISODE 12 ● RUN TIME 5:59  
Component Communication Example   #1: Custom Events

Let's begin reviewing the options you have, when it comes to communication between Vue components. Or, in other words, how can one component notify another about a particular action or event that just took place?

### EPISODE 13 ● RUN TIME 4:03  
Component Communication Example   #2: Event Dispatcher

The next choice you have, to allow for communication between Vue components, is creating your own event dispatcher. Don't worry: this is much easier than it sounds, due to the fact that every Vue instance already implements the necessary interface!

### EPISODE 14 ● RUN TIME 5:54  
Named Slots in a Nutshell  

So far, we've only reviewed default component slots. Or, in other words, "take this bit of content, and insert it right there, as designated by the slot tags. But what about when we require more control? A modal component is a perfect example of this. If you want to slot a header section in one place, and a footer section in another, named slots are exactly what you need.

View the source code for this example on GitHub.

### EPISODE 15 ● RUN TIME 3:57  
Single-Use Components and Inline   Templates

Not every component needs to be generic and reusable. Sometimes, a single, view-specific component is exactly what the doctor ordered. In this episode, we'll review the basic concept, and then discuss when you might reach for the inline-template attribute to nest your template directly in your HTML file.

### EPISODE 16 ● RUN TIME 9:31  
Webpack and vue-cli  

Let's begin focusing on structure, and how you'll build actual applications with Vue. That means we're ready to learn both Webpack and vue-cli. I will warn you ahead of time: this can be a little confusing. But just stick with me, and we'll iron out all the kinks as best as we can.

As an aside, if you use Laravel, you'll be happy to know that the framework offers some facilities to make this whole process even simpler. We'll review that soon.

### EPISODE 17 ● RUN TIME 3:48  
Hot Module Replacement  

Hot module replacement is incredibly cool. Yes, it will automatically refresh the page each time you change a component; however, what's particularly neat is that the state for all components will remain unchanged. Think of it like "Live Reload" for every single component in your application. In this video, I'll quickly demonstrate how it works.

### EPISODE 18 ● RUN TIME 8:01  
Vue Ajax Requests With Axios  

Vue doesn't provide any specific AJAX functionality out of the box. Instead, you have the entire spectrum of the JavaScript community to pull from. Maybe you're already using jQuery? If so, $.ajax will do the trick. Want a native option? Consider the fetch API (just don't forget to include a polyfill for older browsers). Or, maybe a general purpose library will do the trick? In this lesson, we'll review Axios: a clean and simple HTTP request API that you can be integrated into any project within seconds.

### EPISODE 19 ● RUN TIME 17:00  
Object-Oriented Forms: Part 1  

Let's review some techniques that we might implement to DRY up our form interactions. If you've ever noticed yourself writing the same exact code, over and over, for each form, then extracting a Form class may be exactly what you need. Let's get started with part one of this two-part series.

### EPISODE 20 ● RUN TIME 13:15  
Object-Oriented Forms: Part 2  

Now that we have our validation error handling in place, we can move on to extracting a dedicated Form class. This class can be responsible for resetting itself, submitting the AJAX request to our server, and more. Ready to dig in?

Once you finished this lesson, it's over to you. How might you expand these two classes two simplify your form interaction even further? Get started, and then let us know what you came up with in the comments.

The completed source code for this lesson is available on GitHub.

### EPISODE 21 ● RUN TIME 8:30  
Object-Oriented Forms: Part 3  

Let's take one more ### episode to refactor our code and address some community questions from the previous episode. Specifical  ly, we'll update the Form class to return a Promise when submitted, we'll create a few AJAX helper methods,   and, lastly, we'll refactor two methods to improve clarity. Ready?

You may review the updated JavaScript on GitHub.

### EPISODE 22 ● RUN TIME 18:30  
Webpack Config From Scratch  

You've learned a bit about vue-loader already; however, for learning purposes, let's build up a Webpack configuration file from scratch, so that we can begin extracting and importing modules. This will give you a solid review of the fundamentals, while also providing an opportunity to review just how powerful (yet initially confusing) all this stuff can be. Don't worry: in the next episode, I'll show you some options to simplify new projects that use Webpack.

You may review the completed webpack.config.js file from this lesson on Github, and can learn more about Webpack's concepts on their website.

### EPISODE 23 ● RUN TIME 10:14  
This is Laravel Mix  

One issue, with any build tool, is that for each new project, you have to reproduce the entire setup again and again. Wouldn't it be useful if we could optimize for the 80% of folks who simply want general ES2015 + module compilation, some CSS preprocessing, and possibly a few other common tasks? And for the remaining 20%, well, they should have access to the underlying configuration file, so that they may tweak it to their project's exact needs. Well, that's exactly what Laravel Mix does for you.

### EPISODE 24 ● RUN TIME 4:28  
Shared State 101  

Let's begin reviewing shared state. You'll absolutely run into this before too long. If you have multiple Vue instances or components that need access to the same data - and they also need to be in sync with one another - how exactly do we allow for that?

### EPISODE 25 ● RUN TIME 8:38  
Custom Input Components  

You'll surely come across instances in your own projects, where you'd like to wrap a form input within a custom component. This way, you can have a single place to attach all custom sanitization, validation, and behavior. However, in the process, you'll also find that the useful v-model directive no longer works the way it usually does.

In this episode, we'll learn exactly what Vue's v-model does, and then review how to make it work on any custom component. View the demo for this lesson on GitHub.

### EPISODE 26 ● RUN TIME 16:50  
Vue SPA Essentials: Routing  

As a workflow exercise, over the next few episodes, we'll review some essential topics related to building a full SPA with Vue 2. First up, we should discuss client-side routing, and how that fits into Vue. As always, we'll start entirely from scratch, and build up our project.

View the source code for this ### episode on GitHub.  
  
### EPISODE 27 ● RUN TIME 15:01  
SPAs and the Backend  

A single-page application still needs to fetch its data from somewhere. In this episode, we'll work with Laravel a bit to build up a Status model, and its associated data. Then, once we register the necessary route endpoint, we can return this data as JSON. This way, Vue and Axios can easily fetch the data they require from our server.

### EPISODE 28 ● RUN TIME 2:30  
Vue Filters  

In the previous episode, we referenced a simple function to render a relative date for each stream. However, Vue filters are more appropriate for basic string manipulation operations like this.

### EPISODE 29 ● RUN TIME 14:08  
Dedicated Form Components  

Let's continue with our Stream demo app, and review the process of adding new statuses to the stream. To allow for this, we'll create a dedicated form component, pull in the Form and Errors classes from the Object-Oriented Forms episodes, and then update our Laravel backend code.

### EPISODE 30 ● RUN TIME 13:05  
Testing Vue: Part 1  

In this episode, we'll setup the excellent Ava test framework, and begin testing a basic Vue component from scratch. As you'll find, there are a few small gotchas that you'll want to be aware of.

You may view the source for this ### episode on GitHub.  
  
### EPISODE 31 ● RUN TIME 8:36  
Vue Component Responsibility  

Let's take a few moments to discuss structure and responsibility, as it relates to your Vue components. Specifically, we'll review a hidden child component that is begging to be extracted.

### EPISODE 32 ● RUN TIME 4:42  
Vue Subclassing  
