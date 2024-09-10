<?php
    $date = new DateTime();

    class User{
        public $title = "Take back control";
        static $sub_title = "Language";
    }

    $element = new User();

    # test class

/*
        class User{
        public $title = "PHP";
        static $subtitle ="Version 8";
        
        public function table(){
            $lang = [1=>"fr", 2=>"en"];
            
            return $lang;
        }
    }

    # instance de class pour public

    $newUser = new User();

    print $newUser->title." ".User::$subtitle."\n";

    $lang = $newUser->table();
    print $lang [2];
*/