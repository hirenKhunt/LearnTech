    <?php

    // include('connect.php');
    $c=mysqli_connect("localhost","root","","learntechdb");

    // if($c){
    //     echo "Connected";
    // } 
    // else{
    //     echo "Not Connected";
    // }


    if(isset($_GET['submit']))
    {
        $uid1=$_GET['uid'];
        $pwd1=$_GET['pwd'];
        $pwd22=$_GET['pwd2'];
        $name1=$_GET['name'];
        $sname1=$_GET['sname'];
        $gender1=$_GET['gender'];
        $dob1=$_GET['dob'];
        // $hob1=$_GET['hobby'];
        $email1=$_GET['email'];
        $cont1=$_GET['contactno'];
        $add1=$_GET['address'];
        $ct1=$_GET['city'];
        $zp1=$_GET['zip'];


    //    $q = INSERT INTO `regist` (`Username`, `Password`, `Name`, `Surname`, `Gender`, `dob`, `Email`, `Contact`, `Address`, `City`, `Zip code`) 
    //     VALUES ('vijay123', '1234', 'jay', 'dave', 'male', '10/12/2001', 'jay@gmail.com', '1234567890', 'ahmedabad', 'ahmedabad', '380007');

    // $q = "INSERT INTO `regist` (`Username`, `Password`, `Name`, `Surname`, `Gender`, `dob`, `Email`, `Contact`, `Address`, `City`, `Zip code`) 
    // VALUES ('jayll123', '1234', 'jay', 'dave', 'male', '10/12/2001', 'jay@gmail.com', '1234567890', 'ahmedabad', 'ahmedabad', '380007')";

    $q = "INSERT INTO `regist` (`Username`, `Password`, `Name`, `Surname`, `Gender`, `dob`, `Email`, `Contact`, `Address`, `City`, `Zip code`) 
    VALUES ('$uid1', '$pwd1', '$name1', '$sname1', '$gender1', '$dob1', '$email1', '$cont1', '$add1', '$ct1', '$zp1')";


        // $q="INSERT INTO regist(Username, Password, Name, Surname, Gender, dob, Email, Contact, Address, City, Zip code)
        //  VALUES('$uid1', '$pwd1', '$name1', '$sname1', '$gender1', '$dob1', '$email1', '$cont1', '$add1', '$ct1', '$zp1')";

        //	$q="insert into regist VALUES('$sname', '$name', '$fname', '$city', '$state', '$zip', '$bdate')";
            $x=mysqli_query($c,$q);
        // header('Location:fomr.php');

        if($x) {
            echo "success";
        }
        else {
            echo "not";
        }
        

    //     echo "<br>Your Username is:- ".$uid1;
    //     echo "<br>Your Password is:- ".$pwd1;
    //     echo "<br>Your Re-Password is:- ".$pwd22;
    //     echo "<br>Your name is:- ".$name1;
    //     echo "<br>Your Surname is:- ".$sname1;
    //     echo "<br>Your gender is:- ".$gender1;
    //     echo "<br>Your Date of birth is: ".$dob1;
    //     // echo "<br>Your Hobby is:- ".$hob1;
    //     echo "<br>Your E-Mail id is:- ".$email1;
    //     echo "<br>Your Contact no is:- ".$cont1;
    //     echo "<br>Your address is:- ".$add1;
    //     echo "<br>Your city is:- ".$ct1;
    //     echo "<br>Your zipcode is:- ".$zp1;
        
    }

    ?>
