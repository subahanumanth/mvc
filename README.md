                                                          User management system

                                                              Description

                           A simple application to manage user details like email,area of interest,blood group etc.

                                                             Functionalities

login page:

1) if user enters correct name and password,after clicking submit button it redirects to admin page or user page according to input.
2) if user enters wrong name or password,after clicking submit button it will throw an error like Incorrect username or password.
3) if user clicks "Create New User?",it will redirects to registration page.

Admin page:

1) All details of all users will be displayed here.
In each user's row,there are two buttons such as delete and update.If delete button is clicked,that specific user's data will be deleted.If update      button is clicked that specific user's details will be popped-up in the update form and now user can edit their details.

2) If admin clicks the logout icon, then their session will be expired and they will be redirected to login page.

3) At top of the page there is a navigation bar which contains three managing areas such as manage blood group, manage area of interest, manage details of graduation.If admin clicks each of these links it will go to their respective pages.

user page :

1) If user is successfully logged in,the details of that user will be displayed.

2) If user clicks the logout icon, then their session will be expired and they will be redirected to login page.

3) If user clicks update button,it will be redirected to update form and their details will be pop-uped in that form.
   After updating details user will be redirected to user page inwhich updated details will be listed.


Managing blood group,area of interest,details of graduation :

1) If admin clicks any one of these links, it will be redirected to this page.In this page, list of specific field will be displayed.

2) In each row there will be two buttons such as delete and update.If admin clicks delete button,specific data will be deleted.If admin clicks update button,specific data will be popped-up in the text box,if admin updates that data after clicking submit button the data will be updated.

3) If admin clicks add button, text box will appear, if data entered and after clicking submit that data will be added to the list.


Registration page :

1) If user enters all details,after clicking submit it will be redirected to login page inwhich user can login using registered name and password.

2) If user is not entering one or two fields and clicking submit button it will throw an error near specific field.After entering all details only user will be registered and redirected to login page,otherwise it will stay in same page.
For example,
if user enters all details except blood group,after clicking submit it will throw an error like "select blood group" near blood group field.
After entering blood group only,user will be registered.

2) Password must be a minimum of 8 characters and contain at least one capital letter, a number and a special character and one small letter,otherwise it will throw an error.If user enters one value in password field and different value in confirm password field,it will throw an error like "Enter correct password" near confirm password field.


Update page :

1) If user clicks update button in admin page or user page,this page will be redirected.
2) The details of user will be popped up in the form.
   In this page except profile picture,password and confirm password all fields are mandatory.
3) If user skips any fields other than profile picture,password and confirm password, it will throws an error and stays in same page.
4) If user clicks cancel button,it will redirects to their list page.




                                                             Technical snippets

1) Design patterns :
        1)Singleton pattern(adminList.php, check.php, new.php)
        2)Adapter pattern(table.php, tableAdapter.php)
        3)Command pattern(dropdown.php, commandPattern.php)

2) Mysql table design - Created a table design for user management system in mysql workbench(database design.png)

3) Unit testing - Unit test cases for each page with status (https://aspiresysinc-my.sharepoint.com/:x:/r/personal/hanumanth_chandra_aspiresys_com/_layouts/15/Doc.aspx?sourcedoc=%7BBCE59D6A-931C-496E-A73F-4EDBE51F1FD5%7D&file=Unit%20testing.xlsx&wdOrigin=OFFICECOM-WEB.START.MRU&action=default&mobileredirect=true)




                                                        Steps to run application

Setting up database :
          1) Create database named "profilecopy" in your database.
          2) Dump the file named "dbdump.txt" into your database.
          3) Now database is ready.

Setting up server :
          1) Create a server(virtual host) named "usermanagementsystem.com" which serves the directory where you have downloaded files.
          2) Now server is ready to run the application.

Run the application :
          1) Open browser and search this url "usermanagementsystem.com/login".
          2) Login details :  username - subahanumanth
                              password - Hanu@1234
