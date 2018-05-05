<?php

header("Content-Type: text/event-stream");
echo 'data: Received At ' . date("Y/m/d h:i:sa") . "\n\n";
flush();




/*

The Problem is With ServerSideCode:
1-make sure u add correct headers such as : header("Content-Type: text/event-stream");.
2-make sure you set your response to data like this: 'data: your response text'.
3-make sure you add a line break to the end of response text twise like this: "\n\n";.
https://github.com/n4j1Br4ch1D

*/
