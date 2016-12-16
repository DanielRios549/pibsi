var $$ = function($q) {
    return document.querySelector($q);
};

var log = function($l) {
    return console.log($l);
};

var setVariable = function(propertyName, value) {
    document.documentElement.style.setProperty(propertyName, value);
};