# cloud-computing

Normally everything works pretty well : 
Basically we created a docker container environement in order to run and develop correctly a website.
This docker container contains all the dependencies and tools in order to run PHP fpm, a Maria DB server and a mysql server. The volume is monted at Cloud_Computing_project/public so we can change the code and keep the data safe from any docker changes or suppressions.

Now we can just run our application and test our codes in any machine that has docker installed. So we don't need to download any version or other tools to run the application.

The only thing to do is to clone this repository with the command git clone (myproject) and then execute docker-compose up in the command line terminal.
-- > Go to your browser and write Sportmarket:8080.
warning : if you have an 404 error or other types of error just add this line to the following directory: 

127.0.0.1 SportMarket into etc/hosts
If you are using windows this file is located at windows/system32/drivers/etc/hosts
