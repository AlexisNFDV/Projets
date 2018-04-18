<footer>
    <div class="ui two column very relaxed grid">
        <div class="column">
            <div id="logos">
                <img style="height: 30px; width: 30px" src="Images/Social/facebook.svg">
                <img style="height: 30px; width: 30px" src="Images/Social/instagram.svg">
                <img style="height: 30px; width: 30px" src="Images/Social/twitter.svg">
            </div>
        </div>
        <div class="column" id="part2">
            <a href="" class="links" style="padding-right: 150px">Contactez nous</a>
            <a href="" class="links">Mentions légales</a>
        </div>
    </div>
</footer>

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
<script src="JS/filtreRestaurants.js"></script>


<!--on verra-->
<script type="text/javascript">
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