<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include("$root/Templates/NavigationBar.html");?>

    <div class="container-fluid">
        <div class="col-xs-8">
            <h3 align="center">What's on your mind</h3>
            <textarea rows="5" cols="60">Say something</textarea><br>
            <button> Send</button> <br>
            <p><img src="./images/FBprofile_son.jpg" style="width:40px;height:40px;"> Kunanon Srisuntiroj (2016/09/28 22:25:51)</p>
            <textarea rows="5" cols="60" readonly>Hello!</textarea><br>
            <p><img src="./images/FBprofile_son.jpg" style="width:40px;height:40px;"> Kunanon Srisuntiroj (2016/09/28 21:41:31)</p>
            <textarea rows="5" cols="60" readonly>Where are you now?</textarea><br>
        </div>

        <div class="col-xs-4">
            <div class="panel panel-info">
                <div class="panel-heading">Profiles</div>
                <div class="panel-body">
                    <p style="img-rounded" align="center"><img src="./images/FBprofile_son.jpg" style="width:200px;height:200px;"></p>
                    <p align="center">Name: Kunanon Srisuntiroj</p>
                    <p align="center">ID: 59070022</p>
                    <p align="center"><b>Sex</b></p>
                    <form>
                        <p align="center"><input type="radio" name="sex"> Male</p>
                        <p align="center"><input type="radio" name="sex"> Female</p>
                    </form>
                    <form>
                        <p align="center"><b>Interested in</b></p>
                        <p align="center"><input type="checkbox" name="interest"> Food</p>
                        <p align="center"><input type="checkbox" name="interest"> Travel</p>
                        <p align="center"><input type="checkbox" name="interest"> Book</p>
                        <p align="center"><input type="checkbox" name="interest"> TV</p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    <hr>
    <br>

<?php include("Templates/FooterBar.html");?>
