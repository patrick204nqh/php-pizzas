<?php

// // file system

// // $quotes = readfile('readme.txt');
// // echo $quotes;

// $file = 'readme.txt';

// if (file_exists($file)) {

//   // // read file
//   // echo readfile($file) . '<br />';

//   // // copy file
//   // copy($file, 'quote.txt');

//   // // absolute path
//   // echo realpath($file) . '<br />';

//   // // file size
//   // echo filesize($fle) . '<br />';

//   // // rename file
//   // rename($file, 'test.txt');

// } else {
//   echo 'file does not exist';
// }

// // make director
// mkdir('quotes');

// ------------ part 2 -------------------

$file = 'quotes.txt';

// open a file for reading
$handle = fopen($file, 'a+');

// read the file
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

// read a single line
// echo fgets($handle);
// echo fgets($handle);

// read a single character
// echo fgetc($handle);
// echo fgetc($handle);

// writing to a file
// fwrite($handle, "\nEverything popular is wrong");

fclose($handle);

unlink($file);
