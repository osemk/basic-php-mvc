<?
include("PageController.php");
$pages=new PageController;

$pages->page("/","homepage");
$pages->page("/folder1/","folder1");
$pages->page("/folder2/","folder2");
     $pages->finish();