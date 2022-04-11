  
<?php 
    session_start();
// session_destroy() destroys the session. Then the header() function redirects to the home page. 
    session_destroy();
    header('Location: index.php');
?>