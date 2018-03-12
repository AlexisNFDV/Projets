<?php

$titre="CaD - Map";

require_once("includes/init.php");
include_once("includes/header.php");

?>

<div id="map" style="width: 100%; height: 900px;"></div>
<i id="back" class="fa fa-chevron-circle-left fa-5x" style="top: 55px; right: 0; position: absolute; margin: 10px; color: white; opacity: 0;"></i>

<script>
    var back = document.getElementById("back");
    var adresse = "http://localhost/Traiteur/liste-traiteurs.php?pays=";
    var new_map;

    function mymap()
    {
        var test = new jvm.Map({
            container: $('#map'),
            map: 'continents_mill',

            onRegionClick: function (event, code) {
                test.remove();
                back.style.opacity = 1;
                new_map = new jvm.Map({
                    container: $('#map'),
                    map: code.concat('_mill'),

                    onRegionClick: function (event, code) {
                        //var region = new_map.getRegionName(code);
                        window.location = adresse.concat(code);
                    }

                });
            }
        });
    }

    back.onclick = function(){
        location.reload();
    };

    mymap();
</script>

<?php include_once("includes/footer.php");?>