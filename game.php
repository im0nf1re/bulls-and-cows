<?php
include 'functions.php';

writeln('');
writeln('--== Bulls and Cows ==--');
writeln('------------------------');
writeln('');

$secret = mt_rand(1, 9);
writeln($secret);