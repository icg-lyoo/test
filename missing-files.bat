@echo off
cls

IF EXIST "C:\Program Files (x86)\PHP\v5.3\" cd /d C:\Program Files (x86)\PHP\v5.3\
IF EXIST "C:\Program Files\PHP\v5.3\" cd /d C:\Program Files\PHP\v5.3\

php.exe -f "C:\inetpub\wwwroot\deploy-mcd-mb\missing-files.php"

cd /d C:\inetpub\wwwroot\deploy-mcd-mb\