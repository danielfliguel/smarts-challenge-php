
function initMap() {
    var longitude = document.getElementById('longitude-val').innerHTML;
    var latitude = document.getElementById('latitude-val').innerHTML;       

    var location = {lat: parseFloat(latitude), lng: parseFloat(longitude)};
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: location});
    var marker = new google.maps.Marker({position: location, map: map});
}
