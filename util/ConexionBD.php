<?php

class ConexionBD {

    const SERVER = "localhost";
    const USER = "minkayco_mibanco";
    const PASS = "wmgzK^Kc~6TH";
    const DATABASE = "minkayco_mibanco";

    private $cn = null;

    public function getConexionDB() {
        try {
            $this->cn = @mysql_connect(self::SERVER, self::USER, self::PASS);
            @mysql_select_db(self::DATABASE, $this->cn);
            @mysql_query("SET NAMES 'utf8'",$this->cn); 
        } catch (Exception $e) {

        }
        return $this->cn;
    }

}

?>




