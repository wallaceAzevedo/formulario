<!DOCTYPE html>
<html lang="pt-br">
 <head>
   <title>cadastrar</title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" contente="IE-edge">
   <meta name="viewport" contente="whidth=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

  <style type="text/css">


     
     #corpo{
          background-color: #fff;
          height: 100%;
          top: -2px;
         
           }

        #formulario{
          
          background-color: #fff;
          min-height: 400px;
          border-radius: 2%;
          
          box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);

        }
        #dados{
          font-size: 25px;;
         
        }

        #vermelho{
          background-color:#fff;
          height:120px;
        }

        #preto{
          background-color:#fff;
          min-height: 400px;
        }

        #amarelo{
          background-color:#fff;
          min-height: 400px;
        }


      
        

        
   </style>
 </head> 
 <body>
   
  <div id="corpo" class="container-fluid" >
    <div class="row">
      <div id="vermelho" class="col-12"></div>
    </div>
    <div class="row">
     <div id="preto" class="col-sm-4 d-none d-sm-block" ></div>
    
      <div id="formulario" class="col-sm-4 col-xs-12" >
          <img src="https://www.myddev.com/images/myd.png" height="80px"/>
          
                <label ><p id="dados">Contacts details</p></label>

            <form method="post" action="querecebe2.php">

            <div class="form-group" >
              <label>Name</label>
              <input type="text" name="nome" placeholder="Name" id="nome" class="form-control" >
            </div>
            <div class="form-group" >
              <label>E-mail</label>
              <input type="email" name="email" placeholder="E-mail" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label>ID</label>
              <input type="number" name="cpf" placeholder="national identity" id="cpf" class="form-control">
            </div>
                <input type="submit" value="cadastrar" class="btn btn-primary">
                
                <button id="btn2" class="btn btn-danger" type="button"   value="voltar" onclick="history.go(-1)">Voltar</button>
            </form>
          </div>

      <div id="amarelo" class="col-sm-4 d-none d-sm-block" ></div>
    </div>
      
  </div>
   
   
 </body> 
 </html>