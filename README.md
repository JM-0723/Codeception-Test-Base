# Codeception-Test-Base 
This is my test base for Codeception automation


Requirements to run: 
1. Download and install XAMPP
    
  https://www.apachefriends.org/ 

(Optional) 

2. Download and install Node JS ( required for Selenium installation)
    
  https://nodejs.org/en/download/current 
 
4. Download and install Selenium
    
  https://www.npmjs.com/package/selenium-standalone 
 
============================================================ 
 
Steps to use: 
1. Make sure tthat php is added on your local computer 'Path' environment variable
   
   -> Go to environment variable 
   -> edit path 
   -> add the php directory folder under XAMPP installation folder (ex: C:\xammp\php )
   
3. Clone the repository under C:\xammp\php\htdocs\Projects 
 
(Optional: Selenium) 
 
3. Before running the test scripts, make sure to run the selenium intance on another terminal
   
   -> Run this on terminal 'selenium-standalone start' 
 
5. Now your setup is complete you can now edit and run your test script via gitbash or any local terminal. 
 
============================================================ 



============================================================ 

 
Sample Codeception commands to run for file creation : 
 
a. Create env file  

  -> php vendor/bin/codecept g:env [env_name] 
   
b. Create helper file 

  -> php vendor/bin/codecept g:Helper [helper_name] 
  
c. Create acceptance test file 

  -> php vendor/bin/codecept g:cest Acceptance [filename] 
 
============================================================ 
 
Sample Codeception commands to run acceptance tests: 
  
 a. Per test 
 
   -> php vendor/bin/codecept run Acceptance [filename] --env [site],[config],[data] 
  
 b. In a group / multiple tests 
 
   -> php vendor/bin/codecept run Acceptance -g [groupname] --env [site],[config],[data]  
  
 c. To show steps while running, add --steps  
 
   -> php vendor/bin/codecept run Acceptance [filename] --env [site],[config],[data] --steps 
  
 
