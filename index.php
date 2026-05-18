<!-- Navbar -->
<div class="topnav" id="myTopnav">
    <a href="#" class="active">Home</a>
    <a href="#">Data Mahasiswa</a>
    <a href="#">Penilaian</a>
    <a href="#">About</a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<script>

/* Navbar Responsive */
function myFunction() {

    var x = document.getElementById("myTopnav");

    if (x.className === "topnav") {

        x.className += " responsive";

    } else {

        x.className = "topnav";

    }
}

</script>