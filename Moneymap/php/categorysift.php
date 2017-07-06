<?php 
function sift($cat)
{
 $catarray=array("Food","Travel","Party","Misc");
 $catname=$catarray[$cat-1];
 echo $catname;
}
?>