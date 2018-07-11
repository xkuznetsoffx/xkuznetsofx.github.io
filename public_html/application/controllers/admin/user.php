<?php
class user extends Admin_Controller {
	
	function __Construct() {
        parent::__construct();
    }
	
	public function login() {
		$dashboard = 'admin/';
		
		$this->user_model->loggedin() == FALSE || redirect($dashboard);
		if ( $this->isBlocked() ) {
			$ip_address = $this->input->ip_address(); 
			$blockTime = 300;
			$record = $this->db->where('ip_address', $ip_address)->get('login_attempts')->row();
			$time = date('i:s ���.',$blockTime - (time() - $record->lastLogin));
            echo '��������� ���-�� �������! ���������� ��� ��� ����� '.$time;
		}
		else
		{
			$rules = $this->user_model->rules;
			$this->form_validation->set_rules($rules);
			if($this->form_validation->run() == TRUE) {
				if($this->user_model->login() == TRUE) {
					$this->loginAttempt(TRUE);
					redirect($dashboard);
				}
				else {
					$this->loginAttempt();
					redirect('admin/user/login','refresh');
				}
			}
			$this->data['subview'] = 'admin/user/login';
			$this->load->view('admin/layout_modal',$this->data);
		}
	}
	public function isBlocked()
	{
		$ip_address = $this->input->ip_address(); 
		// Time that a user gets blocked.
		//
		$blockTime = 300;

		// Check if we have the user record.
		//
		$record = $this->db->where('ip_address', $ip_address)->get('login_attempts')->row();
		if ( ! empty( $record ) ):
				// Check this user login attempts.
				//
				if ( $record->attempts >= 5 ):
						// Check if the user block has expired.
						//
						if( ( time() - $record->lastLogin ) > $blockTime ):
								// User is not blocked anymore.
								//
								$this->db->where('ip_address', $ip_address)->update('login_attempts', array( 'attempts' => 0, 'lastLogin' => time() ) );
								return false;
						else:
								// The user is blocked.
								//
								return true;
						endif;
				endif;
		endif;

		// The user is not blocked.
		//
		return false;
	}


	private function loginAttempt( $passed = false )
	{
		// Get this user IP Address.
		//
		$ip_address = $this->input->ip_address(); 

		// If the user logged in with success.
		//
		if ( $passed ):
				// Clear this user loginAttempts.
				//
				$this->db->where('ip_address', $ip_address)->update('login_attempts', array( 'attempts' => 0, 'lastLogin' => time() ) );

		// This is a failed login attempt.
		//
		else:
				// Check if we have the user record.
				//
				$record = $this->db->where('ip_address', $ip_address)->get('login_attempts')->row();
				if ( empty( $record ) ):
						// Create the user record.
						//
						$this->db->insert('login_attempts', array( 'ip_address' => $ip_address, 'attempts' => 1, 'lastLogin' => time() ) );

				// We do, check if the user needs to be blocked.
				//
				else:
						// The user exceeded the login attempts.
						//
						if ( $record->attempts < 5 ):
								// Update the user record.
								//
								$this->db->where('ip_address', $ip_address)->update('login_attempts', array( 'attempts' => ( $record->attempts + 1), 'lastLogin' => time() ) );
						endif;
				endif;
		endif;

		// We are done here.
		//
		return true;
	}
	public function logout() {
		$this->user_model->logout();
		redirect('admin/user/login');
	}
}
?>