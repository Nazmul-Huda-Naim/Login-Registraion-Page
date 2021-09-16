<?php
function validation_message($msg, $redirect){
    ?>
    <script>
        alert('<?php echo $msg; ?>');
        window.location.href='<?php echo $redirect; ?>';
    </script>
    <?php 
}

// Create connection
$connection = new mysqli("localhost", "root", "", "test");

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

