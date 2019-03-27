<html>
<?php
include './conexoes/select.php';
?>
    
<script type="text/javascript" language="javascript">

    //inicio requisição AJAX
    var request = null;
    
    try{ //function createRequest() sendo carregada junto com a pagina direto
        request = new XMLHttpRequest();
    } catch (trymicrosoft){
            try{
                    request = new ActiveXObject("Msxm12.XMLHTTP");
            } catch (othermicrosoft){
                    try{
                            request = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (failed){
                            request = null;
                    }
            }
    }

    if (request == null)
        alert("Error creating request object !");
    
    //fim requisição AJAX
    
    function verificandoUsuarioSenha(){
        var url = "select.php";
        request.open("GET", url, true);
        request.onreadystatechange = verificandoUsuarioSenhaUpdate;
        request.send(null);	
    }
    
    function verificandoUsuarioSenhaUpdate(){
        if(request.readyState == 4){ 

          var dadosConsulta = request.responseText;
          var objetoConsulta = JSON.parse(dadosConsulta);

          alert(objetoConsulta);
         
        }
    }
    
    

    function verificaUsuarioSenhaTeste(){
        alert("entrei !");
        entrei();
    }
    
    
</script> 

<!--
<button class="btn btn-info btn-block" type="button" onclick="teste()" 
    id="btn_pesquisar">PESQUISAR</button>
-->    

</html>    

