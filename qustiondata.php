<?php
	require_once('common.php');
	
	$qid = $_GET['qid'];
	$answer = $_GET['answer'];
	
	if($qid == -1 || !is_numeric($qid) || !((0<=$qid) && ($qid<count($question)))){
		echo 'エラー： $qid invalid';
		exit(1);
	}
	
	if($question[$qid][1] == $answer){
		echo "正解";
	}
	else{
		echo "残念！";
	}
?>
