$(document).ready(function() {
    window.focus();
    var myConfObj = {
        iframeMouseOver: false
    }
    window.addEventListener('blur', function() {
        if (myConfObj.iframeMouseOver) {
            window.top.location.href = "calendario.php"
        }
    });

    document.getElementById('minical').addEventListener('mouseover', function() {
        myConfObj.iframeMouseOver = true;
    });
    document.getElementById('minical').addEventListener('mouseout', function() {
        myConfObj.iframeMouseOver = false;
    });
});
