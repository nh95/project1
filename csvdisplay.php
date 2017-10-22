<?php
abstract class Display{
	abstract function _display($data);
	}

class CsvDisplay extends Display{
	//renders data using  html table
		public function _display($data){
		          $html = "<html><body><table border = 1>";
			  	  $html .= "<tr>";
				  	  foreach($data[0] as $header){
					  	  $html .="<th>" .$header. "</th>";
						  	  }
							  	  $html .= "</tr>";
								  	  for ($i=1;$i<count($data);$i++){
									  	  $html .= "<tr>";
										  	  foreach ($data[$i] as $row) {
											  	  $html .= "<td>" .$row. "</td>";
												  	  }
													  	  $html .="</tr>";
														  	  }
															  	  $html .="</table>";
																  	  return  $html; 
																	            }
																		     }
