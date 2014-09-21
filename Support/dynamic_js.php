<?php
header('Content-type: application/txt');
?>
var curtbl;
function switchDisplay(tbl)
{
  if(tbl==null)
    return;
  var show = tbl.getElementsByTagName('tr')[2].getElementsByTagName('td')[0];
  show.style.display=(show.style.display=='none')?'table-cell':'none';
}

function displayDesc(a)
{
	if(curtbl==a.parentNode.parentNode)
	{
		switchDisplay(curtbl);
		curtbl=void(0);
    }
	else
	{
		switchDisplay(curtbl);
		curtbl=a.parentNode.parentNode;
		switchDisplay(curtbl);
	}
}