MotocoinExplorer 

	Block chain explorer for Motocoin cryptocurrency(http://motocoin.org). 
	Based on https://github.com/CallMeJake/BlockCrawler
		
	
Dependencies:
	- web server with php & curl
	- `motocoind` server (see http://motocoin.org)
	

To use this, files from the src dir should go to your webserver dir
Using this explorer requires txindex set to 1 on motocoin.conf (also boot motocoind with -reindex if you already have the blockchain)
Before using, change the username and password on config/motodConfig.php (it should match your RPC password defined on motocoin.conf)


MotocoinExplorer files:

	src/classes/* - Files for working with motocoin network
	src/config/*  - Configuration files
	src/parts/*   - files which included(using include 'file';) in another pages
	src/*         - public site's pages
	src/index.php - the home page 
	
License

MotocoinExplorer is released under the terms of the MIT license. 
See COPYING for more information or see http://opensource.org/licenses/MIT.
