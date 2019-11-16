var map;
jQuery(document).ready(function(){

    map = new GMaps({
        div: '#map',
        lat: -6.45366,
        lng: 107.0176,
    });
    map.addMarker({
        lat: -6.45366,
        lng: 107.0176,
        title: 'Yayasan Aksara Buana',      
        infoWindow: {
            content: '<h5 class="title">Yayasan Aksara Buana</h5><p><span class="region">Jl. </span><br><span class="postal-code">Jakarta Pusat</span><br><span class="country-name">Country</span></p>'
        }
        
    });

});