<script>
    let open = false;

    function expand() {
        var expandables = document.getElementsByClassName("expand");
        if (open) {
            document.querySelector("#vertrek-datum2").style.display = "none";
            document.querySelector("#aankomst-datum2").style.display = "none";
            document.querySelector("#no-display1").style.display = "none";
            
            open = false;
            return false;
        } else {
            document.querySelector("#vertrek-datum2").style.display = "inline-block";
            document.querySelector("#aankomst-datum2").style.display = "inline-block";
            document.querySelector("#no-display1").style.display = "flex";
            open = true;
            return false;
        }
        return false;
    }

    function search() {
        var date1 = new Date(document.querySelector("#vertrek-datum").value);
        var date1_2 = new Date(document.querySelector("#vertrek-datum2").value);
        var date2 = new Date(document.querySelector("#aankomst-datum").value);
        var date2_2 = new Date(document.querySelector("#aankomst-datum2").value);
        if (date1 > date2) {
            alert("Vertek datum moet voor de terugkomstdatum zijn");
            return false;
        }
        if (date1 > date1_2) {
            alert("Vertrek datum 1 moet voor vertrek datum 2 zijn");
            return false;
        }
        if (date2 > date2_2) {
            alert("terugkomst datum 1 moet voor terugkomst datum 2 zijn");
            return false;
        }
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
            <input type="date" name="vertrekdatum2" class="vertrekdatum" id="vertrek-datum2">
        </div>
        <div class="inputWrapper  textWrapper">
            <p>Terugkomst:</p>
        </div>
        <div class="inputWrapper">
            <input type="date" name="terugkomstdatum1" class="vertrekdatum" id="aankomst-datum">
            <input type="date" name="aankomstdatum2" class="vertrekdatum" id="aankomst-datum2">
        </div>
        <div class="inputWrapper halfwidth nodisplay" id="no-display1">
            <p>Prijs:</p>
            <input type="number" name="minprijs" id="minimumpreis" placeholder="Min." value="1">
            <p>-</p>
            <input type="number" name="maxprijs" id="maximumpreis" placeholder="Max." value="">
        </div>
        
    </div>
    <div class="inputWrapper" id="submit-corner">
            <input type="submit" value="zoek" id="zoek-knop" onclick="return search()">
            <button id="expand-knop" onclick="return expand()">Filters</button>
        </div>
</form>