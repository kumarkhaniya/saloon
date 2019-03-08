<!--<?php
$con=mysqli_connect("localhost","root","","saloonapps") or die (mysqli_error());
$qry="DELETE FROM register WHERE id='$GET_['id']'";
$result=mysqli_query($con,$qry);
if($result)
{
	header('location:dashboard');
}
?>-->

<?php
    <a href="<?php echo base_url() . $student->student_id; ?>">
?>