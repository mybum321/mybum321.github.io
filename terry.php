<?php 

class JSON {

    public function __construct($json = false) {
        if ($json) $this->set(json_decode($json, true));
    }

    public function set($data) {
        foreach ($data AS $key => $value) {
            if (is_array($value)) {
                $sub = new JSON;
                $sub->set($value);
                $value = $sub;
            }
            $this->{$key} = $value;
        }
    }

	public function toJSON() {
		foreach ($this AS $key => $value) {
			echo $key;
			echo $value;
			
			if (is_array($value)) {
			}
		}
	}
}


class Response {
	public $code;
	public $mesg;
	public $data;

	public function __construct($code, $mesg, $data) {
		$this->code = $code;
		$this->mesg = $mesg;
		$this->data = $data;
    }
}

class User {
	public $name;
	public $tel;
	public $addr;

	public function __construct($name, $tel, $addr) {
		$this->name = $name;
		$this->tel = $tel;
		$this->addr = $addr;
    }
}

//
//REQUEST JSON
//
$request = new JSON($_REQUEST['q']);
echo "mobile_id: ".$request->mobile_id;
echo "<p>";

//
//DATA SETTING
//
$user1 = new User("kevin", "112346", "abcd");

$user2 = new User;
$user2->name = "mikyoung";
$user2->tel = "987654";


//
// RESPONSE JSON
//
$response = new Response("OK", "success", $user1);
echo json_encode($response);
echo "<p>";

$response = new Response("E1", "error", $user2);
echo json_encode($response);
echo "<p>";
?>