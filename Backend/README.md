# bkpuneapp
## Brahmakumaris Pune Mobile Application Server Component
### Web Service written in PHP Octobercms

**Steps for setting up environment.**

Make sure you have Server environment locally **(LAMP, XAMP, WAMP) with PHP 7+**

its better if you have [GIT](http://git-scm.com/downloads) and [Composer](https://getcomposer.org/Composer-Setup.exe)already installed on local machine 

**Step one :**

In your server root create some folder e.g. bkpune

Folder Structructure at you local machine can be as follows:

If Your Server is at D:\xampp\htdocs\
then create folder bkpune in it
D:\xampp\htdocs\bkpune\

create folder git-repo here 
D:\xampp\htdocs\bkpune\git-repo

create folder service here 
D:\xampp\htdocs\bkpune\service

go to D:\xampp\htdocs\bkpune\service path in terminal/cmd
Run following command in terminal/cmd

`php -r "eval('?>'.file_get_contents('https://octobercms.com/api/installer'));"`

This will install octobercms at D:\xampp\htdocs\bkpune\service

**Step Two :**

run command:

`composer update'

in commandline

**Step Three :**

Open http://localhost/bkpune/service in browser and complete rest of the installation steps.


**Step Four :**

Go to D:\xampp\htdocs\bkpune\git-repo folder.

current directory clone this repo by command


`git clone https://github.com/IOCare/bkpuneapp.git`


copy the content of bkpuneapp/Backend folder in following path

octobercms's  ** "plugin/Iocare/BkpuneWebservice" ** path

i.e D:\xampp\htdocs\bkpune\service\plugin\iocare\bkpunewebservice




