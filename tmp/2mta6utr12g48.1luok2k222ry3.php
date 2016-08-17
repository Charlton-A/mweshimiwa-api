<?php echo $this->render('macros/header.html',$this->mime,get_defined_vars(),0); ?>

<div class="w3-container w3-blue">
    <div class="w3-row">
        <div class="w3-container w3-quarter">
            <p></p>
        </div>
        <div class="w3-container w3-half">
            <p class="w3-center">
              A Simple API for Kenyan Members of Parlianmnet Listing
            </p>
            <br />
            <div class="w3-container w3-third">
                <img src="/ui/images/browser-tabs.svg" style="width:15vh">
                <br />Listing
            </div>
            <div class="w3-container w3-third">
                <img src="/ui/images/filter-settings.svg" style="width:15vh" >
                <br /> Queries
            </div>
            <div class="w3-container w3-third">
                <img src="/ui/images/json-file.svg" style="width:15vh">
                <br /> Response
            </div>
        </div>
    </div>
    <br />
    <p class="w3-center" style="font-size:1.3vw">Get the Representative,Party of Representative and County for the Constituencies</p>
</div>
<p class="w3-center">
    <img src="/ui/images/detective.png" width="10%">
    <br />
    <br />
    <img src="/ui/images/f3.png" width="9%">
</p>


<?php echo $this->render('macros/footer.html',$this->mime,get_defined_vars(),0); ?>
