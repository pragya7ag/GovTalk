<?php
class Form_Model extends CI_Model {

	/* this function will record in database*/
    public function create($regarray)
	{
		$this->db->insert('user',$regarray);
	}
	public function checkuser($formarray){
	$this->db->where($formarray);
	$row = $this->db->get('user')->row_array();
  if($row!='')
  {
  return $row['name'];
  }
  return 1;
	}
public function retrieve()
{
$query = $this->db->get('user');
foreach ($query->result() as $row)
{
    echo $row->phone;
}
}
}
?>
