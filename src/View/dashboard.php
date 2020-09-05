<?php include('head.php') ?>

<div class="container">
    <h1 class="text-center">Smarts Dashboard</h1>  
    
    <form action="/" method="get">
        <div class="data-filter">    
            <div>                
                <label for="start">Início</label>
                <input type="date" name="start" required>
            </div>
            <div>
                <label for="start">Final</label>
                <input type="date" name="end" required >
            </div>
            <div>
                <input class="btn btn-info" type="submit" value="Filtrar por data de registro">            
            </div>
        </div>      
    </form>
        
    <table class="table table-bordered table-stripped table-hover">
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
              <td><img src="<? echo $customer->pictures[0]->url ?>"></td>
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
 <? include('footer.php');  

