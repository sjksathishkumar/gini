<?php
namespace backend\components;
 
use Yii;
use yii\base\Component;

/**
 * Class : CommonFunctions
 * This is the model class for Commonly used 
 * functions all over the Igizmo.
 */

class CommonFunctions extends Component
{

	/**
	 *  Set Status Change icon
	 */
	public function statusFurmate($status)
	{
	    $returnVal = "";
	    if ($status == 1)
	    {
	        $returnVal = "<span class='label label-satgreen'>Active</span>";
	    }
	    else if ($status == 0)
	    {
	        $returnVal = "<span class='label label label-lightred'>Inactive</span>";
	    }
	    else
	    {

	    }
	    return $returnVal;
	}

	/**
	 *  Set Status Change icon
	 */
	public function statusName($status)
	{
	    $returnVal = "";
	    if ($status == 1)
	    {
	        $returnVal = "Active";
	    }
	    else if ($status == 0)
	    {
	        $returnVal = "Inactive";
	    }
	    else
	    {

	    }
	    return $returnVal;
	}


}