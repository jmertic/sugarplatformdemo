<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/



class SugarWidgetFieldMultiEnum extends SugarWidgetFieldEnum {
	public function queryFilternot_one_of(&$layout_def) {
		$arr = array ();
		foreach ($layout_def['input_name0'] as $value) {
			array_push($arr, "'".$GLOBALS['db']->quote($value)."'");
		}
	    $reporter = $this->layout_manager->getAttribute("reporter");

    	$col_name = $this->_get_column_select($layout_def) . " NOT LIKE " ;
    	$arr_count = count($arr);
    	$query = "";
    	foreach($arr as $key=>$val) {
    		$query .= $col_name;
			$value = preg_replace("/^'/", "'%", $val, 1);
			$value = preg_replace("/'$/", "%'", $value, 1);
			$query .= $value;
			if ($key != ($arr_count - 1))
    			$query.= " OR " ;	
    	}
		return '('.$query.')';        
	}
        
    public function queryFilterone_of(&$layout_def) {
		$arr = array ();
		foreach ($layout_def['input_name0'] as $value) {
			array_push($arr, "'".$GLOBALS['db']->quote($value)."'");
		}
	    $reporter = $this->layout_manager->getAttribute("reporter");

    	$col_name = $this->_get_column_select($layout_def) . " LIKE " ;
    	$arr_count = count($arr);
    	$query = "";
    	foreach($arr as $key=>$val) {
    		$query .= $col_name;
			$value = preg_replace("/^'/", "'%", $val, 1);
			$value = preg_replace("/'$/", "%'", $value, 1);
			$query .= $value;
			if ($key != ($arr_count - 1))
    			$query.= " OR " ;	
    	}
		return '('.$query.')';        
	}
	
	public function queryFilteris(&$layout_def) {
		$input_name0 = $layout_def['input_name0'];
		if (is_array($layout_def['input_name0'])) {
			$input_name0 = $layout_def['input_name0'][0];
		}
		return $this->_get_column_select($layout_def)." like '%".$GLOBALS['db']->quote($input_name0)."%'\n";
	}

    /**
     * Returns an OrderBy query for multi-select. We treat multi-select the same as a normal field because
     * the values stored in the database are in the format ^A^,^B^,^C^ though not necessarily in that order.
     * @param  $layout_def
     * @return string
     */
    public function queryOrderBy($layout_def) {
        return SugarWidgetReportField::queryOrderBy($layout_def);
    }
}
?>

