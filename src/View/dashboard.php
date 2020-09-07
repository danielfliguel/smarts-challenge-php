<?php include('head.php') ?>

<div class="container">
    <div class="row mt-5 mb-2 mb-lg-5">
        <div class="col-2">
            <img class="smarts-logo" src="./src/View/assets/img/logo.png" alt="">
        </div>
        <div class="col-10">
            <h1 class="text-center">Smart Staff Customers Dashboard</h1>  
        </div>
    </div>    
    
    <form action="/" method="get">
        
            
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <label class="form-control-label" for="start">Início</label>
                        <input class="form-control " type="date" name="start" required>
                    </div>
                    <div class="col-12 col-lg-3">
                        <label class="form-control-label" for="start">Final</label>
                        <input class="form-control " type="date" name="end" required >
                    </div>
                    <div class="col-8 col-lg-3">
                        <label style="color: transparent">#</label>
                        <input class="btn btn-info form-control" type="submit" value="Filtrar por data de registro">            
                    </div>                    
                </div>

        
    </form>
   
        <a href="/"><button class="btn btn-danger clear-filter">Limpar filtros</button></a>
    
        
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Empresa</th>
                <th>Idade</th>
                <th>Orçamento</th>
                
            </tr>
        </thead>
        <tbody>
        <?
        foreach ($customers as $customer){?>
            
            <tr>
              <td><a href="/customer.php?id=<?echo $customer->_id?>" target="_blank"><img src="<? echo $customer->pictures[0]->url ?>"></a></td>
              <td><? echo $customer->name->first?></td>
              <td><? echo $customer->name->last?></td>
              <td><? echo $customer->email?></td>
              <td><? echo $customer->company?></td>
              <td><? echo $customer->age?></td>
              <td><? echo $customer->budget?></td> 
              
            </tr>           
        <?}?> 
        </tbody>
    </table>     
</div>
<script type="text/javascript" src="./src/View/assets/js/datatables.js"></script>

</body>
</html>

