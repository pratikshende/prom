<?php

// This is the model for the different service centers
class Service_center extends AppModel {
  	
  	public $primaryKey = '_id';
  	public $name = 'Service_center';
  	
  	// This variable decides which database to select
  	var $useDbConfig ='mongo';


  	var $mongoSchema = array(

  		'name' 									=> array('type' => 'string', 'default' => null),
  		'address1'								=> array('type' => 'string', 'default' => null),
  		'address2'								=> array('type' => 'string', 'default' => null),
  		'city'									=> array('type' => 'string', 'default' => null),
  		'state'									=> array('type' => 'string', 'default' => null),
  		'country'								=> array('type' => 'string', 'default' => null),
  		'pincode'								=> array('type' => 'string', 'default' => null),
  		'latitude'								=> array('type' => 'string', 'default' => null),
  		'longitude'								=> array('type' => 'string', 'default' => null),
  		'contact_number'						=> array('type' => 'string', 'default' => null),
  		'email_id'								=> array('type' => 'string', 'default' => null),
  		'is_authorized'							=> array('type' => 'string', 'default' => null),
  		'is_home_pickup'						=> array('type' => 'string', 'default' => null),
  		'is_workshop_repair'					=> array('type' => 'string', 'default' => null),
  		'is_onsite_repair'						=> array('type' => 'string', 'default' => null),
  		'is_cashless_available'					=> array('type' => 'string', 'default' => null), // TODO :: Rahul to answer this
  		'is_insurance_estimate'					=> array('type' => 'string', 'default' => null), // Whether the service center has tieups with insurance companies
  		'establishment_date'					=> array('type' => 'datetime','default' => null),
  		'pop_name'								=> array('type' => 'string', 'default' => null), // point of contact name for promechanicx
  		'pop_contact_number'					=> array('type' => 'string', 'default' => null),
  		'number_of_mechanics'					=> array('type' => 'string', 'default' => null),
  		'cars_services_per_day'					=> array('type' => 'string', 'default' => null),
  		'is_card_payment_available'				=> array('type' => 'string', 'default' => null),
  		'is_night_service_chargeable'			=> array('type' => 'string', 'default' => null),
  		'is_web_presence'						=> array('type' => 'string', 'default' => null),
  		'is_feedback_service_available'			=> array('type' => 'string', 'default' => null),
  		'is_premier_service_available'			=> array('type' => 'string', 'default' => null),
  		'is_amc_available'						=> array('type' => 'string', 'default' => null),
  		'is_commercial'							=> array('type' => 'string', 'default' => null),
  		'is_oncall_appointment_available'		=> array('type' => 'string', 'default' => null),
  		'created_at'							=> array('type' => 'datetime', 'default' => null),
  		'updated_at' 							=> array('type' => 'datetime', 'default' => null)

  	);


  	var $labels = array(

  		'name' 									=> 'Name',
  		'address1'								=> 'Building name',
  		'address2'								=> 'Street name',
  		'city'									=> 'City',
  		'state'									=> 'State',
  		'country'								=> 'Country',
  		'pincode'								=> 'Postal code',
  		'latitude'								=> 'Latitude',
  		'longitude'								=> 'Longitude',
  		'contact_number'						=> 'Contact Number',
  		'email_id'								=> 'Email id',
  		'is_authorized'							=> 'Is Service Center Authorized',
  		'is_home_pickup'						=> 'Is Home-pickup Available',
  		'is_workshop_repair'					=> 'Is Workshop Repair Available',
  		'is_onsite_repair'						=> 'Is Onsite Repair Available',
  		'is_cashless_available'					=> 'Is Cashless Payment Available', // TODO :: Rahul to answer this
  		'is_insurance_estimate'					=> 'Is Insurance Estimates Available', // Whether the service center has tieups with insurance companies
  		'establishment_date'					=> 'Establishment Date',
  		'poc_name'								=> 'Point of Contact Name', // point of contact name for promechanicx
  		'poc_contact_number'					=> 'POint of Contact Contact Number',
  		'number_of_mechanics'					=> 'Number of Mechanics',
  		'cars_services_per_day'					=> 'Number of Cars Serviced per Day',
  		'is_card_payment_available'				=> 'Is Cashless Payment Available',
  		'is_night_service_chargeable'			=> 'Is Night Service Available',
  		'is_web_presence'						=> 'Web Presence',
  		'is_feedback_service_available'			=> 'Is Feedback System Available',
  		'is_premier_service_available'			=> 'Is Premium Service Available',
  		'is_amc_available'						=> 'Is Annual Maintainance Services Available',
  		'is_commercial'							=> 'Are there any Commercials tie-ups',
  		'is_oncall_appointment_available'		=> 'Is On-Call Service Available',
  	);

	var $validate = array(
		'name'  								=> array(
				'rule1'							=> array(
					'rule'						=> 'notEmpty',
					'message'					=> 'Name cannot be empty',
					'required'					=> true,
				),
				'rule2'							=> array(
					'rule'						=> '^[a-zA-Z][a-zA-Z0-9_]*\.?[a-zA-Z0-9_\.]*$',
					'message'					=> 'Name can have only characters',
					'required'					=> true,
				),
		),

		'city'  								=> array(
				'rule1'							=> array(
					'rule'						=> 'notEmpty',
					'message'					=> 'City cannot be empty',
					'required'					=> true,
				),
				'rule2'							=> array(
					'rule'						=> '^[A-Z][-a-zA-Z]+$',
					'message'					=> 'City can have only alphabets',
					'required'					=> true,
				),
		),
		'state'  								=> array(
				'rule1'							=> array(
					'rule'						=> 'notEmpty',
					'message'					=> 'State cannot be empty',
					'required'					=> true,
				),
				'rule2'							=> array(
					'rule'						=> '^[A-Z][-a-zA-Z]+$',
					'message'					=> 'State can have only alphabets',
					'required'					=> true,
				),
		),
		'country'  								=> array(
				'rule1'							=> array(
					'rule'						=> 'notEmpty',
					'message'					=> 'Country cannot be empty',
					'required'					=> true,
				),
				'rule2'							=> array(
					'rule'						=> '^[A-Z][-a-zA-Z]+$',
					'message'					=> 'Country can have only alphabets',
					'required'					=> true,
				),
		),
		'pincode'  								=> array(
				'rule1'							=> array(
					'rule'						=> 'notEmpty',
					'message'					=> 'Pincode cannot be empty',
					'required'					=> true,
				),
				'rule2'							=> array(
					'rule'						=> '^([0-9]{6})?$',
					'message'					=> 'Pincode can have only six digits',
					'required'					=> true,
				),
		),
		'latitude'  							=> array(
				'rule1'							=> array(
					'rule'						=> '^[-+]?([1-8]?\d(\.\d+)?|90(\.0+)?),\s*[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d+)?)$',
					'message'					=> 'Latitude can have one +, one -, and floating values only',
					
				),
		),
		'longitude'  							=> array(
				'rule1'							=> array(
					'rule'						=> '^[-+]?([1-8]?\d(\.\d+)?|90(\.0+)?),\s*[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d+)?)$',
					'message'					=> 'Longitude can have one +, one -, and floating values only',
					
				),
		),



	);

}
?>
