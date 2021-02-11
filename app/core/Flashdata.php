<?php 

/**
 * Flashdata to give information with $_SESSION
 */
class Flashdata {
	/**
	 * Set the flash data
	 * @param $message = "everything what you want to say"
	 * @param $type = The class to set color in Bootstrap Alert
	 */
	public static function setFlash($message, $type = 'success')
	{
		$_SESSION['flash'] = [
			'message' => $message,
			'type' => $type,
		];
	}

	/**
	 * Call this method when you will show the message was you set
	 */
	public static function flash()
	{
		if( isset($_SESSION['flash']) ) {	
			echo '<div class="alert alert-' . $_SESSION["flash"]["type"] . ' alert-dismissible fade show" role="alert">
						' . $_SESSION["flash"]["message"] . '
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
			unset($_SESSION['flash']);
		}
	}
}