<!doctype html>
<html lang="en">
    <?php 
        $subTitle = "Leagues" 
    ?>
    <?php include("incl/head.php"); ?>


<body>
    <!-- Start Body -->

    <!-- Navigation to applicable web functions within the same page -->
    <?php include("incl/nav.php"); ?>

    <!-- Header of the page outlining the logo-->
    <header>
        <div class="jumbotron bgMediumImage" id="headerDiv">
            <div class="container text-right">
                <h1 class="trend-title display-5 text-white font-italic">Creckett Cryce Cricc Cricket</h1>
                <h2 class="font-italic display-5 text-white font-weight-light">Bring in/Team Skills, Social Skills and Interactions</h2>
            </div>
        </div>
    </header>

    <!-- Content - Vision of the website-->
    <main>
        <div class="container" id="contentDiv">
            <!-- Content div is populated dynamically as it is SPA-->
        </div>
        <!-- Error message block for server responses -->
     <?php include("incl/error.php") ?>
    </main>

    <hr />

    <?php include("incl/footer.php") ?>

    <!-- Optional JavaScript -->
    <?php include("incl/includes.php") ?>
   
</body>

</html>