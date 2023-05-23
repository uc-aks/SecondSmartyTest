Answer no.1. Print the current date and time in the given format<br>
{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}<br><br>
Answer no.2. Write a program to perform the following operations on the given paragraph using Smarty.<br>
a. First Step - {$str1|replace:'effective':'efficient'}<br><br>

Answer no.3. Write a program to create the following controls using Smarty.<br>
a. html_options - {html_options name=htmlOption options=$Options selected=$selected}<br>
b. html_radios - {html_radios name=htmlRadio options=$Options selected=$selected}<br><br>

Answer no.4. Print out all the values of an array in reverse order using.<br>
{section name=section loop=$myArr step= -1}
{$myArr[section]}
{/section}
<br><br>

Answer no.6. Write a program to take the given PHP array and print it in the form of a table using the custom functions of Smarty.<br>
{foreach $newArr as $newarr}
{foreach $newarr as $arr}
<tr><td><ul><li>{$arr}</li></ul></td></tr>
{/foreach}
{/foreach}
<br><br>

Answer no.9. Give an example of cat in Smarty.<br>
{$myStr|cat:' Website'}
<br><br>

Answer no.10. Write a program to show 5 examples of truncate. <br>
1. {$str1|truncate}  // By default is 80<br>
2. {$str1|truncate:40}<br>
3. {$str1|truncate:40:' '}<br>
4. {$str1|truncate:40:' gkgk  '}    // pass additional text<br>
5. {$str1|truncate:67: '<hr>'} // and you can pass any html tags as well. <br><br><br>

Answer no.7. Building World's Best Learning Company<br>
Count of Words: {$uc_com|count_words}<br>
Count of Paragraphs: {$uc_com|count_paragraphs}<br>
Count of Characters: {$uc_com|count_characters}<br>
Count of Sentences: {$uc_com|count_sentences}<br><br>
 uCertify Learn<br>
Count of Words: {$uc_learn|count_words}<br>
Count of Paragraphs: {$uc_learn|count_paragraphs}<br>
Count of Characters: {$uc_learn|count_characters}<br>
Count of Sentences: {$uc_learn|count_sentences}<br><br>
uCertify Titles<br>
Count of Words: {$uc_title|count_words}<br>
Count of Paragraphs: {$uc_title|count_paragraphs}<br>
Count of Characters: {$uc_title|count_characters}<br>
Count of Sentences: {$uc_title|count_sentences}<br><br>
Hands-On Learnin At uCertify<br>
Count of Words: {$uc_hand|count_words}<br>
Count of Paragraphs: {$uc_hand|count_paragraphs}<br>
Count of Characters: {$uc_hand|count_characters}<br>
Count of Sentences: {$uc_hand|count_sentences}<br><br><br>

Answer no.2. {$x = 4}{$y = 5}
{math equation="x*y" x=$x y=$y}


