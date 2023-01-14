# cloud-computing

Normally everything works pretty well : 
Basically we created a docker container environement in order to run and develop correctly a website.
This docker container contains all the dependencies and tools in order to run PHP fpm, a Maria DB server and a mysql server.
Now we can just run our application and test our codes in any machines that has docker installed. So we don't need to download any version or other tools to run the application.

The only thing to do is to clone this repository with the command git clone ... and then execute docker-compose up in the command line terminal.
-- > Go to your browser and write Sportmarket:8080.
warning : if you have an 404 error or other types of error just add this line to the following directory: 
127.0.0.1 SportMarket into etc/hosts
