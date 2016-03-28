# libraryDotPHP


Varianta web a aplicatiei libraryDotNet + API-uri pentru comunicarea cu baza de date (folosite de LibraryDotNet)


<b>Documentation:</b> 


<b>Database connection setting: /bd/bd.php</b> 

<b>Book Operations:</b> 
<b>	-add a new book:[POST] addbook.php (bookid,title,author,total,free,details)</b> 

<b>	-remove a book:[POST] removebook.php (bookid)</b> 

<b>	-edit a book:[POST] editbook.php (bookid,title,author,total,free,details)</b> 

	<b>Search Operations:</b> 
	<b>	-search by bookid:[GET] findbookid.php (bookid)</b> 

	<b>	-search by author:[GET] findauthor.php (author)</b> 

	<b>	-search by title:[GET] findtitle.php (title)</b> 

	<b>Rents Operations:</b> 

	<b>	-rent a new book: 1. [GET] freebooksleft.php (bookid) </b> -> Return INT of free left books (Used to verify if there is any book left available for rent)

			<b>	2. [POST] rentbooksetrent.php (bookid,nume,prenume,clasa) </b> -> create a new rent table entry, with default today date and 0 (=flase) returned

			<b>	3.[POST] rentbookSetFreeBookMinusOne.php (bookid) </b>-> free=free-1

<b>	-return a book:  1.[POST]  rentbookSetReturned.php (bookid,nume,clasa) </b>-> set for the matching cases backDate= date.today and returned=1(true)


<b>Show Operations</b>

	<b>	-Show all rents: showallrents.php</b>


	<b>	-Show all unreturned rents:  showallunreturned.php</b>




<b>Others(daemons)</b>

		<b>-daemonGetSmallestFreeBook.php </b> -> usefull to check if free is lower than 0</b>




<b>All database connection errors/ex's are stored in log.txt</<b>


<p>403 - parametru null
<p>402 -  0 rezultate
<p>406 - record sent to db
<p>407 - record have been not sent
<p>408 - nu mai sunt carti libere
<p>666 - cannot connect to db
<p><b>Haha</b>
