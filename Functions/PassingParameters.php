<?php

$authorName = "Blah blah";

bookAuthorEcho("Chris Ryan", $authorName);
bookAuthorEcho("James Hamilton", $authorName);
bookAuthorEcho($authorName, $authorName);

function bookAuthorEcho($authorName, $authorName2) 
{
    echo $authorName . " " . $authorName2 . "\n";
}


