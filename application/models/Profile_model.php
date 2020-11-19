<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*	Profile model
*	
*	
*/
class Profile_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();

		$this->user_table = 'users';
	}
	
	/**
	*	Get User Photo
	*	from user table
	*	
	*	@param 		string 		$id
	*	@return 	array 		$datas
	*	
	*/
	public function get_user_photo($id)
	{
		$this->db->where('id', $id);
		$datas = $this->db->get($this->user_table);
		return $datas;
	}

	/**
	*	Update User Photo
	*	based on username
	*	
	*	@param 		string 		$username
	*	@param 		array 		$datas
	*	@return 	void
	*	
	*/
	public function update_user_photo($id, $datas)
	{
		$this->db->where('id', $id);
		if($this->db->update($this->user_table, $datas)) {
			return TRUE;
		}
		return FALSE;
	}

}


// End of profile model