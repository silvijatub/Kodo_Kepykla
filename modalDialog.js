    
    function closeDialog() {
        console.log("close");
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }
    
    function dialog() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
        console.log("show");
    }

    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }