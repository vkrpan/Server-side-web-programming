<?php
include './LV4/connection.php';
if(isset($_GET['modal_id'])){

    switch($_GET['modal_id']){

        case "new_employee":
            echo '<div class="modal-body" style="padding:0">
                        <div class="modal-header" style="margin-bottom:25px;">
                            <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="color:black">Dodaj zaposlenika</h4>
                        </div>
                        <form class="form-horizontal" method="post" action="action.php" id="addNew">
                            <div class="form-group">
                                <label class="col-md-6 control-label">Ime zaposlenika</label><br><br>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Ime" name="ime"/>
                                </div>
                                <label class="col-md-6 control-label">Prezime zaposlenika</label><br><br>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="prezime" name="prezime"/>
                                </div>
                                <label class="col-md-6 control-label">Datum rođenja</label><br><br>
                                <div class="col-md-12">
                                    <input type="date" class="form-control" placeholder="datum rođenja" name="datRod"/>
                                </div>
                                <label class="col-md-6 control-label">Datum zapošljavanja</label><br><br>
                                <div class="col-md-12">
                                    <input type="date" class="form-control" placeholder="datum zapošljavanja" name="datWork"/>
                                </div>
                                <label class="col-md-6 control-label">Spol</label><br><br>
                                <div class="col-md-12">
                                <select name="spol" id="">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                                </div>
                            </div>
                            
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-s" onclick="AddNewEmployee()">Spremi novog zaposlenika</button>
                            <button type="button" class="btn btn-success btn-s" datadismiss="modal">Zatvori</button>
                        </div>
                    </div>';
        break;

        case "edit_employee":
            echo '
            <div class="modal-body" style="padding:0">
                <div class="modal-header" style="margin-bottom:25px;">
                    <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="color:black">Uredi zaposlenika</h4>
                </div>
                <form class="form-horizontal" method="post" action="action.php">
                    <div class="form-group">
                        <label class="col-md-6 control-label">Ime zaposlenika</label><br><br>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Ime" name="ime"/>
                        </div>
                        <label class="col-md-6 control-label">Prezime zaposlenika</label><br><br>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="prezime" name="prezime"/>
                        </div>
                        <label class="col-md-6 control-label">Datum rođenja</label><br><br>
                        <div class="col-md-12">
                            <input type="date" class="form-control" placeholder="datum rođenja" name="datRod"/>
                        </div>
                        <label class="col-md-6 control-label">Datum zapošljavanja</label><br><br>
                        <div class="col-md-12">
                            <input type="date" class="form-control" placeholder="datum zapošljavanja" name="datWork"/>
                        </div>
                        <label class="col-md-6 control-label">Spol</label><br><br>
                        <div class="col-md-12">
                        <select name="spol" id="">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        </div>
                    </div>
                    
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-s" onclick="">Spremi promjene</button>
                    <button type="button" class="btn btn-success btn-s" datadismiss="modal">Zatvori</button>
                </div>
            </div>';
        break;


        case "delete_employee":
            echo '
            <div class="modal-body" style="padding:0">
                <div class="modal-header" style="margin-bottom:25px;">
                    <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="color:black">Obriši zaposlenika</h4>
                </div>
                <form class="form-horizontal" method="post" action="action.php">
                    <div class="form-group">
                        <label class="col-md-6 control-label">Ime zaposlenika</label><br><br>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Ime" name="ime"/>
                        </div>
                        <label class="col-md-6 control-label">Prezime zaposlenika</label><br><br>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="prezime" name="prezime"/>
                        </div>
                        <label class="col-md-6 control-label">Datum rođenja</label><br><br>
                        <div class="col-md-12">
                            <input type="date" class="form-control" placeholder="datum rođenja" name="datRod"/>
                        </div>
                        <label class="col-md-6 control-label">Datum zapošljavanja</label><br><br>
                        <div class="col-md-12">
                            <input type="date" class="form-control" placeholder="datum zapošljavanja" name="datWork"/>
                        </div>
                        <label class="col-md-6 control-label">Spol</label><br><br>
                        <div class="col-md-12">
                        <select name="spol" id="">
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        </div>
                    </div>
                    
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-s" onclick="">Izbriši zaposlenika</button>
                    <button type="button" class="btn btn-success btn-s" datadismiss="modal">Zatvori</button>
                </div>
             </div>';
        break;
    }
}
?>