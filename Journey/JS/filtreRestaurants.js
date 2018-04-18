let filtres = []

var strFiltres

//example
$('.ui.checkbox#test').checkbox({
    onChecked: function () {
        filtres.push(".test")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.test'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

// halal
$('.ui.checkbox#halal').checkbox({
    onChecked: function () {
        filtres.push(".halal")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.halal'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

// vegetarien
$('.ui.checkbox#vege').checkbox({
    onChecked: function () {
        filtres.push(".vege")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.vege'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

//local
$('.ui.checkbox#local').checkbox({
    onChecked: function () {
        filtres.push(".local")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.local'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

//1 étoile
$('.ui.checkbox#1etoiles').checkbox({
    onChecked: function () {
        filtres.push(".1etoiles")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.1etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

//2 étoiles
$('.ui.checkbox#2etoiles').checkbox({
    onChecked: function () {
        filtres.push(".2etoiles")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.2etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

//3 étoiles
$('.ui.checkbox#3etoiles').checkbox({
    onChecked: function () {
        filtres.push(".3etoiles")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.3etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

//4 étoiles
$('.ui.checkbox#4etoiles').checkbox({
    onChecked: function () {
        filtres.push(".4etoiles")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.4etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});


//5 étoiles
$('.ui.checkbox#5etoiles').checkbox({
    onChecked: function () {
        filtres.push(".5etoiles")
        strFiltres = filtres.join("")
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.5etoiles'), 1)
        strFiltres = filtres.join("")
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});


// asiatique
$('.ui.checkbox#asiatique').checkbox({
    onChecked: function () {
        filtres.push(".asiatique")
        strFiltres = filtres.join("")    
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.asiatique'), 1)
        strFiltres = filtres.join("")  
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

// déjeuner
$('.ui.checkbox#dejeuner').checkbox({
    onChecked: function () {
        filtres.push(".dejeuner")
        strFiltres = filtres.join("")   
        $('.resto').hide();
        $(strFiltres).show();
    },
    onUnchecked: function () {
        filtres.splice(filtres.indexOf('.dejeuner'), 1)
        strFiltres = filtres.join("")  
        if (filtres.length > 0) {
            $(strFiltres).show();
        } else {
            $('.resto').show();
        }
    }
});

