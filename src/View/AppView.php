<?php
namespace App\View;

use Cake\View\View;
use Cake\Log\Log;

/**
 * App View class
 */
class AppView extends View
{

	/**
	 * Initialization hook method.
	 *
	 * For e.g. use this method to load a helper for all views:
	 * `$this->loadHelper('Html');`
	 *
	 * @return void
	 */
	public function initialize()
	{
		Log::write('info', 'AppView::initialize', 'exec');
	}
}
