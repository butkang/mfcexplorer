<?php
while(true) {
// sleep 20 sec and run again
echo shell_exec('php ./get_blocks.php');
sleep(20);
}
?>
