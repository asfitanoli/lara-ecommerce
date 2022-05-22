## About Lara eCommerce

Developed by Asfandyar Khan locally using WAMP server environment.

## Steps to Run

- First run composer command 
```
  composer install
```
- Copy env example file using command 
```
cp .env.example .env
```
- I am using MailTrap for sending emails. In .env my credentials are used for interview assignment which will not work after 2-3 days. You can use yours in the future, I will update the project later on.
- If you're not receiving email, please create your account on mailtrap using below link, You will receive email on mailtrap as well.
```
https://mailtrap.io/
```
- Don't forget to create a Database (Update db info in .env) and Run Migrations using below command
```
php artisan migrate
```
- Run below two seeders for dummy data. It will create admin user and add 4 products.
```
php artisan db:seed --class=AdminUserSeeder
php artisan db:seed --class=ProductSeeder
```
- Run below command
```
php artisan serve
```
- That's it. Now You can register yourself, you will be customer.
- For admin, use below credentials
```
email: aasfandyark90@gmail.com
pass: admin!@#
```

Project is made for assignment purpose in 2 days. it uses free html ecommerce template and inspinia admin template.
In the future, I will update this project with more and detail features including design.

I have followed the project table described in the assignment. You don't have option to create categories for project. Categories are hardcoded in the Defs Trait. You can add more categories from there for now. But i would suggest to use different table for categories and different table for product images.

It uses below package for cart functionality. Checkout feature is custom one.
```https://github.com/darryldecode/laravelshoppingcart```

All features can have more functionality like a proper ecommerce website with more database tables and more columns in some tables. I have used minimum functionality.

P.S Ignore the front-end ecommerce theme design. I would like to use a better purchased theme for it in the near future.


## Current Features

- Home Page
- Product Page with category
- Product detail page
- cart page
- order placement and thank you page
- login and sign up page
- Dashboard for admin / customers

## Admin

- Admin can add, update products.
- Admin can view orders, approve orders.
- Admin can see all registered customers.

## Customer
- In Customer dashboard, He can view all his orders.






