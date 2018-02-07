<?php
$genre = $_GET['genre'];
if($genre = 'essay') {
  $proj = '1';
  echo
  '<li><a href=\'project_page.php?id=al.su&proj=' .$proj. '\'>student id: al.su</a></li>
  <li><a href=\'project_page.php?id=bu.an&proj=' .$proj. '\'><span class="case_study">Daniel</span> student id: bu.an</a></li>
  <li><a href=\'project_page.php?id=ch.an&proj=' .$proj. '\'>student id: ch.an</a></li>
  <li><a href=\'project_page.php?id=dh.mo&proj=' .$proj. '\'>student id: dh.mo
</a></li>
  <li><a href=\'project_page.php?id=ga.ar&proj=' .$proj. '\'>student id: ga.ar</a></li>
  <li><a href=\'project_page.php?id=ho.jo&proj=' .$proj. '\'>student id: ho.jo</a></li>
  <li><a href=\'project_page.php?id=ko.di&proj=' .$proj. '\'>student id: ko.di</a></li>
  <li><a href=\'project_page.php?id=li.em&proj=' .$proj. '\'><span class="case_study">Tara</span> student id: li.em</a></li>
  <li><a href=\'project_page.php?id=lo.va&proj=' .$proj. '\'>student id: lo.va</a></li>
  <li><a href=\'project_page.php?id=mi.as&proj=' .$proj. '\'>student id: mi.as</a></li>
  <li><a href=\'project_page.php?id=ro.dy&proj=' .$proj. '\'>student id: ro.dy</a></li>
  <li><a href=\'project_page.php?id=sa.jh&proj=' .$proj. '\'>student id: sa.jh</a></li>
  <li><a href=\'project_page.php?id=to.fr&proj=' .$proj. '\'><span class="case_study">Zoe</span> student id: to.fr</a></li>
  <li><a href=\'project_page.php?id=we.sp&proj=' .$proj. '\'><span class="case_study">Mark</span> student id: we.sp</a></li>';
  }
  elseif(isset($_GET['genre'])) {
    $genre = $_GET['genre'];
    echo
    'string';
    }

?>
