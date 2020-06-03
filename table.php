<?php
echo("<table>\n");
for($i=0;$i<=10;$i++)
{
   echo("<tr>\n");
   for($j=0;$j<=10;$j++)
   {
      echo("<td>\n");
      echo(($i+$j));
      echo("</td>\n");
   }
   echo("</tr>\n");
}
echo("</table>\n");


?>