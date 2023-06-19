<script>
    let open = false;

    function expand() {
        var expandables = document.getElementsByClassName("expand");
        if (open) {
            document.querySelector(".searchbalk").style.height = "50px";
            document.querySelector("#srcrow2").style.display = "none";
            document.querySelector("#landform").classList.remove("transformDown");
            document.querySelector("#submit-corner").classList.remove("transformDown");
            
            open = false;
            return false;
        } else {
            document.querySelector(".searchbalk").style.height = "100px";
            document.querySelector("#srcrow2").style.display = "flex";
            document.querySelector("#landform").classList.add("transformDown");
            document.querySelector("#submit-corner").classList.add("transformDown");

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
        </div>
        <div class="inputWrapper  textWrapper">
            <p>Terugkomst:</p>
        </div>
        <div class="inputWrapper">
            <input type="date" name="terugkomstdatum1" class="vertrekdatum" id="aankomst-datum">
        </div>
        <div class="inputWrapper" id="submit-corner">
            <input type="submit" value="zoek" id="zoek-knop">
            <button id="expand-knop" onclick="return expand()">Filters</button>
        </div>
    </div>
    <div class="searchRow" id="srcrow2">
        <div class="inputWrapper">
    
        </div>
        <div class="inputWrapper textWrapper">
            <p>Prijs:</p>
        </div>
        <div class="inputWrapper">
            <input type="number" name="minprijs" id="" placeholder="Min.">
            <input type="number" name="maxprijs" id="" placeholder="Max.">
        </div>
        <div class="inputWrapper textWrapper">
            
        </div>
        <div class="inputWrapper">

        </div>
        <div class="inputWrapper" id="submit-corner"></div>
    </div>
    
</form>