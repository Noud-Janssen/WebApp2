<script>
    let open = false;
    let expandables = document.getElementsByClassName("expand");
    function expand() {
        
        if (open) {
            document.querySelector(".searchbalk").style.height = "50px";
            
            for (let element in expandables) {
                expandables[element].style.display = "none";
            }
            open = false;
        } else {
            document.querySelector(".searchbalk").style.height = "200px";
            for (element in expandables) {
                expandables[element].style.display = "inline-block";
            }
            open = true;
        }
        return false;
    }
</script>

<form class="searchbalk" action="resultaat.php">
    <div class="inputWrapper">
        <input type="text" name="land" id="landform" placeholder="Plaats of Land">
    </div>
    <div class="inputwrapper">
        <p>Vertekken:</p>
    </div>
    <div class="inputWrapper">
        <input type="date" name="vertrekdatum1" class="vertrekdatum" id="vertrek-datum">
        <input type="date" name="vertrekdatum2" class="vertrekdatum expand" id="vertrek-datum">
    </div>
    <div class="inputwrapper">
        <p>Terugkomst:</p>
    </div>
    <div class="inputWrapper">
        <input type="date" name="terugkomstdatum1" class="vertrekdatum" id="aankomst-datum">
        <input type="date" name="terugkomstdatum2" class="vertrekdatum expand" id="aankomst-datum">
    </div>
    <div class="inputWrapper">
        <input type="submit" value="zoek" id="zoek-knop">
        <button id="expand-knop" onclick="return expand()">Filters</button>
    </div>



</form>