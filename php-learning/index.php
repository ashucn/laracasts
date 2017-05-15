<?php

$query = require 'bootstrap.php';//db instance

$tasks = $query->selectAll('todos');

require 'index.view.php';

