$(document).ready(e =>{
    LoadEmployees();
})

function LoadEmployees(){
    $.ajax({
        url:'./LV4/json.php?json_id=get_all_employees',
        type: 'GET',
        success: function (oData){
            //var obj = JSON.parse(oData);
            //console.log(obj);
            oData.forEach((element,index) => {
                $("#bodyTablice").append(`<tr>
                <td>${index}</td>
                <td id="emp_no">${element['emp_no']}</td>
                <td>${element['first_name']}</td>
                <td> ${element['last_name']}</td>
                <td>${element['birth_date']}</td>
                <td>${element['gender']}</td>
                <td>${element['hire_date']}</td>
                <td><button style="cursor: pointer;" class="btn btn-success glyphicon glyphicon-pencil" onclick="GetModal('modals.php?modal_id=edit_employee&emp_id=${element['emp_no']}')" aria-hidden="true"></button></td>
                <td><button style="cursor: pointer;" class="btn btn-danger glyphicon glyphicon-trash" onclick="GetModal('modals.php?modal_id=delete_employee&emp_id=${element['emp_no']}')" aria-hidden="true"></button></td>
                </tr>`);
            });
        },
        error: function(jqXHR,textStatus,errorThrown){
            console.log(jqXHR);
            console.log(textStatus);
        }
    })
}

function AddNewEmployee(){
    var oDat = $("#addNew").serialize();
    $.ajax({
        async: false,
        url:'./LV4/action.php',
        type: 'POST',
        data: oDat,
        dataType: 'json',
        success: function (response){
            alert(response);
        },
        error: function(jqXHR,textStatus){
            console.log(jqXHR);
            console.log(textStatus);
        }
    })
}
