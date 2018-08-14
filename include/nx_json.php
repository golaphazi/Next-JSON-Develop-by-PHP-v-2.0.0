<?php namespace Simple\JSONs;
/**
 * PHP Next JSON API
 * verson V- 2.0.0 or V2
 * An open source application development JSON for PHP
 *
 
 * Copyright (c) 2017 - 2018, HOTLancer.com by Golap Hazi - golaphazi@gmail.com
 * skype and facebook: golap.hazi
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	Next JSON
 * @author	Next framework Team
 * @copyright	Copyright (c) 2015 - 2016, HOTLancer.com by Golap Hazi - golaphazi@gmail.com
 * skype and facebook: golap.hazi(golap.smlmhs.edu.bd)
 * @copyright	Copyright (c) 2015 - 2016, HOTLancer.com by Golap Hazi - golaphazi@gmail.com
 * skype and facebook: golap.hazi
 * 
 * @since	Version 1.0.0
 * @ V2
 */
class NX_JSON {
    public function make(){
        return json_encode($this);
    }
    
    private function headers(){
        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // JSONs are by default dynamic data
        header('Content-type: application/json, charset=UTF-8');
    }
    
    public function send($options = null){
        $this->headers();
        echo json_encode($this, $options);
    }
    
    public function send_var($var_name = 'default', $options = null){
        $this->headers();
        echo "var {$var_name} = ";
        echo json_encode($this, $options);
        echo ';';
    }
    
    public function send_callback($cb_name = 'default', $options = null){
        $this->headers();
        echo "{$cb_name}(";
        echo json_encode($this, $options);
        echo ');';
    }
}
  
?>
