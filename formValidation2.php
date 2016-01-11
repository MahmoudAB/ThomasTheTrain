<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    return;
}
$warning = "";
if ($_POST['fname'] === "") {
    $warning .= 'Empty field for "First name"\n';
}
if ($_POST['lname'] === "") {
    $warning .= 'Empty field for "Last name"\n';
}
if ($_POST['phone'] === "") {
    $warning .= 'Empty field for "Phone number"\n';
}
if ($_POST['email'] === "") {
    $warning .= 'Empty field for "Email address"\n';
}
if ($_POST['city'] === "") {
    $warning .= 'Empty field for "City"\n';
}
if ($_POST['province'] === "") {
    $warning .= 'Empty field for "Province"\n';
}
if ($_POST['postCode'] === "") {
    $warning .= 'Empty field for "Poastal Code"\n';
}
if ($_POST['passwrd1'] === "") {
    $warning .= 'Empty field for "Choose password"\n';
}
if ($_POST['passwrd2'] === "") {
    $warning .= 'Empty field for "Confirm password"\n';
}
if ($_POST['passwrd1'] !== $_POST['passwrd2']) {
    $warning .= 'Both passwords do not match\n';
}

if ($_POST['Month'] === $_POST['err1']) {
    $warning .= 'Month not chosen\n';
}

if ($_POST['Day'] === $_POST['err2']) {
    $warning .= 'Day not chosen\n';
}
if ($_POST['Years'] === $_POST['err33']) {
    $warning .= 'Year not chosen\n';
}
if ($_POST['zone'] === $_POST['err4']) {
    $warning .= 'Zone not chosen\n';
}
if ($_POST['carpoolStation'] === "") {
    $warning .= 'Empty field for "Carpool Station"\n';
}
if ($_POST['carpoolTime'] === "") {
    $warning .= 'Empty field for "Carpool Time"\n';
}
if ($warning !== "") {
    return;
} else {
    $file = 'db/members.txt';
    $users = unserialize(file_get_contents($file));
    if (!is_array($users))
        $users = [];

        $friends=[];//to add friends


    $users[$_POST['email']] = array(
        'passwrd' => $_POST['passwrd1'],
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'phone' => $_POST['phone'],
        'phone2' => $_POST['phone'],
        'city' => $_POST['city'],
        'province' => $_POST['province'],
        'postCode' => $_POST['postCode'],
        'year' => $_POST['Years'],
        'zone' => $_POST['zone'],
        'carpoolStation' => $_POST['carpoolStation'],
                'friend' => $friends,
                'carpoolTime' => $_POST['carpoolTime'],



        );
    file_put_contents($file, serialize($users));
    //managing carpooling
    $name=$_POST['fname'];
    $location=$_POST['carpoolStation'];
    $time=$_POST['carpoolTime'];
    $phone=$_POST['phone'];

   $my_file = 'carpooling.txt';
        $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
            $data=$time.' '.$name.'['.$phone.']'. "\n";
        fwrite($handle, $data);
        fclose($handle);

	header('Location: login.php');
    die();
}
?>
