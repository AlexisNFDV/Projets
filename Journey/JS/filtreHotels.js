let filtres = []

var strFiltres

//example
$('.ui.checkbox#test').checkbox({
    onChecked: function () {
        filtres.push(".test")
        strFiltres = filtres.join("")
        $('.hotel').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.test'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.hotel').show();
        }
    }
});

//example
$('.ui.checkbox#clim').checkbox({
    onChecked: function () {
        filtres.push(".clim")
        strFiltres = filtres.join("")
        $('.hotel').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.clim'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.hotel').show();
        }
    }
});

// salle de sport
$('.ui.checkbox#sport').checkbox({
    onChecked: function () {
        filtres.push(".sport")
        strFiltres = filtres.join("")
        $('.hotel').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.sport'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.hotel').show();
        }
    }
});

//1 étoile
$('.ui.checkbox#1etoiles').checkbox({
    onChecked: function () {
        filtres.push(".1etoiles")
        strFiltres = filtres.join("")
        $('.hotel').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.1etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.hotel').show();
        }
    }
});

//2 étoiles
$('.ui.checkbox#2etoiles').checkbox({
    onChecked: function () {
        filtres.push(".2etoiles")
        strFiltres = filtres.join("")
        $('.hotel').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.2etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.hotel').show();
        }
    }
});

//3 étoiles
$('.ui.checkbox#3etoiles').checkbox({
    onChecked: function () {
        filtres.push(".3etoiles")
        strFiltres = filtres.join("")
        $('.hotel').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.3etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.hotel').show();
        }
    }
});

//4 étoiles
$('.ui.checkbox#4etoiles').checkbox({
    onChecked: function () {
        filtres.push(".4etoiles")
        strFiltres = filtres.join("")
        $('.hotel').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.4etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.hotel').show();
        }
    }
});


//5 étoiles
$('.ui.checkbox#5etoiles').checkbox({
    onChecked: function () {
        filtres.push(".5etoiles")
        strFiltres = filtres.join("")
        console.log(filtres, strFiltres)
        $('.hotel').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.5etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.hotel').show();
        }
        console.log(filtres, strFiltres)
    }
});