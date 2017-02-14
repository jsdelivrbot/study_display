<?php
/*
This document includes links to the supporting documents that correspond to a genre.
The genre variable should be set on index.php.
*/

if(isset($genre)) {
  echo
  '<li><a href=\'../docs/documentation.' .$genre. '.pdf\'>View Documentation</a></li>
  <li><a href=\'../docs/narrative.' .$genre. '.pdf\'>View Research Narrative</a></li>';
  }
  elseif(isset($_GET['genre'])) {
    $proj = $_GET['genre'];
    echo
    '<li><a href=\'../docs/documentation.' .$genre. '.pdf\'>View Documentation</a></li>
    <li><a href=\'../docs/narrative.' .$genre. '.pdf\'>View Research Narrative</a></li>';
  }
 ?>
