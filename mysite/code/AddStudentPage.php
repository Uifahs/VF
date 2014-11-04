<?php

class AddStudentPage extends Page{
	private static $db = array(
		);

	private static $has_one = array(
		);
}

class AddStudentPage_Controller extends Page_Controller{
	private static $allowed_actions = array('Form');


	public function Form() { 
        $fields = new FieldList( 
            new TextField('Name'),
            new TextField('Permanent Address'),
            new TextField('Current Address'),
            new TextField('NID'),
            new TextField('Passport No'),
            new TextField('DOB'),
            new TextField('Email'),
            new TextField('Contect No')
            ); 
        $actions = new FieldList( 
            new FormAction('submit', 'Submit') 
        ); 

        $validator = new RequiredFields('Name', 'NID', 'Passport No', 'Email');
        return new Form($this, '', $fields, $actions, $validator); 
    }



	public function init(){
		parent::init();
	}

}