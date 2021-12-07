Simple User Login system Devloped Using Laravel FrameWork.

The version is V.01 and I am trying to integrate More features as i do get the time. 

Modules 
1. User Login
2. registration
3. Updation

Requirements
 1. Laravel Frame Work
 2. Xampp for Local Database setup with PHPMYADMIN
 3. PHP Version grearter than 8.0
 4. Composer installed
 5. git for pull and push
 
 
 How to run
 
 1. Laravel Installation query
 composer create-project laravel/laravel {directory} 4.2 --prefer-dist
 (Please Choose Xampp/htdocs as directory
 2. Run Xampp and execute Databse and apache
 3. Run php artisan make:migration
 4. Run php artisan serve [you can find the project in 127.0.0.1:8080 or 80)
 
 
 
 
 
 
 -------------------------------------------
 
  Command Line ->getting started
  
 ![CommandLine](https://user-images.githubusercontent.com/89398083/145045006-75ed8534-efad-4b97-bef9-a0dba4d65015.PNG)

---------------------------------------------



Running the Project-> php artisan serve


 
![localhost](https://user-images.githubusercontent.com/89398083/145045048-013c7c6f-1cba-42e8-94ab-9695b5e1599a.PNG)

---------------------------------------------


Login page dsiplays


![loginpage_home](https://user-images.githubusercontent.com/89398083/145045100-d97d1e38-d576-460a-8991-5512d0a614a4.PNG)

----------------------------------------------


Initial Database value created as brittobaby23@gmail.com (only one record available)

![databasevalues](https://user-images.githubusercontent.com/89398083/145045139-3fb150b8-6684-4000-8b19-dc0abbefb551.PNG)


------------------------------------------------

Email Vaidation using anjali@gmail.com

![email_validation](https://user-images.githubusercontent.com/89398083/145045203-75629af3-57ed-4209-8763-b26d61bf1ceb.PNG)


------------------------------------------------



email getting error output because no records found

![email error](https://user-images.githubusercontent.com/89398083/145045229-96fdfcbb-b8aa-442a-9251-01ebd958a541.PNG)

---------------------------------------------------

creating new records, but errors due to condition like email not match and phone number doesnot starts with 080 - and 10 digits
![signup validation errors](https://user-images.githubusercontent.com/89398083/145046274-dcf6d188-4fec-4764-9d1c-fb17154fc2e7.PNG)

----------------------------------------------------

Reregistration with proper data and success


![signup validation success](https://user-images.githubusercontent.com/89398083/145046305-28964d62-9073-40df-b5be-1beca9bc0dfc.PNG)


------------------------------------------------------

login with registered new data and success

![login_success](https://user-images.githubusercontent.com/89398083/145046757-edc604f1-795b-4fee-8ba8-000a60ceebf2.PNG)

-------------------------------------------------------

displaying user details of anjalyroy813@gmail.com
![userdetails](https://user-images.githubusercontent.com/89398083/145046797-1a0f6f2a-339a-43b9-b4b2-63c0cf7fb7eb.PNG)

-----------------------------------------------------


editing mail id to aaaaaaa@gmail.com

![edit user details](https://user-images.githubusercontent.com/89398083/145046825-ff0fa37d-d3a9-43c1-ab2e-7d89b1909645.PNG)


----------------------------------------------------


final database with new edited email address

![final edited data](https://user-images.githubusercontent.com/89398083/145046865-be83017b-246c-4fd0-a34b-4e112e175405.PNG)





