<?php
/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Application_Link_SearchEngine_Editor
 * @copyright  Copyright (c) 2011-2016 PageCarton (http://www.pagecarton.com)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Editor.php 4.17.2012 7.55am ayoola $
 */

/**
 * @see Application_Link_SearchEngine_Abstract
 */
 
require_once 'Application/Link/Abstract.php';


/**
 * @category   PageCarton
 * @package    Application_Link_SearchEngine_Editor
 * @copyright  Copyright (c) 2011-2016 PageCarton (http://www.pagecarton.com)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

class Application_Link_SearchEngine_Editor extends Application_Link_SearchEngine_Abstract
{
	
    /**
     * The method does the whole Class Process
     * 
     */
	protected function init()
    {
		try
		{ 
			if( ! $data = self::getIdentifierData() ){ return false; }
			$this->createForm( 'Edit', 'Edit ' . $data['searchengine_url'], $data );
			$this->setViewContent( $this->getForm()->view(), true );
			if( $this->updateDb() ){ $this->setViewContent( 'Search engine edited successfully', true ); }
		}
		catch( Application_Link_SearchEngine_Exception $e ){ return false; }
    } 
	// END OF CLASS
}
