<div id="top"></div>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/hudds-awp2021-cht2520/assignment-01-Wasim27">
    <img src="readme_images/logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Wasocial</h3>

  <p align="center">
    By Wasim Ramzan (u1970064)
    <br />
    <strong>Advanced Web Programming · Assignment 2</strong>
    <br />
    <strong>University of Huddersfield</strong>
    <br />
    <br />
  </p>
</div>


<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#project-description">Project Description</a>
      <ul>
        <li><a href="#advanced-features-implemented">Advanced Features Implemented</a></li>
        <li><a href="#technologies-used">Technologies Used</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#extra-implementations-information">Extra Implementations Information</a></li>
    <li><a href="#testing">Testing</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#references">References</a></li>
  </ol>
</details>


<!-- PROJECT DESCRIPTION -->
## Project Description

<div align="center">
  <img src="readme_images/Product_Image.png" alt="Product Image" width="500" height="">
</div>

Wasocial is a website that allows users to create and view posts in an efficient manner. Similar to the likes of Facebook, Twitter and other social networks. \
\
During the second assignment my main focus was on implementing advanced features.

<br>

### Advanced Features Implemented

* Following and unfollowing feature
* Google Two Factor Authentication
* Docker
* Build & Deploy to AWS Lightsail (Nginx) \
... and other changes to some features

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- Technologies Used -->
### Technologies Used

Here are some of the frameworks, libraries and kits used which I made efficient use of whilst creating the website. Using these certain technologies saves time, allowing me to focus on the main features of the website.

