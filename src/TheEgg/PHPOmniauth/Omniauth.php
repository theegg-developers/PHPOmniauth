<?php namespace TheEgg\PHPOmniauth;

class Omniauth{
  
  function facebook(){
    return \Redirect::to("https://facebook.com");
  }
  function open_id(){
    return \Redirect::to('https:://google.com');
  }
  function facebook_callback(){}
  function open_id_callback(){}
}

class OmniauthHash extends ArrayObject{
  function __construct($input){
    parent::__construct($input);
  }
}