VulnerableStore
=============
This project is to show the how the word 'hacking' has negative connotations for the wrong reasons.

### White Hat vs Black Hat
#### White Hats
_White Hat hackers are people who break websites for the purposes of fixing the issues and helping out a company._
* Most companies don't have the resources to hire a full time security team to make sure a website is secure, so they hire what are called penetration testers in order to keep their website secure.
* These Penetration Testers, also known as White Hat Hackers, find vulnerablilities in websites and then inform the company they are working for on possible fixes.


#### Black Hats
_Black Hat hackers are people who break websites for the sole purpose of stealing information or causing harm._
* Black Hat hackers are the people who try to steal information from websites, such as passwords, credit card information, etc.
* Most Black Hat hackers are not interested in who they hurt when stealing information, just how much they can get out of one company.


### How this site demonstrates hacking
#### Hacking Connotation
The word 'hacking' has a negative connotation associated with it because we generally think of Black Hat hackers when talking about hacking.
The original meaning of hacking ment manipulating something so it did something it was originally not intended for.

#### Why this website
This website demonstrates why hacking in the sense of Black Hat vs White Hat is nessacarry.
If this website was build by a single developer at a small company they wouldn't have the means to hire a full time security person.  That means they would have to try and get a penetration tester, White Hat, to help them secure their website.  We can demonstrate why this is needed later in this discussion.

##### Demonstration
To show how to hack this website you first need a tool called sqlmap.
[https://github.com/sqlmapproject/sqlmap](sqlmap github)

_This tool tests for SQL vulnerabilities in a website and then exploits them to gain greater understanding of the data that the website contains._

To start we need to first test the site for SQL vulnerabilities we can do this using the following command:

```python sqlmap.py -u http://WEBSITE_URL/item.php?id=1```

This will run through and test the website to check to see if there are vulnerabilities, and once it finds one it will save that locally so it can be used with further commands.

The next step is to find out what table is currently used, to do that we can run:

```python sqlmap.py -u http://WEBSITE_URL/item.php?id=1 --current-db```

This will dump the current database, then once we have that information we can dump all the data in the database:

```python sqlmap.py -u http://WEBSITE_URL/item.php?id=1 -D [Database we found]```
