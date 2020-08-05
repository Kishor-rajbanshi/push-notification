<?php

namespace Amu\WebNotification;

/**
 * initial creator
 */
class Push extends Base
{
	/**
     * notification type (onload | sync).
     *
     * @var string
     */
	protected $type;

	/**
     * notification duration.
     *
     * @var dateTime|null
     */
	protected $duration;

	/**
     * notification display timeout in seconds.
     *
     * @var integer
     */
	protected $timeOut;

	/**
     * ['number of view' => 'per time in seconds, '].
     *
     * @var array
     */
	protected $viewPerDuration;

	/**
     * permission to display.
     *
     * @var boolen
     */
	protected $displayPermission;

	function __construct()
	{
		$this->displayPermission = $this->getPermission();
	}

	public function create()
	{
		
	}

}