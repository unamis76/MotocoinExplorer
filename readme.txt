MotocoinExplorer installation:

	1. Copy all files to your web server `public_html` directory. Web server must support php & curl
	2. Install & configure `motocoind` server
	3. Open bc_daemon.php & change `motocoind` server's settings:
	
			$GLOBALS["wallet_ip"] = "127.0.0.1";
			$GLOBALS["wallet_port"] = "8332";
			$GLOBALS["wallet_user"] = "username";
			$GLOBALS["wallet_pass"] = "password";	
			
		Here are some sample entries for the value $GLOBALS["wallet_ip"]:
		
		"127.0.0.1" - This will communitcate with the daemon in clear text
		"http://127.0.0.1" - This is also an unencrypted connection
		"https://127.0.0.1" - This will connect to the wallet using SSL encryption.			
		
	4. Done! Go to `your.domain`/index.php

MotocoinExplorer files:

	index.php - The home page for the script.
	block_crawler.css - The CSS Style Sheet for the script.
	bc_layout.php - This file contains most of the php.html used to render the site.
	bc_daemon.php - This file contains fucntions for interacting with the daemon.
