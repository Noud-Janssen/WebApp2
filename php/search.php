<script>
    let open = false;

    function expand() {
        var expandables = document.getElementsByClassName("expand");
        if (open) {
            document.querySelector(".searchbalk").style.height = "50px";
            
            open = false;
            return false;
        } else {
            document.querySelector(".searchbalk").style.height = "100px";

            open = true;
            return false;
        }
        return false;
    }
</script>

<form class="searchbalk" action="resultaat.php">
    <div class="searchRow">
        <div class="inputWrapper down">
            <input type="text" name="land" id="landform" placeholder="Waarheen?">
        </div>
        <div class="inputWrapper textWrapper">
            <p>Vertekken:</p>
        </div>
        <div class="inputWrapper">
            <input type="date" name="vertrekdatum1" class="vertrekdatum" id="vertrek-datum">
            <input type="date" name="vertrekdatum2" class="vertrekdatum" id="vertrek-datum">
        </div>
        <div class="inputWrapper  textWrapper">
            <p>Terugkomst:</p>
        </div>
        <div class="inputWrapper">
            <input type="date" name="terugkomstdatum1" class="vertrekdatum" id="aankomst-datum">
            <input type="date" name="vertrekdatum2" class="vertrekdatum" id="vertrek-datum2">
        </div>
        <div class="inputWrapper halfwidth">
            <p>Prijs:</p>
        </div>
        <div class="inputWrapper halfwidth">
            <input type="number" name="minprijs" id="" placeholder="Min.">
            <input type="number" name="maxprijs" id="" placeholder="Max.">
        </div>
        <div class="inputWrapper" id="submit-corner">
            <input type="submit" value="zoek" id="zoek-knop">
            <button id="expand-knop" onclick="return expand()">Filters</button>
        </div>
    </div>
</form>