# libraryDotPHP

Database connection setting: /bd/bd.php

Book Operations:
	-add a new book:[POST] addbook.php (bookid,title,author,total,free,details)

	-remove a book:[POST] removebook.php (bookid)

	-edit a book:[POST] editbook.php (bookid,title,author,total,free,details)

Search Operations:
	-search by bookid:[GET] findbookid.php (bookid)

	-search by author:[GET] findauthor.php (author)

	-search by title:[GET] findtitle.php (title)

Rents Operations:

	--rent a new book: 1. [GET] freebooksleft.php (bookid) -> Return INT of free left books (Used to verify if there is any book left available for rent)

				2. [POST] rentbooksetrent.php (bookid,nume,prenume,clasa) -> create a new rent table entry, with default today date and 0 (=flase) returned

				3.[POST] rentbookSetFreeBookMinusOne.php (bookid) -> free=free-1

	--return a book:  1.[POST]  rentbookSetReturned.php (bookid,nume,clasa) -> set for the matching cases backDate= date.today and returned=1(true)


Show Operations

		-Show all rents: showallrents.php


		-Show all unreturned rents:  showallunreturned.php




Others(daemons)

		-daemonGetSmallestFreeBook.php  -> usefull to check if free is lower than 0




All database connection errors/ex's are stored in log.txt


403 - parametru null
402 -  0 rezultate
406 - record sent to db
407 - record have been not sent
408 - nu mai sunt carti libere
666 - cannot connect to db
