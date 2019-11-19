<?php 
include 'db_con.php';

// - count all users; we don't care about their gender
$count_all = "
	select 
		count(*) as total_count
	from
		users
		where created >= '2019-09-01 00:00:00'
";
$query_all = mysqli_query($CONNECTION, $count_all);
$result_count_all = mysqli_fetch_assoc($query_all);
$num_count_all = $result_count_all["total_count"];

// - string for counting male users
$count_male = "
	select 
		count(*) as male_count
	from
		users
	where
		gender = 1
		and created >= '2019-09-01 00:00:00'
";
$query_male = mysqli_query($CONNECTION, $count_male);
$result_count_male = mysqli_fetch_assoc($query_male);
$num_count_male = $result_count_male["male_count"];

// - string for counting female users
$count_female = "
	select 
		count(*) as female_count
	from
		users
	where
		gender = 2
		and created >= '2019-09-01 00:00:00'
";
$query_female = mysqli_query($CONNECTION, $count_female);
$result_count_female = mysqli_fetch_assoc($query_female);
$num_count_female = $result_count_female["female_count"];

// - string for counting other genders
$count_others = "
	select 
		count(*) as other_count
	from
		users
	where
		gender != 1
		and gender != 2
		and created >= '2019-09-01 00:00:00'
";
$query_other = mysqli_query($CONNECTION, $count_others);
$result_count_other = mysqli_fetch_assoc($query_other);
$num_count_other = $result_count_other["other_count"];


echo "TOTAL users : " . $num_count_all . " - " . (($num_count_all / $num_count_all) * 100);

echo "<br/>";
echo "TOTAL male : " . $num_count_male . " - " . (($num_count_male / $num_count_all) * 100);

echo "<br/>";
echo "TOTAL female : " . $num_count_female . " - " . (($num_count_female / $num_count_all) * 100);

echo "<br/>";
echo "TOTAL others : " . $num_count_other . " - " . (($num_count_other / $num_count_all) * 100);