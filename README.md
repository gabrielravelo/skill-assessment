<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Quotes App
### Skill Assessment

This is my submission for the test from the repository: `https://github.com/FmTod2/skill-assessment`

I thoroughly enjoyed this task and learned a great deal in the process.

Although I did not complete all of the following features, there are still many aspects of Laravel that I am unfamiliar with at the moment, and I need to delve deeper into its implementation (which I will explain later). However, I did not want these limitations to hinder my progress, so I proceeded with the task.

## The application must have the following features:
1. User authentication and profile update page ✅
2. A page that shows 5 random quotes✅
    1. There should be a button to refresh the quotes❌
    2. There should be a button besides each quote to save it to your favorites✅
3. A page that shows your saved favorites. There should be a button to delete a quote from your favorites✅
4. Implement rate limiting for API requests to `https://dummyjson.com/quotes` preventing abuse. The API should be limited to 30 requests per minutes❌
5. Separate admin authentication for moderating saved user quotes and banning users✅
6. Frontend should be done with Vue.js and optionally Inertia.js❌
    1. Typescript should be used for any frontend functionality❌
    1. UI should be responsive✅
7. An API route should be available to fetch a specified number of quotes random quotes✅
8. An API route should be available to fetch your favorites quotes✅
9. An API route should be available to delete a quote from your favorites✅
10. All API route should be secured with an user token✅
11. Above features are to be tested with Feature tests❌

As you can see, there are some tasks I couldn't complete. The main reasons are:

1. I am not familiar with Vue.js.
2. I am unsure how to test with Laravel features.

I am aware that the proper way to create a button that refreshes the 5 random quotes is through Vue.js and its component rendering/re-rendering mechanisms. Instead, I implemented a button to refresh the page, which works but is not the optimal solution.

However, I view these challenges as opportunities for growth. I am confident in my ability to learn these technologies and Laravel practices.

## Developer
Name: `Gabriel Ravelo` <br/>
Email: `ravelogabriel2@gmail.com`<br/>