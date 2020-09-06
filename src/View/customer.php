<?php include 'head.php'; ?>

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-3">
            <img src="./src/View/assets/img/logo.png" alt="">
        </div>
        <div class="col-6">
            <h1 class="text-center">Detalhes do cliente</h1>  
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
                    
                    <div class="col-2">
                        <p><span>Idade: </span> <?echo $customer->age.' anos'?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p><span>Email: </span><?echo $customer->email?></p>
                    </div>
                    <div class="col-3">
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
                    <div class="col-3">
                        <p><span>Empresa: </span><?echo $customer->company?></p>
                    </div>
                    <div class="col-3">
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
                    <div id="map"></div>
                </div>                
                <div class="row">
                    <div class="col-12">
                        <p><span>Histórico de contato: </span></p>
                    </div>
                </div>
                <table class="table table-bordered contact-timeline">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Corretor</th>
                            <th>Data</th>
                            <th>Horário</th>                   
                        </tr>
                    </thead>
                    <tbody>
                    <?foreach ($customer->contactTimeline as $contactTimeline){?>
                        <tr>                                              
                            <td><?echo $contactTimeline->id?></td>
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
                        <div class="col-3">
                            <img style="margin-right: 20px;" width="150" height="150" src="<?echo $picture->url?>">
                        </div>
                    <?}?>
                </div>           
            <?}       
        }?>
        <div class="row mt-5 d-flex justify-content-center">
            <a href="/"><button class="btn btn-info">Voltar</button></a>
        </div>
    </div>
</div>
<script>
    function initMap() {
    var longitude = document.getElementById('longitude-val').innerHTML;
    var latitude = document.getElementById('latitude-val').innerHTML;       
    
    var location = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: location});
    var marker = new google.maps.Marker({position: location, map: map});
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSNbXMnxzY_y2_hdy6IEzbS7afJQa3xeM&callback=initMap"></script>
</body>
</html>