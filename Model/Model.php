<?php
class Model {
	private $bd;
	private static $instance = null;

	/**
	 * Methode terminée, ne pas modifier
	 */
	private function __construct(){
        $this->bd = new PDO('pgsql:host=aquabdd;dbname=etudiants','12101207','173075417DE');
    	$this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$this->bd->query("SET nameS 'utf8'");
	}

	/**
	 * Methode terminée, a ne pas modifier
	 * @return Model|null
	 */
	public static function getModel(){
    	if (self::$instance == null){
        	self::$instance = new self();
    	}
    	return self::$instance;
	}

    public function test(){
        $req = $this->bd->prepare("SELECT * FROM players");
        $req->execute();
        return $req->fetchall();
    }

	public function player_creation($name) {
		$req = $this->bd->prepare("INSERT INTO players VALUES $name");
		$req->execute();
		return (bool) $req->rowCount(); 
	}
}
