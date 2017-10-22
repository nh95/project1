<?php
abstract class Reader{
abstract public function _read($filename);
} 
class CsvReader extends Reader{
	//Parse the input file and returns array 
		public function _read($filename){
			     $lines = file($filename);
			     	     $lines = array_map('trim',$lines);
				     	     $lines = array_filter($lines);
					     	     $data = array_map('str_getcsv', $lines);
						     	     return $data;
							     	}
								}
