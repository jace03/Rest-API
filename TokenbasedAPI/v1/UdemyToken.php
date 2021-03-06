php_flag display_errors on;

RewriteEngine On
RewriteCond ${REQUEST_FILENAME} !-d
RewriteCond ${REQUEST_FILENAME] !-f

RewriteRule ^tasks/([0-9] +)$ controller/task.php?taskid=$1 [L]
RewriteRule ^tasks/complete$ controller/task.php?completed=Y [L]
RewriteRule ^tasks/incomplete$ controller/task.php?completed=N [L]