<?php
  $gitpath = '/usr/bin/git';
  header("Content-type: text/plain"); // be explicit to avoid accidental XSS
  // example: git root is three levels above the directory that contains this file
  chdir(__DIR__); // rarely actually an acceptable thing to do
  system("/usr/bin/env -i {$gitpath} pull --rebase 2>&1"); // main repo (current branch)
  echo "\nDone.\n";

