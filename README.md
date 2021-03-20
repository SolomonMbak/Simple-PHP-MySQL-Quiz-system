# Simple-PHP-MySQL-Quiz-system v1.0

It is a quiz system, and this version is not the final, it is just the user section. The admin panel will come in at a letter time. I registers new users, displays the simple profile, and allows a user write a quiz and get scores at the end of the entire process. You can get the number of attempted questions, un-attempted questions and the questions you got wrong. The overall result is also shown in percentages.

PLEASE DO THESE FIRST

Be sure you have a program like XAMPP installed on your pc.
create a database, name it what ever you like (mine is quiz).
create a table and call it signup.
Add [id (int primary key), name(varchar), phone(int), country(varchar), email)(varchar)]

Create another table call it questions
create tables [id (int primary key), question(varchar), option1(varchar), option2(varchar), option3(varchar), option4(varchar), answer(int), cat_id(int)].
Load up the questions table with questions and options, then the correct answer

Please note: The answers are picked in an array form, so you have to place the correct answer in an array manner too.
For example: The first option will be = 0, option 2 = 1, option 3 = 2 and option four = 3.
If the correct answer is option 3, you have to type in 2 at the answer field, if it is option 1, you have to type in 0 in the answer section, and so on.

Thats it.
