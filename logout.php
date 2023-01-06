<?php

session_start();

include __DIR__. "/model/user.php";

User::userLogout();