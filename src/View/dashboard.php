<?php include('head.php') ?>

<div class="container">
    <h1 class="text-center">Smarts Dashboard</h1>  
    <div class="row">
        <div class="col-4">
            <a href="/?filter=smallestbudget"><p class="text-center">Menor Budget</p></a>
        </div>
        <div class="col-4">
        <a href="/?filter=biggestbudget"><p class="text-center">Maior Budget</p></a>
        </div>
        <div class="col-2">
        <a href="/?filter=A-Z"><p class="text-center">A-Z</p></a>
        </div>
        <div class="col-2">
        <a href="/?filter=Z-A"><p class="text-center">Z-A</p></a>
        </div>
    </div>
    <form action="/" method="get">
        <div class="row">    
            <div class="col-6 d-flex justify-content-end">
                
                    <label for="start">Início</label>
                    <input type="date" name="start">
                </div>
            <div class="col-6 d-flex justify-content-start">
                <label for="start">Final</label>
                <input type="date" name="end">
            </div>
        </div>
        <div class="row">
            <input type="submit">
        </div>
    </form>    
    
    <div class="customers">
        <?
        foreach ($customers as $customer){?>
            <div class="row customer-info mt-5 mb-5">
                <div class="col-6 d-flex justify-content-center customer-picture">               
                    <img src="<? echo $customer->pictures[0]->url ?>">
                </div>
                <div class="col-6 customer-data">
                    <p><? echo $customer->name->first.' '.$customer->name->last ?></p>
                    <p><? echo $customer->email ?></p>
                    <p><? echo $customer->company ?></p>
                    <p><? echo $customer->age ?></p>
                    <p><? echo $customer->budget ?></p>
                </div>
            </div>
        <?}    
        ?>
    </div>
      
</div>
   

