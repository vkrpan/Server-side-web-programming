<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <button onclick="GetModal('modals.php?modal_id=new_employee')" class="btn btn-success">Dodaj novog zaposlenika</button>

    <div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                
                </div>
            </div>
    </div>
    

    <table style="margin-left: 30%; margin-top:5%;">
        <thead>
            <tr>
                <th>R.Br.</th>
                <th>Emp_no</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Datum rođenja</th>
                <th>Spol</th>
                <th>Datum zapošljavanja</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="bodyTablice">
            
        </tbody>
    </table>




    <!-- <div class="modal fade" id="modals" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="padding:0">
                    <div class="modal-header" style="margin-bottom:25px;">
                        <button style="color:white" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="color:white">Title</h4>
                    </div>
                    <form class="form-horizontal" method="post" action="action.php">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Ime zaposlenika</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Ime" name="ime"/>
                            </div>
                            <label class="col-md-3 control-label">Prezime zaposlenika</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="prezime" name="prezime"/>
                            </div>
                            <label class="col-md-3 control-label">Datum rođenja</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" placeholder="datum rođenja" name="datRod"/>
                            </div>
                            <label class="col-md-3 control-label">Datum zapošljavanja</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" placeholder="datum zapošljavanja" name="datWork"/>
                            </div>
                            <label class="col-md-3 control-label">Spol</label>
                            <div class="col-md-8">
                            <select name="spol" id="">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                            </div>
                        </div>
                        
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
                        <button type="button" class="btn btn-success btn-s" datadismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <script src="./js/zaposlenici.js"></script>
    <script src="./js/globals.js"></script>
</body>
</html>
