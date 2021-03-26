<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    private $msg = null;
    
    public function calculate($value) {
        
        $arr = explode(' ', $value);

        if(count($arr) < 3 ) {
            $this->msg = 'Wrong input!';
            return false;
        }
        if(count($arr)%2 == 0) {
            $this->msg = 'Missing operator(s)!';
            return false;
        }
        $result = $arr[0];
        for($i = 0; $i < count($arr); $i++) {
            switch ($arr[$i]) {
                case '+':
                    if(!is_numeric($arr[$i+1])) {
                        $this->msg = 'Not a number!';
                        return false;
                    }
                    $result = $result + $arr[$i+1];
                    break;
                case '-':
                    if(!is_numeric($arr[$i+1])) {
                        $this->msg = 'Not a number!';
                        return false;
                    }
                    $result = $result - $arr[$i+1];
                    break;
                case '*':
                    if(!is_numeric($arr[$i+1])) {
                        $this->msg = 'Not a number!';
                        return false;
                    }
                    if($i != 1) {
                        $temp = $arr[$i-1] * $arr[$i+1];
                        if($arr[$i-2] == '+') {
                            $result = $result - $arr[$i-1]; 
                            $result = $result + $temp;
                        } elseif($arr[$i-2] == '-') {
                            $result = $result + $arr[$i-1]; 
                            $result = $result - $temp;
                        } else {
                            $result = $result * $arr[$i+1]; 
                        }
                    } else {
                        $result = $result * $arr[$i+1];
                    }
                    //$result = $result * $arr[$i+1];
                    break;
                case '/':
                    if(!is_numeric($arr[$i+1])) {
                        $this->msg = 'Not a number!';
                        return false;
                    }
                    if($i != 1) {
                        $temp = $arr[$i-1] / $arr[$i+1];
                        if($arr[$i-2] == '+') {
                            $result = $result - $arr[$i-1]; 
                            $result = $result + $temp;
                        } elseif($arr[$i-2] == '-') {
                            $result = $result + $arr[$i-1]; 
                            $result = $result - $temp;
                        } else {
                            $result = $result / $arr[$i+1]; 
                        }
                        $i++;
                    } else {
                        $result = $result / $arr[$i+1];
                    }
                    //$result = $result / $arr[$i+1];
                    break;
            }
        }
        return $result;
    }
    
    public function getErrorMessage() {
        return $this->msg;
    }
    
}
