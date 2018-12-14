//logout.php

<?php

	
    
    session_start();
	session_destroy();


?>
<script>window.alert("logged Out Successfully");
window.location.href="index.php";
</script>