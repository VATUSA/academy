<?php 
   //convert name 
   class klassroom_admin_setting_confighidden extends admin_setting{ 
    public $pos;
    public $menucount=array();
    public function __construct($name, $visiblename, $description, $defaultsetting,$pos) {
           //$this->paramtype = $paramtype;
           $this->pos=$pos;
           /*if(!is_null($size)) {
               $this->size  = $size;
           }else{
               $this->size  = ($paramtype === PARAM_INT) ? 5 : 30;
           }*/
          
           parent::__construct($name, $visiblename, $description, $defaultsetting);
     }
        
     public function get_setting() {
          return $this->config_read($this->name);
           
       }
    
       public function write_setting($data) {
          if ($this->pos === PARAM_INT and $data === '') {
           // do not complain if '' used instead of 0
               $data = $this->pos;
           }
           return ($this->config_write($this->name, $data) ? '' : get_string('errorsetting', 'admin'));
       }  
        
      
   
    
    /**
        * Return an XHTML string for the setting
        * @return string Returns an XHTML string
        */
    public function output_html($data, $query = '') {
           global $PAGE, $OUTPUT,$CFG,$DB;
   //var_dump($this);exit;
      //if(empty($this->pos)) return '';
           $mmenuexist = $DB->get_record('config_plugins', array('plugin'=>$this->plugin,'name'=>$this->name));  
      
           $PAGE->requires->yui_module('moodle-theme_klassroom-positionChanger', 'M.theme_klassroom.initPositionChanger', array(array('div'=>'#colourswitcher')));
    
           $content  = html_writer::start_tag('div', array('class'=>'menus menupositon'));
           
           if(!empty($mmenuexist->value) && $mmenuexist->value>0){
            $this->pos=$mmenuexist->value;
            $content .= html_writer::start_tag('a', array('href' => new moodle_url('/theme/klassroom/menustatus.php?id='.$mmenuexist->id.'&n='.$this->pos.'&mode=hidden&sesskey='.sesskey())));
            $content .= html_writer::empty_tag('img', array('src' =>$OUTPUT->pix_url('t/hide', 'moodle') ,'class'=>'iconcursor','alt'=>get_string("hide","theme_klassroom"),'title'=>get_string("hide","theme_klassroom")));
            
            $content .= html_writer::end_tag('a');
            $content .='&nbsp';
            
            
            if(count($this->menucount)>1){
              if((($this->pos=='2') || ($this->pos=='3')) && ( $this->pos != reset($this->menucount)))
                $content .= html_writer::empty_tag('img', array('src' =>$OUTPUT->pix_url('t/left', 'moodle') ,'class'=>'iconcursor','id'=>'leftarr','alt'=>get_string("moveleft","theme_klassroom"),'title'=>get_string("moveleft","theme_klassroom")));
            
              $content .='&nbsp';
              if((($this->pos=='1') || ($this->pos=='2')) && ( $this->pos != end($this->menucount)))        
                $content .= html_writer::empty_tag('img', array('src' =>$OUTPUT->pix_url('t/right', 'moodle'),'class'=>'iconcursor','id'=>'rightarr','alt'=>get_string("moveright","theme_klassroom"),'title'=>get_string("moveright","theme_klassroom")),array('class'=>'iconsmall'));
              
            }
            
            
            $content .= html_writer::empty_tag('input', array('type'=>'hidden','id'=>$this->get_id(), 'name'=>$this->get_full_name(), 'value'=>s($data)));
        
            
      }else {
      //print_r($this);exit;
        $custommenu = $OUTPUT->custom_menu();
        $hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));
            //if(!empty($mmenuexist->id)){
              if($this->name=='menu_custom' && !$hascustommenu){
                $content .= html_writer::start_tag('a', array('href' => new moodle_url('/admin/settings.php?section=themesettings')));
                $content .= html_writer::empty_tag('img', array('src' =>$OUTPUT->pix_url('t/hiddenuntil', 'moodle') ,'class'=>'iconcursor','alt'=>get_string("show","theme_klassroom"),'title'=>get_string("enable","theme_klassroom")));
              }else{
                $content .= html_writer::start_tag('a', array('href' => new moodle_url('/theme/klassroom/menustatus.php?id='.$mmenuexist->id.'&n='.$this->pos.'&mode=visible&sesskey='.sesskey())));
                $content .= html_writer::empty_tag('img', array('src' =>$OUTPUT->pix_url('t/show', 'moodle') ,'class'=>'iconcursor','alt'=>get_string("show","theme_klassroom"),'title'=>get_string("show","theme_klassroom")));
              }
              
              
              
              
              
              $content .= html_writer::end_tag('a');
            //}
      }
           /*if (!empty($this->previewconfig)) {
               $content .= html_writer::empty_tag('input', array('type'=>'button','id'=>$this->get_id().'_preview', 'value'=>get_string('preview'), 'class'=>'admin_colourpicker_preview'));
           }*/
           $content .= html_writer::end_tag('div');
           return format_admin_setting($this, $this->visiblename, $content, $this->description, true, '', $this->get_defaultsetting(), $query);
           
       }
       
   }
   
   
   /**
    * 
    * Create a link for setting page
    *
    */
   class klassroom_admin_setting_link extends admin_setting {
    
       /**
        * not a setting, just text
        * @param string $name unique ascii name, either 'mysetting' for settings that in config, or 'myplugin/mysetting' for ones in config_plugins.
        * @param string $heading heading
        * @param string $information text in box
        */
       public function __construct($name, $heading, $information) {
           $this->nosave = true;
           parent::__construct($name, $heading, $information, '');
       }
   
       /**
        * Always returns true
        * @return bool Always returns true
        */
       public function get_setting() {
           return true;
       }
   
       
   
       /**
        * Never write settings
        * @return string Always returns an empty string
        */
       public function write_setting($data) {
       // do not write any setting
           return '';
       }
   
       /**
        * Returns an HTML string
        * @return string Returns an HTML string
        */
       public function output_html($data, $query='') {
           global $OUTPUT,$CFG;
           //print_r($this);exit;
           $return = '';
           /*if ($this->visiblename != '') {
               $return .= $OUTPUT->single_button($this->visiblename, 3, 'main');
           }*/
          
           $return  = html_writer::start_tag('div', array('class'=>'clearer'));
           $return  .= html_writer::end_tag('div');
            $return .= html_writer::start_tag('div', array('id'=>'menumg'));
           if ($this->visiblename != '') {
               $return .= $OUTPUT->action_link(new moodle_url("/theme/klassroom/menu.php"), $this->visiblename);
           }
           $return  .= html_writer::end_tag('div');
           return $return;
       }
   }
   
   
   
    /**
    *Count value of menu position in array of object
    *@param array $setting_value aray of object
    *@param return int  
    */
    function klassroom_is_menu_postion_available($setting_value){
      $ctr=0;
      foreach($setting_value as $obj){
        if(!empty($obj->value))
          $ctr++;
      }
      return $ctr;
    }
   
   ?>
