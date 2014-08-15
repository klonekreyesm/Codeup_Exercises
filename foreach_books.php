<?php

$books = array(                                                 //an array within an array that holds data

    'The Hobbit' => array(                                      //in this case, each $books has an array with KEYS of titles and values of data
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' =>array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

 //if ($book_data)
        foreach ($books as $title => $book_data){

           if($book_data['published']> 1950){                       //if statement to identify if the published date is greater than 1950

             echo "--------------------------\n";                   //executes IF the statement above is TRUE
             echo "$title\n";
             echo "published in ". $book_data['published']."\n";    // echos the data pulled from the second array
             echo "written by ". $book_data['author']."\n";
             echo $book_data['pages']." pages \n";


        //foreach ($book_data as $key => $value){
	    //	echo "$key $value \n";
		
	}
}


	//echo $book_data;

//	foreach($title as $book_data){
	//echo $book_data;
//}


	//foreach($title as $book_data => $value){
		//echo $value . "\n";

	









?>