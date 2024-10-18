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

	public function player_creation($name, $numbers, $stars) {
		$req = $this->bd->prepare("INSERT INTO players (name, numbers, stars) VALUES (:name, :numbers, :stars)"); // INSERT INTO ... VALUES ('...','{x,y,z,a,b}') pour la syntaxe de la requete
		$req->bindValue(':name', $name);
		$req->bindValue(':numbers',$numbers);
		$req->bindValue(':stars',$stars);
		$req->execute();
		return (bool) $req->rowCount(); 
	}

	public function get_players_list() {
		$req = $this->bd->prepare("SELECT * FROM players");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
	}
}
