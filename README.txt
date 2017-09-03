

	Local Web Search
_______________________________________________________
	
Name: Akshay Chandrachood

________________________________________________________

Introduction: User interface is made using HTML & PHP
before starting the application make sure you have 
following environment running.

I. XAMPP server - to run PHP script
II. Solr server  - for indexing and searching local data
________________________________________________________

Environment Set up
------------------
For setting up an environment follow these steps:

1. Download XAMPP server https://www.apachefriends.org/download.html
   Save the file. After downloading is complete, install XAMPP. 
   Follow the simple instructions as prompted. After installing XAMPP
   open start bar, click on XAMPP Control Panel. Start Apache service.
   When you see light blue color on Apache label, service is successfully
   started. Now, copy paste all the files in assign3.zip on following 
   path: C:\xampp\htdocs\assign3(extracted folder)
   Now type this in your browser window:
   localhost/assign3/index.html
   Here you have done with XAMPP installation. Now PHP script 
   will successfully run on your machine. Don't close XAMPP control 
   panel during or before execution, it will shut down the server.
   To stop the server click on stop button iin front of Apache.
   It will stop the server.

2. Download Apache Solr server http://www.apache.org/dyn/closer.lua/lucene/solr/6.5.0
   Installation of Solr is very easy. After downloading file, extract the file contents.
   Open command prompt. Type cmd. Then default location would be C:\User\.. (it may vary)
   Go to the folder where solr file is unzipped. Use following command to change directory. 
   "cd desktop"(without quotations). Hit enter.
   for example if solr file is unzipped on desktop:
   C:\User\Akshay\Desktop > cd solr-6.5.0
   Go to bin."cd bin"(without quotations). Your screen should look like this:
   C:\User\Akshay\Desktop\Solr-6.5.0\bin >
   Now type: "solr start -e cloud -noprompt"(without quotations)
   This will create a default "getting started" core. You can check by typing following
   address in browser: localhost:8983
   Solr runs on port 8983. It will display welcome message on command prompt.
   Now go to command prompt. Type following command for indexing of a file:
   (you should be in solr-6.5.0 folder but out of bin folder. To get back out of bin type "cd.." without quotes)
   
   java -Dtype=text/csv -Dc=gettingstarted -jar example/exampledocs/post.jar "../lyrics.csv" 
   
   (Put double quotes in the above command as it is). Path of the files to be 
   indexed may be different. Provide the respective path.Command
   prompt will show message like this:
   "1 file indexed.."
   To check whether solr is running properly, type 
   localhost:8983/solr in address bar of browser. It will open a web panel of Solr.
   Select the core getting started, go to Query tab, search the name of the song.
   It will display the results in right hand side window.
   Here you have set up solr server. To stop solr server type following command:
   solr stop -p 8983 (you should be inside bin folder)
__________________________________________________________________________________________________

Running Search Application
--------------------------

Application consists of two parts web search and local search.
In the text box simply type the query and hit search button,
application will display the results.

There is check-box button in the application if you you want to search local database.
On click it will display the search box for local search. Type the 
name of the song/query and hit search button of local search.
It will display the results/listof the songs which are matched with the query.
When you click on ay perticular song displayed on the screen, it will display
the all of the details related to that song in new tab.

___________________________________________________________________________________________________      

 



