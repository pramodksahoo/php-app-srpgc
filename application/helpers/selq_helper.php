<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_selq_log')){
   function get_selq_log($data){
       //get main CodeIgniter object
       $ci =& get_instance();
       //load databse library
       $ci->load->database();
       //get data from database
       if($ci->db->insert('selq_log', $data)){
            return TRUE;
        }
        return FALSE;
   }
   function randomstring()
   {
        $string=str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.'0123456789');
        shuffle($string);
        $rand ='';
        foreach(array_rand($string,12) as $k)
        {
                $rand .=$string[$k];	
        }
        return $rand;	
    }
    /**
     * Create Thumb image
     * @param Array $args
     */
    function createThumb($args,$path){
        $config = array(
                    'image_library'=>'gd2',
                    'source_image' => $args['full_path'], //get original image
                    'new_image' => $path,//get_instance()->config->item('news_img_thumb_url'), //save as new image //need to create thumbs first
                    'maintain_ratio' => TRUE,
                    'width' => 100,
                    'height' => 100
                  );
        $ci =& get_instance();
        $ci->load->library('image_lib');
        $ci->image_lib->initialize($config);
        if (!$ci->image_lib->resize())
        {
            $ci->image_lib->display_errors();
        }
        $ci->image_lib->clear();
        unset($config);
    }
    /**
     * Compress Image
     * @param Array $args
     */
    function compressImage($args,$path){
        $config1 = array(
                    'image_library'     =>'gd2',
                    'source_image'      => $args['full_path'], //get original image
                    'new_image'         => $path,//get_instance()->config->item('news_img_url'), //save as new image //need to create thumbs first
                    'maintain_ratio'    => TRUE,
                    'width'             => 600,
                    'height'            => 600
                  );
        
        $ci =& get_instance();
        $ci->load->library('image_lib');
        $ci->image_lib->initialize($config1);
        if (!$ci->image_lib->resize())
        {
            $ci->image_lib->display_errors();
        }
        $ci->image_lib->clear();
        unset($config1);        
    }
    /**
     * Success Response Function
     * @param String $msg
     * @return Array
     */
    function successResponse($result,$msg=""){
        return array(
            "flag"      => TRUE,
            "status"    => "SUCCESS",
            "data"      => $result,
            "message"   => $msg,
            "result"    => "success",
        );
    }
    
    /**
     * Failure Response Function
     * @param String $msg
     * @return Array
     */
    function failureResponse($msg=""){
       return array(
            "flag"      => FALSE,
            "status"    => "ERROR",
            "data"      => array(),
            "message"   => $msg,
            "result"    => "fail"
        );
    }
    
    /**
     * Blank field validation 
     * @param type $data
     * @return boolean|string
     */
    function checkBlankValidation($data = array()) {
        foreach($data as $key => $value  ) {
            if(empty($value)) {                   
                    return $key.' column value is missing.';
            }                        
         }
         return true;
    }
    function get_mysqli() { 
        $db = (array)get_instance()->db;
        return mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);
    }
    function getIndianCurrency($number)
    {
        $decimal = round($number - ($no = floor($number)), 2) * 100;
        $hundred = null;
        $digits_length = strlen($no);
        $i = 0;
        $str = array();
        $words = array(0 => '', 1 => 'One', 2 => 'Two',
            3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
            7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
            10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
            13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
            16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
            19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
            40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
            70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
        $digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
        while( $i < $digits_length ) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += $divider == 10 ? 1 : 2;
            if ($number) {
                $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                $hundred = ($counter == 1 && $str[0]) ? ' And ' : null;
                $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
            } else $str[] = null;
        }
        $Rupees = implode('', array_reverse($str));
        $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
        return ($Rupees ? $Rupees . 'Rupees Only' : '');
    }
}
