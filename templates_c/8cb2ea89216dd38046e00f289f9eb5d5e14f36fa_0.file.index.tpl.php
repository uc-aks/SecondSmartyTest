<?php
/* Smarty version 4.3.1, created on 2023-05-23 10:04:11
  from 'E:\Xampp\htdocs\SmartyTest2\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646c737b203f38_46723224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cb2ea89216dd38046e00f289f9eb5d5e14f36fa' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\SmartyTest2\\index.tpl',
      1 => 1684829044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646c737b203f38_46723224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\SmartyTest2\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'E:\\Xampp\\htdocs\\SmartyTest2\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'E:\\Xampp\\htdocs\\SmartyTest2\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'E:\\Xampp\\htdocs\\SmartyTest2\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),4=>array('file'=>'E:\\Xampp\\htdocs\\SmartyTest2\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),5=>array('file'=>'E:\\Xampp\\htdocs\\SmartyTest2\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
Answer no.1. Print the current date and time in the given format<br>
<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
<br><br>
Answer no.2. Write a program to perform the following operations on the given paragraph using Smarty.<br>
a. First Step - <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['str1']->value,'effective','efficient');?>
<br><br>

Answer no.3. Write a program to create the following controls using Smarty.<br>
a. html_options - <?php echo smarty_function_html_options(array('name'=>'htmlOption','options'=>$_smarty_tpl->tpl_vars['Options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value),$_smarty_tpl);?>
<br>
b. html_radios - <?php echo smarty_function_html_radios(array('name'=>'htmlRadio','options'=>$_smarty_tpl->tpl_vars['Options']->value,'selected'=>$_smarty_tpl->tpl_vars['selected']->value),$_smarty_tpl);?>
<br><br>

Answer no.4. Print out all the values of an array in reverse order using.<br>
<?php
$__section_section_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['myArr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_section_0_start = $__section_section_0_loop - 1;
$__section_section_0_total = min(($__section_section_0_start+ 1), $__section_section_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_section'] = new Smarty_Variable(array());
if ($__section_section_0_total !== 0) {
for ($__section_section_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_section']->value['index'] = $__section_section_0_start; $__section_section_0_iteration <= $__section_section_0_total; $__section_section_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_section']->value['index'] -= 1){
echo $_smarty_tpl->tpl_vars['myArr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_section']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_section']->value['index'] : null)];?>

<?php
}
}
?>
<br><br>

Answer no.6. Write a program to take the given PHP array and print it in the form of a table using the custom functions of Smarty.<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newArr']->value, 'newarr');
$_smarty_tpl->tpl_vars['newarr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['newarr']->value) {
$_smarty_tpl->tpl_vars['newarr']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newarr']->value, 'arr');
$_smarty_tpl->tpl_vars['arr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->do_else = false;
?>
<tr><td><ul><li><?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
</li></ul></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br><br>

Answer no.9. Give an example of cat in Smarty.<br>
<?php echo ($_smarty_tpl->tpl_vars['myStr']->value).(' Website');?>

<br><br>

Answer no.10. Write a program to show 5 examples of truncate. <br>
1. <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str1']->value);?>
  // By default is 80<br>
2. <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str1']->value,40);?>
<br>
3. <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str1']->value,40,' ');?>
<br>
4. <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str1']->value,40,' gkgk  ');?>
    // pass additional text<br>
5. <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str1']->value,67,'<hr>');?>
 // and you can pass any html tags as well. <br><br><br>

Answer no.7. Building World's Best Learning Company<br>
Count of Words: <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['uc_com']->value, $tmp);?>
<br>
Count of Paragraphs: <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['uc_com']->value, $tmp)+1);?>
<br>
Count of Characters: <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['uc_com']->value, $tmp);?>
<br>
Count of Sentences: <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['uc_com']->value, $tmp);?>
<br><br>
 uCertify Learn<br>
Count of Words: <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['uc_learn']->value, $tmp);?>
<br>
Count of Paragraphs: <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['uc_learn']->value, $tmp)+1);?>
<br>
Count of Characters: <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['uc_learn']->value, $tmp);?>
<br>
Count of Sentences: <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['uc_learn']->value, $tmp);?>
<br><br>
uCertify Titles<br>
Count of Words: <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['uc_title']->value, $tmp);?>
<br>
Count of Paragraphs: <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['uc_title']->value, $tmp)+1);?>
<br>
Count of Characters: <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['uc_title']->value, $tmp);?>
<br>
Count of Sentences: <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['uc_title']->value, $tmp);?>
<br><br>
Hands-On Learnin At uCertify<br>
Count of Words: <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['uc_hand']->value, $tmp);?>
<br>
Count of Paragraphs: <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['uc_hand']->value, $tmp)+1);?>
<br>
Count of Characters: <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['uc_hand']->value, $tmp);?>
<br>
Count of Sentences: <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['uc_hand']->value, $tmp);?>
<br><br><br>

Answer no.2. <?php $_smarty_tpl->_assignInScope('x', 4);
$_smarty_tpl->_assignInScope('y', 5);
echo smarty_function_math(array('equation'=>"x*y",'x'=>$_smarty_tpl->tpl_vars['x']->value,'y'=>$_smarty_tpl->tpl_vars['y']->value),$_smarty_tpl);?>



<?php }
}
