<?php

   $pdo = new PDO('mysql:host=localhost;port=3306;dbname=quiz','rsrc','123456');
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);