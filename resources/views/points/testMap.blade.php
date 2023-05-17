@extends('layouts._plantas')
@section('content')
<h1>Seleccionar ubicación en el mapa</h1>
<div id="map"></div>
<input type="text" id="address" placeholder="Ingresa una dirección">
<button onclick="geocodeAddress()">Buscar</button>
@endsection
@section('js')
<script>
    // Inicializar mapa
    function initMap() {
        // Coordenadas iniciales (por ejemplo, Ciudad de México)
        var initialLatLng = { lat: 19.4326, lng: -99.1332 };

        // Crear mapa
        var map = new google.maps.Map(document.getElementById('map'), {
            center: initialLatLng,
            zoom: 12
        });

        // Marcador arrastrable
        var marker = new google.maps.Marker({
            position: initialLatLng,
            map: map,
            draggable: true
        });

        // Actualizar latitud y longitud cuando se arrastra el marcador
        marker.addListener('dragend', function() {
            updateLatLng(marker.getPosition());
        });
    }

    // Actualizar latitud y longitud en campos de texto
    function updateLatLng(latLng) {
        document.getElementById('latitude').value = latLng.lat();
        document.getElementById('longitude').value = latLng.lng();
    }

    // Geocodificar dirección ingresada por el usuario
    function geocodeAddress() {
        var geocoder = new google.maps.Geocoder();
        var address = document.getElementById('address').value;

        geocoder.geocode({ 'address': address }, function(results, status) {
            if (status === 'OK') {
                // Obtener la ubicación geográfica de la primera coincidencia
                var location = results[0].geometry.location;

                // Obtener mapa existente
                var map = new google.maps.Map(document.getElementById('map'));

                // Mover el marcador a la nueva ubicación
                map.panTo(location);
                marker.setPosition(location);
                updateLatLng(location);
            } else {
                alert('No se encontró la dirección ingresada: ' + status);
            }
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBytIUyY1c26GP7wpi0UZrkciY6FFxUO24&callback=initMap"></script>
@endsection