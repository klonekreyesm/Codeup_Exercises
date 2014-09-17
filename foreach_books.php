<?php
    // Construct a loop that iterates through each book and then each book's keys and values. 
    // Output the book's title, then list the key value pairs for the data about each book.
    // Update loop to only show books that were written after 1950.
 
    $books = array(                                                 
    //in this case, each $books has an array with KEYS of titles and values of data
        'The Hobbit' => array(                                      
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

            foreach ($books as $title => $book_data) {
            //if statement to identify if the published date is greater than 1950
               if($book_data['published']> 1950) {                       
                //executes IF the statement above is TRUE
                 echo "--------------------------".PHP_EOL;                   
                 echo "$title".PHP_EOL;
                 // echos the data pulled from the second array
                 echo "published in ". $book_data['published'].PHP_EOL;    
                 echo "written by ". $book_data['author'].PHP_EOL;
                 echo $book_data['pages']." pages".PHP_EOL;
                }
            }
            

?>