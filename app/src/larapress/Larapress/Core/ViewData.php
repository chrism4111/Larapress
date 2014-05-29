<?php

namespace Larapress\Core;

class ViewData{

  /*
   *  Array of hook [ "front.index", "back.index" ], can be pooled from a config file
   */
  protected $hooks;
  
  
  public function __construct( $hooks = [] ){
    $this->hooks = $hooks;
  }
  
  /**
   *  Add data to a  hook.
   *
   *  @param  string  $hook     hook name
   *  @param  string  $key      unique identifier for a data key
   *  @param  mixed   $value    value to be passed
   *  @param  bool    $replace  replace if already exist
   *
   *  @return bool    true if added or replaced, elsewhere false
   */
  public function addData( $hook, $key, $value, $replace = false ){
    if( isset( $this->hooks[$hook][$key] ) && !$replace )
      return false;
    
    $this->hooks[$hook][$key] = $value;
    return true;
  }//addData
  
  /*
   *  Return the list of registred hooks
   *
   *  @return array List of hooks
   **/
  public function getRegistredHooks(){
    return $this->hooks;
  }//getRegistredHooks
  
  /**
   *  Get registred data for a specified hook
   *  
   *  @param  $hook string  hook name
   *  
   *  @return array|NULL regitred data or null if not registred
   */
  public function getData( $hook ){
    if( !isset( $this->hooks[$hook] ) )
      return NULL;

    return $this->hooks[$hook];
  }//getData
  
}//end class
