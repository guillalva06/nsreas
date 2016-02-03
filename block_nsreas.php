<?php
require_once(dirname(__FILE__) . '/../../config.php');

class block_nsreas extends block_base {
    public function init() {
        $this->title = get_string('nsreas', 'block_nsreas');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.
    
    public function get_content() {
    	global $COURSE, $CFG, $PAGE;
	    //Si el usuario tiene permisos de ver el bloque
    	$PAGE->requires->jquery();
    	$PAGE->requires->jquery_plugin('ui');
    	$PAGE->requires->jquery_plugin('ui-css');

    	
    	if (has_capability('block/nsreas:viewincourse', context_course::instance($COURSE->id))) {
    		if ($this->content !== null) {
	    		return $this->content;
	    	}
	    	$courseid = $COURSE->id;
	    	$context = $PAGE->context->id;
	    
			$this->content         =  new stdClass;
	    	//
            $this->content->text = '<a href="'.$CFG->wwwroot.'/blocks/nsreas/index.php?courseid='.$courseid.'&context='.$context.'"
                >Add new File</a>';            
	    	return $this->content->text;
    	}else{
    		return NULL;
    	}
    } 
    public function specialization() {
    	if (!empty($this->config->title)) {
    		$this->title = $this->config->title;
    	} else {
    		$this->config = new stdClass();
    		$this->config->title = 'Reportes personalizados';
    	}
    	if (empty($this->config->text)) {
    		$this->config->text = 'Reportes personalizados';
    	}
    }
        
    
    /**
     * Global Config?
     *
     * @return boolean
     **/
    public function has_config() {
    	return false;
    }
}   // Here's the closing bracket for the class definition
?>
