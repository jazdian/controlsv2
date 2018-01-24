<?php


class datatable_demo
{
	 function CreateTableHTML()
	 {
	    // get dats of database
	    $dats = $this->GetDataQuery();
	    $tbl = new DataTable();
	    $tbl->SetDataSource($dats['obj_']);
	    
	    return $tbl->CreateDT();
	 }
	 
	 function GetDataQuery()
	 {
	    $conn = $this->GetConection();
	    if($conn['sta_'] === false)
	    {
	       return $conn;
	    }
	    else
	    {
       	       //$paramJsons = JsonSP();
       	       $paramJsons = $this->JsonQuery();
	       
	       $qry = new DataAccess();
	       $qry->SetConn($conn['obj_']);
	       $qry->SetJsonParams(json_decode($paramJsons));
	       $dat = $qry->ExecStoredProcedure();
	       return $dat;
	    }
	    
	 }	 
	 
	 function GetConection()
	 {
	    //Create a conection... 
	     $cn = new Connection('localhost', 'inventarios', 'root', '');
	     $response_cn = $cn->SimpleConnectionPDO();
	     if($response_cn['sta_'] === false)
	     {
		return $response_cn;
	     }
	     else
	     {
		return $response_cn;
	     }	    
	 }
	 
	 function JsonSP()
	 {
	    $JsonData = <<<EOF
{
"params":{
   ":accion":"SELECT_ESTATUS",
   ":Id_estado":""},
"vars":{
   "NumFuncion":"0",
   "QueryString":"CALL tabs_crud_estatus(?,?);"}
}
EOF;
	    return $JsonData;
	 }
	 
	 function JsonQuery()
	 {
	    $JsonData = <<<EOF
{
"params":{
   ":nombre_completo":"%Perez%"},
"vars":{
   "NumFuncion":"0",
   "QueryString":"SELECT id_age, nombre_completo, curp FROM inventarios.cat_agentes WHERE nombre_completo LIKE ?;"}
}
EOF;
	    return $JsonData;
	 }	   
   
}
