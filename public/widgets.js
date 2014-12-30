window.onload = function() {
    var elements = document.getElementsByClassName('outbound');
    var confirmExit = function() {
        if (!window.confirm('Are you sure you want to leave this page?')) {
            return false;
        }
    };

    Array.prototype.forEach.call(elements, function (element) {
        element.onclick = confirmExit;
    });
};
