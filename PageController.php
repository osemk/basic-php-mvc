<?
class PageController{
var $where;
var $trigger;
	public function __construct(){
			$root = str_replace($_SERVER['SCRIPT_NAME'],'',$_SERVER['SCRIPT_FILENAME']).$_SERVER["REQUEST_URI"];
			$this->where=str_replace(realpath(""),"",$root);
			
	}
	private function render($a){
		$views = file_get_contents("view.php");
			preg_match_all('#@'.$a.'start(.*?)@'.$a.'end#si',$views,$output);  
		if(!empty($output[1][0]) ){
			echo $output[1][0];
			$this->trigger=true;
		}else{
			echo "$b haven't declared in views";
		}
	}
	public function page($a,$b){
		if($a == $this->where){
			$this->render($b);
		}
	}
	public function finish(){
		if($this->trigger!=true)
			$this->render("404");
	}
}