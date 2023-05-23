Answer no. 8: <form action="" method="post">
    <label for="Number">Enter number here</label>
    <input type="number" name="number" id=""><input type="submit" value="Submit" name="submit">
</form>

<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
if(isset($_REQUEST['submit'])){
    $number = $_REQUEST['number'];
    if($number % 2 === 0){
        $smarty->display('file1.tpl');
    }else{
        $smarty->display('file2.tpl');
    }
}

$str1 = 'uCertify, headquartered in Pleasanton, CA, was founded on the belief that we "learn by doing" and interactivity is the key to effective learning, using virtual environments where 
students learn by doing. The virtual environment encourages safe exploration and experimentation resulting in better learning. 
uCertify platform is equally effective for self-paced, instructor-led or blended learning.';
$smarty->assign('str1',$str1);

$smarty->assign('Options',array(1=>'First',2=>'Second',3=>'Third'));
$smarty->assign('selected',1);

$smarty->assign('myArr',array(1,2,3,4,5));

$email_ids = array(
    array(
        "trainer_name" => "Megha Sinha",
        "email" => "megha@ucertify.com",
    ),
    array(
        "trainer_name" => "Vikas Shukla",
        "email" => "vikas.shukla@ucertify.com",
    ),
    array(
        "trainer_name" => "Tanish Yadav",
        "email" => "tanish.yadav@ucertify.com",
    ),
    array(
        "trainer_name" => "Prashant Gupta",
        "email" => "pete@ucertify.com",
    )
);

$smarty->assign('newArr',$email_ids);

$smarty->assign('myStr',"This is My first");

$uc_com = "Building World's Best Learning Company
uCertify, headquartered in Pleasanton, CA, was founded on the belief that we 'learn by doing' and interactivity is the key to effective learning, 
using virtual environments where students learn by doing. The virtual environment encourages safe exploration and experimentation 
resulting in better learning. uCertify platform is equally effective for self-paced, instructor-led or blended learning.";

$uc_learn = "uCertify Learn
uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, 
and corporate training programs to diverse audiences with different proficiency levels. It offers cloud-based 
and device-enabled, teaching and learning management platforms for online, anywhere, anytime, competency-based learning. 
Courses delivered on uCertify LEARN include highly interactive lessons.";

$uc_title = "Titles With more than 400 titles and partnerships with major publishers, uCertify offers depth and breadth 
learning in its course offerings. uCertify provides this solution in a cloud base, hassle free hosted environment with powerful and scalable infrastructure and 24x7 support.
";

$uc_hand = "Hands-On Learnin At uCertify, we believe that assessments are the key to both engaging 
learners and effective, focused learning. Thus, we provide hands-on courses and labs. The courses come complete with 
Pre-Assessment, Exercises, Flashcards, Quizzes, and Post-Assessments. Hands-on labs are virtual and live environments 
where students learn by doing. Labs encourage exploration and experimentation in a risk-free environment resulting in 
better learning for students.
";
$smarty->assign('uc_com',$uc_com);
$smarty->assign('uc_learn',$uc_learn);
$smarty->assign('uc_title',$uc_title);
$smarty->assign('uc_hand',$uc_hand);
$smarty->display('index.tpl');
?>
