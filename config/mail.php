<?php

return [

    'driver' => 'SMTP',

    'host' => 'smtp.mailgun.org',

    'port' => 587,

    'from' => ['address' => 'postmaster@mariliasemdengue.com.br', 'name' => 'Marília sem Dengue'],

    'encryption' => 'tls',

    'username' => 'postmaster@mariliasemdengue.com.br',

    'password' => 'd607c3cc960c5dc3c57b1e78b141fc60',

    'sendmail' => '/usr/sbin/sendmail -bs',

    'pretend' => false,

];
