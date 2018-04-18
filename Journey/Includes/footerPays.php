</div>
</div>
</div>

<!--Jquery-->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Semantic-->
<script src="ext/Semantic-UI-2.3.1/dist/semantic.min.js"></script>
<script src="ext/Semantic-UI-2.3.1/dist/semantic.js"></script>

<!-- Fichier JS-->
<script src="JS/rangeslider.js"></script>
<script src="JS/calendar.js"></script>
<script src="JS/date-picker.js"></script>
<script src="JS/myRange.js"></script>
<script src="JS/airlines.js"></script>
<script src="JS/filtreRestaurants.js"></script>
<script src="JS/time-picker.js"></script>

<!--JvectorMap-->
<script src="JS/jVectorMap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="JS/jVectorMap/jquery-jvectormap-continents-mill.js"></script>
<script src="JS/jVectorMap/jquery-jvectormap-south_america_mill.js"></script>
<script src="JS/jVectorMap/jquery-jvectormap-north_america_mill.js"></script>
<script src="JS/jVectorMap/jquery-jvectormap-africa_mill.js"></script>
<script src="JS/jVectorMap/jquery-jvectormap-asia_mill.js"></script>
<script src="JS/jVectorMap/jquery-jvectormap-europe_mill.js"></script>
<script src="JS/jVectorMap/jquery-jvectormap-oceania_mill.js"></script>
<script src="JS/jVectorMap/jquery-jvectormap-world-mill.js"></script>
<script src="JS/pays.js"></script>


<!--on verra-->
<script type="text/javascript">
    $('.ui.checkbox')
    .checkbox();

    $('.ui.rating')
    .rating({
        maxRating: 5
    });

    $('.ui.accordion')
    .accordion();

    $('.ui.rating')
    .rating();

    var content = [{
        title: 'France'
    },
    {
        title: 'Espagne'
    },
    {
        title: 'Allemagne'
    }
    ];
    $('.ui.search')
    .search({
        source: content
    });

    $('.ui.sidebar').sidebar({
        context: $('.bottom.segment')
    })
    .sidebar('attach events', '.item2');
</script>
</body>

</html>