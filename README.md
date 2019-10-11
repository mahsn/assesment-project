# A poker calculator and phrase analyser

## Requirements

-   Install <a href= 'https://www.digitalocean.com/community/tutorials/how-to-install-docker-compose-on-ubuntu-18-04'>Docker<a>
-   Install <a href='https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-18-04-quickstart'>Nginx</a>

| PHP| 7.2.15 |
| Mysql |
| Nginx | 1.15.10 |
| Laravel | 5.8 |
### How to configure Laravel with Docker, Nginx

-   How To Set Up Laravel, Nginx, and MySQL with Docker Compose <== <a href='https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose'> Configure </a> ==>

## About the project

-   Poker chance calculator
-   Phrase analyser

#### Poker Calculator

Web application should calculate chance of getting desired card based on the amount of cards left.
Use string notation to designate cards.

Example:
H2-H10 - cards 2-10 of hearts
HJ - jack of hearts
HA - ace of hearts
SJ - jack of spades
DJ - jack of diamonds
CJ - jack of clubs
[suit][value]
Step 1. User should select a suit and a card rank.
Step 2. User starts drafting cards, one by one.
Step 3. Website should display a chance of getting customer selected card on the next Draft.
If customer selected card is drafted website should display popup with a message "Got it, the chance was
(current chance of getting the card)%" and reset to step 1.

#### Phrase Analyser

A web application that will analyse customer input and provide some statistics.
Runflow:
Step 1. Customer is asked to insert a string (not longer then 255 chars)
Step 2. Customer submits the data and receives a grid overview with character statistics.
column1 - character symbol
column2 - how many times character encountered.
column3 - sibling character info: character was seen standing before [list of chars], after [list of chars], longest
distance between chars is 10 (in case of 2 or more characters).

#### How to install

\$ git clone https://github.com/mahsn/assesment-project.git

-   After clone the project, inside your project folder and run composer install , this command will install Laravel and its dependencies.

\$ composer install

-   you need to install the database, so use the commands below:

\$ cp env-example .env  // update your database credentials
\$ php artisan migrate // to create the tables inside your database, run this commanf inside your docker container.
\$ php artisan key:generate // generate key for laravel

#### Running Docker Containers

-   docker-compose up -d

#### Accessing the examples:

use the follow URLs:

-   Poker Calculator: http://localhost/cards
-   Phrase Analyser: http://localhost/phrase

#### Running the tests

1.  After composer installation, use the following command to run all tests:

./vendor/bin/phpunit
