<?php function time_offset($t, $f = 'h:ma M. j Y T'){
  $o = time() - $t;
  switch($o){
    case($o <= 1): return "just now"; break;
    case($o < 20): return $o . " seconds ago"; break;
    case($o < 40): return "half a minute ago"; break;
    case($o < 60): return "less than a minute ago"; break;
    case($o <= 90): return "1 minute ago"; break;
    case($o <= 59*60): return round($o / 60) . " minutes ago"; break;
    case($o <= 60*60*1.5): return "1 hour ago"; break;
    case($o <= 60*60*24): return round($o / 60 / 60) . " hours ago"; break;
    case($o <= 60*60*24*1.5): return "1 day ago"; break;
    case($o < 60*60*24*7): return round($o / 60 / 60 / 24) . " days ago"; break;
    case($o <= 60*60*24*9): return "1 week ago"; break;
    default: return date($f, $t);
  }
}
?>
