<?php include 'head.php'; ?>

<div class="container">
    <h1 class="text-center">Smarts Dashboard</h1> 
    <div class="customer-details">
        <?foreach ($customers as $customer){
            if ($customer->_id == $_GET['id']){?>
                <div class="row">
                    <div class="col-12">
                        <h2><?echo $customer->name->first.' '.$customer->name->last?></h2>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-2">
                        <p>Idade: <?echo $customer->age?></p>
                    </div>
                    <div class="col-4">
                        <p><?echo $customer->email?></p>
                    </div>
                    <div class="col-3">
                        <p>Telefone: <?echo $customer->phone?></p>
                    </div>                    
                </div>              
                <div class="row">
                    <div class="col-12">
                        <p>Endereço: <?echo $customer->address?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Sobre: <?echo $customer->about?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Data de registro: <?echo date("d/m/Y", strtotime($customer->registered))?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div id="map"></div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p>Empresa: <?echo $customer->company?></p>
                    </div>
                    <div class="col-3">
                        <p>Orçamento: <?echo $customer->budget?></p>
                    </div>
                </div>                             
                <div class="row">
                    <div class="col-3">
                        <p>Latitude: <?echo $customer->latitude?></p>
                    </div>
                    <div class="col-3">
                        <p>Longitude: <?echo $customer->longitude?></p>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-12">
                        <p>Histórico de contato</p>
                    </div>
                </div>
                <div class="row">
                    <?foreach ($customer->contactTimeline as $contactTimeline){?>
                                                                      
                        <div class="col-1">
                            <p>ID: <?echo $contactTimeline->id?></p>
                        </div>
                        <div class="col-4">
                            <p>Corretor: <?echo $contactTimeline->broker?></p>
                        </div>
                        <div class="col-2">
                            <p>Data: <?echo date("d/m/Y", strtotime($contactTimeline->date))?></p>
                        </div>
                        <div class="col-5">
                            <p>Horário: <?echo date("H:i:s", strtotime($contactTimeline->date))?></p>
                        </div>                        
                    <?}?>    
                </div>              
                <div class="row">
                    <div class="col-12">
                        <p>Canal: <?echo $customer->channel?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Fotos</p>
                    </div>                    
                </div>
                <div class="row">
                    <?foreach ($customer->pictures as $picture){?>
                        <div class="col-3">
                            <img style="margin-right: 20px;" width="150" height="150" src="<?echo $picture->url?>">
                        </div>
                    <?}?>
                </div>           
            <?}       
        }?>
    </div>
</div>
<script>
           
</script>
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSNbXMnxzY_y2_hdy6IEzbS7afJQa3xeM&callback=initMap"></script>
</body>
</html>