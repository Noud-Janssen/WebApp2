<script>
        let open = false;
        function expand() {
            if (open) {
                document.querySelectorAll(".searchbalk").style.height = "50px";
                expandables  = document.querySelectorAll(".expand");
                for (element in expandables) {
                    element.style.display = "inline-block";
                }
                open = false;
            } else {
                document.querySelectorAll(".searchbalk").style.height = "200px";
                for (element in expandables) {
                    element.style.display = "none";
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