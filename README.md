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



