<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include 'strUtils.php';

$myStr = new StrUtils('voilà mon texte');

echo $myStr->bold();

echo $myStr->italics();

echo $myStr->under();

echo $myStr->capitalize();

echo $myStr->uglify();