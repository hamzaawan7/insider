# insider_football_trial

## Description

### Tools
This project is made on laravel 5.8 and PHP 7.2. 
The dependency manager used by by this project is
`composer`and the environment is docker.

### Summary
This is a football simulation project. It consists of a
leagues which consists of matches between teams.

In this project, I have `seeded` a `Premier League` league and under
that have registered four teams.

### How to use
For running the project. 
1) You need to create an empty database
2) Import `insider_football_trial.sql` file
in that database. Currently, the sql file only has `migrations`
table.
3) After `cloning` the project inside your database, you will need
to run the following command: 

    `php artisan migrate` 
    
   This command will migrate all the table and their changes to
   the database.
4) For test purposes, I used seeder to insert data into the 
    database. The real data consists of 1 league, 
    4 teams, 6 matches for a teams over the period 
    of 6 weeks. Please use the following command to 
    seed the database
    
    `php artisan db:seed`

    and for restarting the league, use this
    
    `php artisan db:seed --class=ResetSeeder`
        
### Architecture

The `MVC design pattern` has been used in this system. The simulation
function is called from the `LeagueController@simulate`.

##### Note
I tried to make the simulation as fluent and correct as possible
with additional factors like team_strengths since it was 
a bonus.

###### Cheers
