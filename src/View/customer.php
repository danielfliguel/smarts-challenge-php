<?php include 'head.php'; ?>

<div class="container">
    <div class="row mt-2 mt-lg-5 mb-4 mb-lg-2 mb-lg-5">
        <div class="col-4 col-md-3 smarts-logo-details">
            <img src="./src/View/assets/img/logo.png" alt="">
        </div>
        <div class="col-8">
            <h1 class="details-title">Detalhes do cliente</h1>  
        </div>
    </div> 
    <div class="customer-details">
        <?foreach ($customers as $customer){
            if ($customer->_id == $_GET['id']){?>
                <div class="row">
                    <div class="col-12">
                        <h2><?echo $customer->name->first.' '.$customer->name->last?></h2>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-12 col-lg-2">
                        <p><span>Idade: </span> <?echo $customer->age.' anos'?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <p><span>Email: </span><?echo $customer->email?></p>
                    </div>
                    <div class="col-12 col-lg-3">
                        <p><span>Telefone: </span><?echo $customer->phone?></p>
                    </div>                    
                </div>              
                <div class="row">
                    <div class="col-12">
                        <p><span>Endereço: </span><?echo $customer->address?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="text-justify"><span>Sobre: </span> <?echo $customer->about?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <p><span>Data de registro: </span><?echo date("d/m/Y", strtotime($customer->registered))?></p>
                    </div>                    
                </div>                
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <p><span>Empresa: </span><?echo $customer->company?></p>
                    </div>
                    <div class="col-12 col-lg-3">
                        <p><span>Orçamento: </span><?echo $customer->budget?></p>
                    </div>
                </div>                             
                <div class="d-none">
                    <span id="latitude-val"><?echo $customer->latitude?></span>
                    <span id="longitude-val"><?echo $customer->longitude?></span>    
                </div>
                <div class="row">
                    <div class="col-12">
                        <p><span>Localização: <span</p>
                    </div>
                </div>                
                <div class="row ml-1 mb-4">                    
                    <div id="map" class="col-12 col-lg-6"></div>
                </div>                
                <div class="row">
                    <div class="col-12">
                        <p><span>Histórico de contato: </span></p>
                    </div>
                </div>
                <table class="table table-bordered contact-timeline">
                    <thead>
                        <tr>
                            <th class="d-none d-lg-block">ID</th>
                            <th>Corretor</th>
                            <th>Data</th>
                            <th>Horário</th>                   
                        </tr>
                    </thead>
                    <tbody>
                    <?foreach ($customer->contactTimeline as $contactTimeline){?>
                        <tr>                                              
                            <td class="d-none d-lg-block"><?echo $contactTimeline->id?></td>
                            <td><?echo $contactTimeline->broker?></td>
                            <td><?echo date("d/m/Y", strtotime($contactTimeline->date))?></td>
                            <td><?echo date("H:i:s", strtotime($contactTimeline->date))?></td>
                        </tr>                        
                    <?}?>
                    </tbody>    
                </table >             
                <div class="row">
                    <div class="col-12">
                        <p><span>Canal: </span><?echo $customer->channel?></p>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <p><span>Fotos: </span></p>
                    </div>                    
                </div>
                <div class="row">
                    <?foreach ($customer->pictures as $picture){?>
                        <div class="col-6 col-md-4 col-lg-3 mb-2 mb-md-3 mb-lg-0">
                            <img class="pictures-profile-details" width="150" height="150" src="<?echo $picture->url?>">
                        </div>
                    <?}?>
                </div>           
            <?}       
        }?>
        <div class="row mb-5 mb-lg-0 mt-2 mt-lg-5 d-flex justify-content-center">
            <a href="/"><button class="btn btn-info">Voltar</button></a>
        </div>
    </div>
</div>
<script src="./src/View/assets/js/maps.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSNbXMnxzY_y2_hdy6IEzbS7afJQa3xeM&callback=initMap"></script>
</body>
</html>