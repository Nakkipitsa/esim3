<?php
class Home_model extends CI_Model {


public function getNames() {
	$names=array(
		array("en"=>'Nakki',"sn"=>'Pitsa'),
		array("en"=>'Liiman',"sn"=>'Haistelija'),
		array("en"=>'Niko',"sn"=>'Nuuskaaja')
		);

	return $names;
}


}