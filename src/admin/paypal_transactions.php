<?php
	/**
	 * Administrative Functionality
	 * Last Changed: $LastChangedDate: 2017-07-19 15:21:28 -0400 (Wed, 19 Jul 2017) $
	 * @author detain
	 * @copyright 2017
	 * @package MyAdmin
	 * @category Admin
	 */

	/**
	 * paypal_transactions()
	 *
	 */
	function paypal_transactions() {
		page_title('PayPal Transactions');
		function_requirements('has_acl');
		if ($GLOBALS['tf']->ima != 'admin' || !has_acl('client_billing')) {
			dialog('Not admin', 'Not Admin or you lack the permissions to view this page.');
			return false;
		}
		add_output(render_form('paypal_transactions', ['module' => $GLOBALS['tf']->variables->request['module'], 'acl' => 'client_billing']));
	}
