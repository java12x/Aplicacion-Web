<?php

include_once '../../datos/conexion/config.php';

class ConexionBD {

    private static function conectar(&$db) {
        try {
            $db = ADONewConnection($GLOBALS['driver']);
            $db->debug = false;
            $db->Connect($GLOBALS['server'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['database']);
            return false;
        } catch (exception $e) {
            return false;
        }
    }

    private static function desconectar(&$db) {
        try {
            $db->Close();
        } catch (exception $e) {
            
        }
    }

    public static function obtener($query, $parametros) {
        ConexionBD::conectar($db);
        $rows = $db->Execute($query, $parametros);
        if ($db->ErrorNo() != 0)
            throw new Exception('Error al obtener');
        ConexionBD::desconectar($db);
        return $rows->getRows();
    }

    public static function ejecutar($query, $parametros) {
//        if (ConexionBD::conectar($db)) {
        ConexionBD::conectar($db);
        $rows = $db->Execute($query, $parametros);
        if ($db->ErrorNo() != 0)
            throw new Exception('Error al ejecutar');
        ConexionBD::desconectar($db);
        return;
//        }
//        else
//            throw new Exception('Error al ejecutar');
    }

    public static function insertar($tabla, $registro) {
//        if (ConexionBD::conectar($db)) {
        ConexionBD::conectar($db);
        $db->AutoExecute($tabla, $registro, 'INSERT');
        if ($db->ErrorNo() != 0)
            throw new Exception('Error al insertar');
        $res = $db->Execute("select max(id) as mid from " . $tabla)->getRows();
        if ($db->ErrorNo() == 0) {
            $res = $res[0][0];
            ConexionBD::desconectar($db);
            return $res;
        }
//        }
//        else
//            throw new Exception('Error al insertar');
    }

    public static function actualizar($tabla, $nId, $vId, $registro) {
//        if (ConexionBD::conectar($db)) {
        ConexionBD::conectar($db);
        $db->AutoExecute($tabla, $registro, 'UPDATE', $nId . '=' . $vId);
        if ($db->ErrorNo() != 0)
            throw new Exception('Error al actualizar');
        ConexionBD::desconectar($db);
        return;
//        }
//        else
//            throw new Exception('Error al actualizar');
    }

    public static function eliminar($tabla, $nId, $vId) {
//        if (ConexionBD::conectar($db)) {
        ConexionBD::conectar($db);
        $rows = $db->Execute('delete from ' . $tabla . ' where ' . $nId . '=?', array($vId));
        if ($db->ErrorNo() != 0)
            throw new Exception('Error al eliminar');
        ConexionBD::desconectar($db);
        return;
//        }
//        else
//            throw new Exception('Error al eliminar');
    }

}

?>
