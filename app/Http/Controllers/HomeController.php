<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use App\Calculator;

class HomeController extends Controller
{
    private $msg = null;
    
    public function Welcomme(Request $request) {
        
        $value = '';
        $expresion = '';
        $calculator = new Calculator;
        if($request->method == 'insert') {
            $value = 'Invalid input!';
            $expression = $request->value;
            $expression = str_replace(',', '.', $expression);
            $result = $calculator->calculate($expression);
            if($result != false) {
                $result = str_replace('.', ',', $result);
                $value = $request->value . ' = ' . $result;
                $expresion = $request->value;
                $this->GenerateHistory($value);
            } else {
                $this->msg = $calculator->getErrorMessage();
                if($this->msg !== null) {
                    $value = $this->msg;
                }
                
                $expresion = $request->value;
            }
        } elseif($request->method == 'clear') {
            $this->clear();
        }
        $index = 1;
        $history = History::select('calculation')->orderBy('id', 'desc')->get();
        foreach($history as $item) {
            $item->index = $index;
            $index++;
        }
        
        return view('welcome', compact('value','history', 'expresion'));
    }
    
    private function clear() {
        History::truncate();
    }

    private function GenerateHistory($value) {
        History::insert(
            [
                'calculation' => $value,
            ]
        );
    }

}
