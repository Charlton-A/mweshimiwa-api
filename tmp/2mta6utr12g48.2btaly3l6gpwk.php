<?php echo $this->render('macros/header.html',$this->mime,get_defined_vars(),0); ?>
<div class="w3-row">
    <div class="w3-container w3-quarter">
        <p></p>
    </div>
    <div class="w3-container w3-half">
        <p>The API performs queries based on <span class="w3-text-red">Constituency</span> name which is passed as a parameter</p>
        <p class="w3-center w3-boder-bottom "><span class="w3-text-blue">Syntax</span> when passing parameters</p>
        <div class="w3-container w3-padding w3-black w3-round">
            <span class="w3-text-red">Constinuecy Name</span>
            <br />
            <span class="w3-text-light-blue">Formats</span>
            <br />
            <span class="w3-text-red"> - Case Insesitive : </span> Kajiado+North <span class="w3-text-light-blue">OR</span>
            KAJIADO+NORTH <span class="w3-text-light-blue">OR Even </span> KaJiAdO+NortH<br />
            <span class="w3-text-red"> - Spaces : </span>Highly prefered you use <span class="w3-text-light-blue">+</span>
            to respresent spaces ie. Kajiado+North <span class="w3-text-light-blue">But </span><br />
            Kajiado North will also work

        </div>
        <p class="w3-center w3-boder-bottom ">To get the of <span class="w3-text-blue">Respresentative</span> of a Constituency</p>
        <div class="w3-container w3-padding w3-black w3-round">
            <span class="w3-text-red">GET </span>
            <span class="w3-text-light-blue"> https://mweshimiwa.herokuapp.com/representative/name?</span>Budalangi
            <br/> {
            <br/> "Constituency" : "Budalangi",
            <br/> "Name" : "Ababu Pius Namwamba",
            <br /> "Status" : "Success",
            <br /> "Message" : "Representative of the constituency found"
            <br /> }

        </div>
        <p class="w3-center">To get the <span class="w3-text-blue">County</span> where a Constituency is located</p>
        <div class="w3-container w3-padding w3-black w3-round">
            <span class="w3-text-red">GET </span>
            <span class="w3-text-light-blue"> https://mweshimiwa.herokuapp.com/county/name?</span>Budalangi
            <br /> {
            <br/> "Constituency" : "Budalangi",
            <br/> "County" : "Busia",
            <br/> "Status" : "Success",
            <br/> "Message" : "County of the constituency found"
            <br/> }
        </div>
        <p class="w3-center">To get the <span class="w3-text-blue">Party</span> of the representative of a Constituency</p>
        <div class="w3-container w3-padding w3-black w3-round">
            <span class="w3-text-red">GET </span>
            <span class="w3-text-light-blue"> https://mweshimiwa.herokuapp.com/party/name?</span>Budalangi
            <br /> {
            <br/> "Constituency" : "Budalangi",
            <br/> "Party" : "Orange Democratic Movement",
            <br/> "Status" : "Success",
            <br/> "Message" : "Party of the represtative of constituency found"
            <br/> }
        </div>
    </div>

</div>
<p> </p>

<?php echo $this->render('macros/footer.html',$this->mime,get_defined_vars(),0); ?>
