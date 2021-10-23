Laravel web application developed by WTM Buea community members

# Health Care Management App

An app that enables users and or patients to get consultation online, free health care tips/advice and also have access to information/knowledge about health care campaigns around them. This app also enables health care personnels to interact/network with others and also get information or organise conferences centered around health. They could also be eligible to provide health care services and or consultations.

* Users

A user indicates whether he or she is a  health care personnel or not in the registration process.

1. **If the user is a health care personnel**,: the user is directed to a page to complete his/her information.After that, the user is directed to the dashboard page. Here the user can see his/her networks, see conferences organised and can register to participate. Also the user is also given the ability to register (probably by clicking on a “Sign Up” button)  as a doctor(consultant) on the app.These consultants are those that will have to communicate with the patients on the app. By doing so, the user will have to go through a screening process and interview before being accepted as a consultant (this does not need to be implemented now). If the user is successful after the test, he/she is added as a consultant and can access information regarding the patients in his/her domain. So, in his/her dashboard the consultant will see the different consultations pertaining to him/her.

2. **If the user is not a health care personnel, i.e a simple user**: The user is directed to a dashboard page, where he or she can see health care tips, health care campaigns organised around him/her and can register for that(if needed). The user can also consult and describe his or her diagnoses. By doing so, the user is added to the patients database. And this information is added in the consultation table which of course will be taken care of by the consultants(doctors). So, if a user has some consultations, this info will be displayed in a table with the related details on his/her dashboard. 

### Future works

> We could add the possibility that the patient receives a notification on his/her phone/email about the response to his/her consultation.

3. **The Admin**: The admin has access to all the information and can carry out some normal admin duties(suspend, activate, delete, add, edit etc) some details.

4. **The Registration Process**:
 Fields needed for the registration process: 
 * First name
 * Last name
 * Email
 * Phone number(nullable)
 * Profile pic
 * Health care personnel( Y or N)
 * Status (default: active)
 * Description, gender, birth_date (nullable)



## Installation
1. Fork the project
2. Clone the project; Find a location on your computer where you want to store the project. 
3. Use cd to enter your project directory
4. Install Composer Dependencies using ``` composer install ```
5. Install npm dependencies using ``` npm install ```
6. Create a copy of your .env file; .env files are not generally committed to source control for security reasons. But there is a .env.example which is a template of the .env file that the project expects us to have. Make a copy of the .env.example file and create a .env file that can start to fill out to do things like database configuration in the next few steps. ```cp .env.example .env```. This will create a copy of the .env.example file in your project and name the copy simply .env.
7. Create an empty database for our application
8. In the .env file, add database information to allow Laravel to connect to the database
9. In the .env file fill in the ```DB_HOST```, ```DB_PORT```, ```DB_DATABASE```, ```DB_USERNAME```, and ```DB_PASSWORD``` options to match the credentials of the database you just created. This will allow us to run migrations in the database in the next step.
10. Migrate the database 
11. Here we don't need to seed the database.It would have been the next step
12. run    ```php artisan serve``` to load the project
