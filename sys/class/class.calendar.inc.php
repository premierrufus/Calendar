<?php
/**
 * Builds and manipulates an events calendar
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT License, available
 * at http://www.opensource.org/licenses/mit-license.html
 *
 * @author     Jason Lengstorf <jason.lengstorf@ennuidesign.com>
 * @copyright  2009 Ennui Design
 * @license    http://www.opensource.org/licenses/mit-license.html
 */
class Calendar extends DB_Connect
{
	/**
	 * The date from which the calendar should be built
	 *
	 * Stored in YYYY-MM-DD HH:MM:SS format
	 *
	 * @var string the date to use for the calendar
	 */
	private $_useDate;

	/**
	 * The month for which the calendar is being built
	 *
	 * @var int the month being used
	 */
	private $_m;

	/**
	 * The year from which the month's start day is selected
	 *
	 * @var int the year being used
	 */
	private $_y;

	/**
	 * The number of days in the month being used
	 *
	 * @var int the number of days in the month
	 */
	private $_daysInMonth;

	/**
	 * The index of the day of the week the month starts on (0-6)
	 *
	 * @var int the day of the week the month starts on
	 */
	private $_startDay;

	/**
	 * Creates a database object and stores relevant data
	 *
	 * Upon instantiation, this class accepts a database object
	 * that, if not null, is stored in the object's private $db
	 * property. If null, a new PDO object is created and stored
	 * instead.
	 * 
	 * Additional info is gathered and stored in this method,
	 * including the month from which the calendar is to be built, 
	 * how many days are in said month, what day the month starts
	 * on, and what day it is currently.
	 * 
	 * @param object $dbo a database object
	 * @param string $useDate the date to use to build the calendar
	 * @return void
	 */
	public function __construct($dbo=NULL, $useDate=NULL)
	{
		/*
		 * Call the parent constructor to check for
		 * a database object
		 */
		parent::__construct($dbo);
	}

}

?>
