<?php

/**
 * Create an email element
 * array element
 * html element
**/

function emailElement($element)
{
  $html='';
  $html.="<p>
    <label for=\"".$element['name']."\">".$element['label']."</label>
    <input  type=\"".$element['type']."\"
            name=\"".$element['name']."\"
    >
    </p>";
  return $html;
}
