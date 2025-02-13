<?php

// Unfortunately, Vercel only allows an app’s entry-point to live inside the api directory,...
// ...so we have to set up a simple script to forward to Nette's normal www/index.php entry-point:

require __DIR__ . '/../www/index.php';