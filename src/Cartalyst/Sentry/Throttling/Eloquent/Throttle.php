<?php namespace Cartalyst\Sentry\Throttling\Eloquent;
/**
 * Part of the Sentry Package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Cartalyst\Sentry\Throttling\ThrottleInterface;
use Cartalyst\Sentry\Throttling\UserSuspendedException;
use Cartalyst\Sentry\Throttling\UserBannedException;
use Illuminate\Database\Eloquent\Model;

class Throttle extends Model implements ThrottleInterface {

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'throttle';

	/**
	 * Attempt limit.
	 *
	 * @var int
	 */
	protected $limit = 5;

	/**
	 * Suspensions time in minutes.
	 *
	 * @var int
	 */
	protected $time = 15;

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Throttling status.
	 *
	 * @var bool
	 */
	protected $enabled = true;

	/**
	 * Returns the associated user with the
	 * throttler.
	 *
	 * @return Cartalyst\Sentry\Users\UserInterface
	 */
	public function getUser()
	{

	}

	/**
	 * Set attempt limit.
	 *
	 * @param  int  $limit
	 */
	public function setAttemptLimit($limit)
	{

	}

	/**
	 * Get attempt limit.
	 *
	 * @return  int
	 */
	public function getAttemptLimit()
	{

	}

	/**
	 * Set suspensin time.
	 *
	 * @param  int  $minutes
	 */
	public function setSuspensionTime($minutes)
	{

	}

	/**
	 * Get suspension time.
	 *
	 * @param  int
	 */
	public function getSuspensionTime()
	{

	}

	/**
	 * Get the current amount of attempts
	 *
	 * @return int
	 */
	public function getAttempts()
	{

	}

	/**
	 * Add a new login attempt.
	 *
	 * @return void
	 */
	public function addAttempt($login)
	{

	}

	/**
	 * Clear all login attempts
	 *
	 * @return void
	 */
	public function clearAttempts()
	{

	}

	/**
	 * Suspend the user associated with
	 * the throttle
	 *
	 * @return void
	 */
	public function suspend()
	{

	}

	/**
	 * Unsuspend the user.
	 *
	 * @return void
	 */
	public function unsuspend()
	{

	}

	/**
	 * Check if the user is suspended.
	 *
	 * @return bool
	 */
	public function isSuspended()
	{

	}

	/**
	 * Ban the user.
	 *
	 * @return bool
	 */
	public function ban()
	{

	}

	/**
	 * Unban the user.
	 *
	 * @return bool
	 */
	public function unban()
	{

	}

	/**
	 * Check if user is banned
	 *
	 * @return bool
	 */
	public function isBanned()
	{

	}

	/**
	 * Check user throttle status.
	 *
	 * @param  string  $Login
	 * @return bool
	 * @throws Cartalyst\Sentry\Throttling\UserBannedException
	 * @throws Cartalyst\Sentry\Throttling\UserSuspendedException
	 */
	public function check($login)
	{

	}

	/**
	 * Enable throttling.
	 *
	 * @return void
	 */
	public function enable()
	{

	}

	/**
	 * Disable throttling.
	 *
	 * @return void
	 */
	public function disable()
	{

	}

	/**
	 * Check if throttling is enabled.
	 *
	 * @return bool
	 */
	public function isEnabled()
	{

	}

}