<?php
$date = date("H:i j F Y", strtotime("8 hour"));
$par =  $_GET['tag'] ?? NULL;
$cmd = "ansible-playbook -i /srv/inv -t ".$par." -e '".$date."' /srv/asa3.yml 2>&1";
$tags = ("test","test1","test2","test3");
print $tags;
if(isset($par) && in_array($par,$tags))
{
        $output = shell_exec($cmd) && print "Доступ для $par продлен до $date";
//      header("Location: accessed.php"); exit;
        exit(0);
}
else
{
header("HTTP/1.0 404 Not Found");
//print 'Неправильный аргумент';
}