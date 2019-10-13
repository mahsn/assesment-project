# A poker calculator and phrase analyser

## Requirements

-   Install <a href= 'https://www.digitalocean.com/community/tutorials/how-to-install-docker-compose-on-ubuntu-18-04'>Docker<a>
-   Install <a href='https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-ubuntu-18-04-quickstart'>Nginx</a>

| PHP | 7.2.15 |

| MariaDB | 15.1 Distrib 10.3.14-MariaDB

| Nginx | 1.15.10 |

| Laravel | 5.8 |

## About the project

-   Poker calculator
-   Phrase analyser

#### Poker Calculator

<p> Web application should calculate chance of getting desired card based on the amount of cards left.
Use string notation to designate cards.</p>

Example:

<p>
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
</p>

<h3> Phrase Analyser</h3>

<p>
A web application that will analyse customer input and provide some statistics.
Runflow:
Step 1. Customer is asked to insert a string (not longer then 255 chars)
Step 2. Customer submits the data and receives a grid overview with character statistics.
column1 - character symbol
column2 - how many times character encountered.
column3 - sibling character info: character was seen standing before [list of chars], after [list of chars], longest
distance between chars is 10 (in case of 2 or more characters).
</p>

#### How to install

<h5>git clone https://github.com/mahsn/assesment-project.git</h5>

<p> After clone the project, inside your project folder and run composer install , this command will install Laravel and its dependencies.</p>

<h5>composer install</h5>

<p> you need to install the database, so use the commands below:</p>

<h5> cp env-example .env </h5> // update your database credentials

<h5> php artisan migrate </h5> // to create the tables inside your database, run this commanf inside your docker container.

<h5> php artisan key:generate </h5> // generate key for laravel

#### Running Docker Containers

-   docker-compose up -d

#### Accessing the examples:

use the follow URLs:

-   Poker Calculator: <a href="http://localhost/pokercalculator">http://localhost/pokercalculator</a>
-   Phrase Analyser: <a href="http://localhost/phraseanalyser">http://localhost/phraseanalyser</a>

#### Running the tests

1.  After composer installation, use the following command to run all tests:

<h5>./vendor/bin/phpunit</h5>
