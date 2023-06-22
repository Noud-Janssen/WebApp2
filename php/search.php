<script src="js/main.js"></script>
<form class="searchbalk" action="resultaat.php">
    <div class="searchRow">
        <div class="inputWrapper down">
            <input type="text" name="land" id="landform" placeholder="Waarheen?">
        </div>
        
        <div class="inputWrapper">
        <div class="inputWrapper textWrapper">
            <p>Vertekken:</p>
        </div>
            <input type="date" name="vertrekdatum1" class="vertrekdatum" id="vertrek-datum">
            <input type="date" name="vertrekdatum2" class="vertrekdatum" id="vertrek-datum2">
        </div>
        
        <div class="inputWrapper">
        <div class="inputWrapper  textWrapper">
            <p>Terugkomst:</p>
        </div>
            <input type="date" name="terugkomstdatum1" class="vertrekdatum" id="aankomst-datum">
            <input type="date" name="terugkomstdatum2" class="vertrekdatum" id="aankomst-datum2">
        </div>
        <div class="inputWrapper halfwidth nodisplay" id="no-display1">
            <p>Prijs:</p>
            <input type="number" name="minprijs" id="minimumpreis" placeholder="Min." value="1">
            <p>-</p>
            <input type="number" name="maxprijs" id="maximumpreis" placeholder="Max." value="">
        </div>
        <div class="inputWrapper" id="submit-corner">
            <input type="submit" value="zoek" id="zoek-knop" onclick="return search()">
            <button id="expand-knop" onclick="return expand()">Filters</button>
        </div>

    </div>

</form>