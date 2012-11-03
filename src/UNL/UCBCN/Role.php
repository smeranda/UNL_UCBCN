<?php
namespace UNL\UCBCN;

use UNL\UCBCN\ActiveRecord\Record;
/**
 * Table Definition for role
 *
 * PHP version 5
 *
 * @category  Events
 * @package   UNL_UCBCN
 * @author    Brett Bieber <brett.bieber@gmail.com>
 * @copyright 2009 Regents of the University of Nebraska
 * @license   http://www1.unl.edu/wdn/wiki/Software_License BSD License
 * @link      http://code.google.com/p/unl-event-publisher/
 */

/**
 * ORM for a record within the database.
 *
 * @package   UNL_UCBCN
 * @author    Brett Bieber <brett.bieber@gmail.com>
 * @copyright 2009 Regents of the University of Nebraska
 * @license   http://www1.unl.edu/wdn/wiki/Software_License BSD License
 * @link      http://code.google.com/p/unl-event-publisher/
 */
class Role extends Record
{

    public $id;                              // int(10)  not_null primary_key unsigned auto_increment
    public $name;                            // string(255)  not_null
    public $standard;                        // int(1)

    public function getTable()
    {
        return 'role';
    }

    function table()
    {
        return array(
            'id'=>129,
            'name'=>130,
            'standard'=>17,
        );
    }

    function keys()
    {
        return array(
            'id',
        );
    }
    
    function sequenceKey()
    {
        return array('id',true);
    }
    
}
