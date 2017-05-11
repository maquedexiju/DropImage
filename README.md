Drop Image

# Introduction
I make this tool in purpose that image host may not work forever, or if we don't have Internet, we might have some problems.
Also, it's not convenient to add a image into a Markdown file.

So this tool can help you construct a local-image-host and manage your images easily.

# Features
1. Support big files.
2. Uploading Procedure can be seen.
3. Copy the path code fast.

# Setup
First, you need a web server running on your computer. you can choose [apache](http://httpd.apache.org/download.cgi) if you like.
And the Mac user can open built-in apache using followed steps:
1. open terminal, you can use spotlight, or find it in utility.
2. input the command: `sudo apachectl start`

Second, put the whole folder to the path of apache(or the web server you used).
For Mac user who use the built-in apache, the path should be /Library/WebServer/Documents .

Third, maybe you need to set the httpd.conf(or config file for the web server used by you) .
1. load PHP module
2. set the authority of the user, so the tool can create new folders. these links might be helpful to that:[first question](http://stackoverflow.com/questions/5165183/apache-permissions-php-file-create-mkdir-fail/5165435#5165435), [second question](http://stackoverflow.com/questions/5246114/php-mkdir-permission-denied-problem).
3. set the authority of the Directory you are using, so the tool can save the file.

For Mac user who are not familiar to the settings, you can follow instructions here:
1. open httpd.conf using plain text editor in the folder.
2. find `user XuXiaotian`, and change the "XuXiaotian" to your user name for Mac.
3. oepn Finder, choose Go > Go To Folder > /private/etc/apache2, and replace httpd.conf.
4. open terminal and running `sudo apachectl restart`

Now you can open your browser and set the URL to `localhost/<the path you are using>`, For example `localhost/DropImage/`
