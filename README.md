Web Crawling Application

	#Installing / Deployment
	You need to have XAMPP with PHP 7.0 or Higher if you want to deploy it in your local host
	
	#Database Name and table structure
	Databese Name: contentbird
	Tables:
	CREATE TABLE `users` (
	  `User_ID` int(11) NOT NULL,
	  `Full_Name` varchar(255) NOT NULL,
	  `Email_iD` varchar(70) NOT NULL,
	  `passWord_Log` varchar(355) NOT NULL,
	  `Date_Registered` datetime NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	CREATE TABLE `url_links` (
	  `URL_ID` int(11) NOT NULL,
	  `User_ID` int(11) NOT NULL,
	  `URL` varchar(355) NOT NULL,
	  `Status` text NOT NULL,
	  `Date_Inserted` datetime NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	CREATE TABLE `urls_metrics` (
	  `Crawl_ID` int(11) NOT NULL,
	  `URL_ID` int(11) NOT NULL,
	  `HTML_title` varchar(100) NOT NULL,
	  `ExternalLinks` int(11) NOT NULL,
	  `googleAnalytics` text NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;

	NOTE:you can change the database name to what ever you want or you can just import all the table to your database from the contentbird.sql file.
	Finally, create a foulder inside your xamp htdocs directory and name it webcrawler
	
	#Configuration Details
	The URL #Web Crawling Applicatio was develop using a simple customize MVC framework developed with PHP.
	Apart from the images, javascript and css folder, the MVC contains three 
	main folders (Controller, model and view) and a index.php file that send a
	request to set call page controller. The controller folder contain three files (set_call_page.php,user_authenticationlog.php and pass_word_Encrypt_usER_Log  controller). The set_call_page controller handle the Navigation 
	between the pages just like laravel routes.  

	While the user_authenticationlog handle the interaction between the user and the server (database). 
	It takes a request from the user and send it to Request_thentication inside the model folder to handle 
	the request and send the result back to the user. The pass_word_Encrypt_usER_Log i responsible for Encrypting user password befor saving it into database while regitration. The model folder has three files also, 
	the connect_toDB.php file is the database connection file while the Request_thentication.php file process user request sent from user_authenticationlog. The check_authenticationlog.php file check if the user is valid user and the check if SESSION has expaired.