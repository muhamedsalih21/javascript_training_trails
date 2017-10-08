<?php
$arr = '{"Dr. R. A. Mashelkar ": "Director General & Secretary, CSIR,Govt. of India,DST.",
	"Dr. R. Natarajan": "Chairman, AICTE, New Delhi.",
	"Dr. M. Anandakrishnan": " Chairman, All India Board of Undergraduate Education in Engineering & Technology, AICTE, New Delhi.",
	"Dr. A. Sivathanu Pillai, ": "Distinguished Scientist, DRDO, New Delhi. Mrs. Sudha Murthy, Chairperson - Infosys Foundation.",
	"Dr. M. S. Vijayaraghavan": "C.E.O., SITAR, Bangalore."}';

//unknown key json traversal.
foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value}";
echo "<br/>";
    //print_r($arr);
}
//var_dump(json_decode($json, true));

?>
