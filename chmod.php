<?php
/****this file changes the permissions of all php files within the dir to 750 so that they will run on namecheap servers
*****place file in root dir of site to work properly
*/
$username = 'namecheap-admin';
$password = 'chmod-reset';
$results = '';
$successful_results = 'Reset successful';
function reset_php_permissions(){
    $permissions_level = 750;
    $file_type = '*.php';
    shell_exec("find . -name '$file_type' -exec chmod $permissions_level {} \; ");
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	if(!empty($_POST["user"]) && $_POST["user"] === $username  && !empty($_POST["password"] && $_POST["password"] === $password )){
		reset_php_permissions();
		$results = $successful_results;
	}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reset</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Reset</h1>
    	<form method='post' action='chmod.php'>
    		<input type='text' name='user' placholder='Username' autofocus='autofocus' />
    		<input type='password' name='password' placeholder='Password' />
    		<button type='submit'>Submit</button>
    	</form>
    	<p><?= $results; ?></p>
    </body>
</html>