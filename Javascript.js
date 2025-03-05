<script>
    function myFunction() {
            const today = new Date();
            alert(`Vandaag is het ${today.toDateString()}`);
        }

        function changeText(id, text) {
            document.getElementById(id).innerHTML = text;
        }

        function hoverIt() {
            document.getElementById("blokje").style.backgroundColor = "yellow";
        }

</script>