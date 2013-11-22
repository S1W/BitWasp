<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Shipping Costs Model
 *
 * Model to contain database queries for dealing with shipping costs.
 * 
 * @package		BitWasp
 * @subpackage	Models
 * @category	Items
 * @author		BitWasp
 * 
 */
class Shipping_costs_model extends CI_Model {

	/**
	 * Constructor
	 *
	 * @access	public
	 */		
	public function __construct() {
		parent::__construct();
	}
	
	public function for_item($item_id) {}
	
	/**
	 * List by Location
	 * 
	 * Used by the items controller to find items available in a particular
	 * location.
	 * 
	 * @param	int	$location_id
	 * @return	array/FALSE
	 */
	public function list_by_location($location_id) {
		$this->db->where('destination_id', $location_id);
		$query = $this->db->get('shipping_costs');
		return ($query->num_rows() > 0) ? $query->result_array() : FALSE ;
	}
};

/* End of File: Shipping_costs_model.php */