* [Laravel](https://laravel.com)
* [Laravel Breeze](https://laravel.com/docs/8.x/starter-kits)
* [Laravel Livewire](https://laravel-livewire.com/)
* [HTML]()
* [TailwindCSS](https://tailwindcss.com/)
* [PHP](https://www.php.net/)
* [PHPUnit Test Framework](https://phpunit.de/)

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- GETTING STARTED -->
## Getting Started

Docker is now the best way to get the project setup allowing for efficient management of the dependencies.

### Prerequisites

* Docker & Docker-compose

### Installation

1. Clone the repo
   ```sh
   git clone git@github.com:hudds-awp2021-cht2520/assignment-02-Wasim27.git
   ```

2. Build Dockerfile and start containers
   ```
   docker-compose build && docker-compose up -d
   ```
   
3. Install the PHP dependencies
   ```sh
   docker-compose exec -T app composer install
   ```

4. Make the .env file (copy .env example to .env no changes are required)

5. Provide permissions to the following folders
    ```
    sudo chmod -R 777 storage/
    sudo chmod -R 777 bootstrap/cache/
    ```

5. Migrate the database and seed
   ```sh
   docker-compose exec app php artisan migrate:fresh --seed
   ```
6. Generate application encryption key
   ```sh
   docker-compose exec app php artisan key:generate
   ```
7. Go to the web server hosted by nginx \
http://localhost:8088/

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- USAGE EXAMPLES -->
## Usage
<br>

### Following and unfollowing feature
<p>Users can now follow and unfollow eachother. This is a feature we see popular on social media where you can follow profiles of others. There is a lot of scalabiltiy with this feature. For example, I could further implement features such as messaging your followers, viewing only posts of those you follow and privacy options.

This was out of scope of my advanced features task as my interest was mainly on features that I aren't already similar to the ones I have done already.

You can view your followers on the right sidebar and click on them to go to their profile. This helps keep track on their lifestyle. Also, on the feed page the top 10 most followed users will be displayed.

Simply visit any users profile and follow them (or unfollow if you have already followed them)!
</p>
<br>

<div align="center">
  <img src="readme_images/following.png" alt="Homepage" width="700" height="">
</div>

<br>
<br>
<br>


<!-- Registration -->
### Google Two Factor Authentication
Two factor authentication is essential for most websites as it enhances your security. Users are now able to use the Google Authenticator app as a secondary login security feature. Simply click on the security badge on the sidebar click generate secret key and follow the instructions to get setup!

Once setup users must verify their code to access the website. If the code expires on the app you may have to refresh the page and try again.

Pragmarx Google2fa a password authentication package provides me with the ability to generate OTP and verify these are correct.
<br>
<br>

<div align="center">
  <img src="readme_images/auth-1.png" alt="Setup Auth Page" width="" height="400">
</div>

<div align="center">
  <img src="readme_images/auth-verify.png" alt="Verify Auth Page" width="" height="400">
</div>

<br>
<br>
<br>

<!-- Login -->
### Docker
Docker allows me to create containers which contain my dependencies. It also provides the ability to run code in any environment. Docker has made it easier for me to build, deploy and manage containers.

On the other hand, docker compose enables me to configure server and storage dependencies. \
Here are the containers that I have running:

* MySQL; database creation and management
* Nginx; webserver to host my site
* Mailhog; fake SMTP server for email testing
* PHP; run PHP commands in the container
<br>
<br>

Apart from Mailhog the others should be self explanatory. We can use mailhog to test emails such as the forgotten password feature. If we were to send an email password reset link then it can be viewed on mailhog.

To view them after resetting a registered users password visit http://localhost:8025/

<div align="center">
  <img src="readme_images/mailhog.png" alt="Login Page" width="" height="">
</div>

<br>
<br>
<br>

<!-- Feed -->
### AWS Lightsail

IMPORTANT: Docker will have the fully functioning website. AWS Lightsail will work for most features but does not have an email server. Also, it has not been fully tested so use Docker for most tasks.

AWS Lightsail similarly allows me to build and deploy my application but this time on the cloud. AWS Lightsail is a virtual private server provider. They provide many services such as database storage and hosting my application on the cloud. This is better for scalability as it does not require me to purchase a physical server myself.

This would particularly work well if my website was to go live. For example, I could manage domain names, backup my website and conduct many other management functions. To summarise, it would allow me to manage my app efficiently.

Currently, using the free tier as it is suitable for my needs. Again, I chose Nginx to host my webserver as seen below.

<br>

<div align="center">
<img src="readme_images/Instance.png" alt="Lightsail Instance" width="1000" height="">
</div>

<div align="center">
<img src="readme_images/Database.png" alt="Lightsail Databse" width="1000" height="">
</div>

<br>

To view my website simply visit http://18.170.36.139/ or https://18.170.36.139/ (HTTPS)

<br>
<br>

## Extra Implementations Information
* Factories and seeders were used to create fake users, posts and likes. Fake likes can be viewed on the profile page of the default user

  Default user details:
  ```
  Email: John@gmail.com

  Password: testacc123
  ```
<br>

<!-- TESTING -->
## Testing
Testing is done using PHPUnit as this is what Laravel provides us by default.

Test updates:
* Changed test files to contain their respective models/controller methods rather than mixing them
* Further tests for views (2fa and other pages)
* Tests for the following/unfollowing feature
* Tests must be run in the docker container
* The 2fa middleware can be tested in the routes by visiting /test_middleware

I have done this through assertions and checking if values exist or do not exist within the database.

To run tests simply run in the docker container:

    docker-compose exec app php artisan test   

... and all tests should pass!

<br>
<br>

<div align="center">
  <img src="readme_images/docker-tests.png" alt="Test Success" width="500" height="">
</div>

<br>
<br>
<strong>IMPORTANT: MUST MIGRATE AND RESEED THE DATABASE FOR THE WEBSITE TO WORK AFTER RUNNING TESTS</strong>
<br>

  ```
  docker-compose exec app php artisan test
  ```

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- CONTACT -->
## Contact

Name: Wasim Ramzan

University Email: u1970064@unimail.hud.ac.uk

Project Link: [https://github.com/hudds-awp2021-cht2520/assignment-01-Wasim27](https://github.com/hudds-awp2021-cht2520/assignment-01-Wasim27)

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- REFERENCES -->
## References

Most references are inlined within the code however here are some that assisted in creating certain features.

* Vhvrs. Lion Logo Royalty-free. https://www.vhv.rs/viewpic/hJJomiJ_lion-logo-royalty-free-copyright-free-lion-logo/
* Jeffrey Way (2020). Build a Like/Dislike System. Laracasts. https://laracasts.com/series/laravel-6-from-scratch/episodes/67?page=1
* Akhtar Munir (2020). search with pagination is not working in laravel. [Answer]. Stackoverflow. https://stackoverflow.com/questions/61771858/search-with-pagination-is-not-working-in-laravel
* Stephen Afam-Osemene (2020). How to Add Google's Two Factor Authentication to Laravel. https://www.digitalocean.com/community/tutorials/how-to-add-googles-two-factor-authentication-to-laravel
* Akshay Krison (2021). How to Deploy Laravel APP on AWS LightSail. https://aws.plainenglish.io/deploy-laravel-app-on-aws-lightsail-with-nginx-instance-and-managed-mysql-db-643670e2e24d

<p align="right">(<a href="#top">back to top</a>)</p>
