
<?php
    session_start();

    extract($_REQUEST);

    mysql_connect("localhost","root","") or die ("No se pudo conectar con el servidor");

    mysql_select_db("compras") or die ("No se pudo conectar con la base de datos");

    if(!isset($cantidad)){$cantidad=1;}

    $qry=mysql_query("SELECT * FROM catalogo WHERE id='".$id."'");
    $row=mysql_fetch_array($qry);

    if(isset($_SESSION['carro'])){
        $carro=$_SESSION['carro'];
    }
    
    $carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,
    'producto'=>$row['producto'],'precio'=>$row['precio'],'id'=>$id);

    $_SESSION['carro']=$carro;

    header("Location:catalogo.php?".SID);
?>