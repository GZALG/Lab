<html>

<head>
    <title>Contact</title>
</head>

<body>
    <?php require("header.php");?>
        <div id="map" style="width: 700px; height: 700px">
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
            </script>
            <script type="text/javascript">
                var myOptions = {
                    zoom: 19,
                    center: new google.maps.LatLng(36.21005234, 5.44379532),
                    mapTypeId: google.maps.MapTypeId.HYBRID

                };
                var map = new google.maps.Map(document.getElementById("map"), myOptions);
                var myLatlng = new google.maps.LatLng(36.21005234, 5.44379532);
                var mapOptions = {
                    zoom: 19,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }
                var map = new google.maps.Map(document.getElementById("map"), mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    title: "Lab"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            </script>
        </div>
        <?php require("footer.php");?>
</body>

</html>