<?php

class contactadmidio  extends Backend
{


  public function getListGrupe(){

      $list = array();

      $link = mysql_connect('localhost', 'root', '')
          or die('Not conexion: ' . mysql_error());

      mysql_select_db('admidio') or die('Not conexion with DB');

      $query = 'SELECT * FROM adm_categories WHERE cat_type="ROL" AND cat_org_id=1 AND cat_hidden=1 ';
      $result = mysql_query($query) or die('Conexion Error: ' . mysql_error());

      while ($fila = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $list[$fila["cat_id"]] = $fila["cat_name"];
        }

      mysql_free_result($result);
      mysql_close($link);

      return  $list;

  }

}
