<script>
    let open = false;

    function expand() {
        var expandables = document.getElementsByClassName("expand");
        if (open) {
            document.querySelector(".searchbalk").style.height = "50px";
            document.querySelector("#aankomst-datum2").style.display = "none";
            document.querySelector("#vertrek-datum2").style.display = "none";
            document.querySelector("#minimumpreis").style.display = "none";
            document.querySelector("#maximumpreis").style.display = "none";
            
            open = false;
            return false;
        } else {
            document.querySelector(".searchbalk").style.height = "200px";
            document.querySelector("#aankomst-datum2").style.display = "inline-block";
            document.querySelector("#vertrek-datum2").style.display = "inline-block";
            document.querySelector("#minimumpreis").style.display = "inline-block";
            document.querySelector("#maximumpreis").style.display = "inline-block";
            open = true;
            return false;
        }
        return false;
    }
</script>

<form class="searchbalk" action="resultaat.php">
    <div class="inputWrapper">
        <input type="text" name="land" id="landform" placeholder="Plaats of Land">


    </div>
    <div class="inputWrapper">
        <p>Vertekken:</p>
        <input type="number" name="minimumpreis" id="minimumpreis" placeholder="€Minimum">
    </div>
    <div class="inputWrapper">
        <input type="date" name="vertrekdatum1" class="vertrekdatum" id="vertrek-datum">
        <input type="date" name="vertrekdatum2" class="vertrekdatum expand" id="vertrek-datum2">
    </div>
    <div class="inputWrapper">
        <p>Terugkomst:</p>
        <input type="number" name="maximumpreis" id="maximumpreis" placeholder="€Maximum">
    </div>
    <div class="inputWrapper">
        <input type="date" name="terugkomstdatum1" class="vertrekdatum" id="aankomst-datum">
        <input type="date" name="terugkomstdatum2" class="vertrekdatum expand" id="aankomst-datum2">
    </div>
    <div class="inputWrapper" id="submit-corner">
        <input type="submit" value="zoek" id="zoek-knop">
        <button id="expand-knop" onclick="return expand()">Filters</button>
    </div>



</form>