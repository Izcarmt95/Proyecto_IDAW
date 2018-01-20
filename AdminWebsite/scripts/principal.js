/*$(document).ready(function(){
   displayBusesTable();
});*/


function displayBusesTable() {
    var table = $("#tableFlotilla").DataTable({
        destroy: true,
        responsive: true,
        ajax: {
            method: "POST",
            data: {'tag': 'displayTableFlotilla'},
            url: "Package/Controller/gestor.php",
            dataType: "json",
            dataSrc: "data"
        },
        columns: [
            { "data": "id" },
            { "data": "capacity" },
            { "data": "services" },
            { "data": "driver" }

        ]
    });
}

function addBusJS(){
    $id = $("#id").val();
    $capacity = $("#capacity").val();
    $services = $("#services").val();
    $driver = $("#driver").val();
    $.ajax({
        type:  "POST",
        url:   "Package/Controller/gestor.php",
        dataType: "json",
        data: {"id": $id ,"capacity":$capacity,
                "services": $services, "driver": $driver, 
                'tag': 'addBus'
        },
        
        beforeSend: function(){
            //Lo que se hace antes de enviar el formulario
        },
        success: function($result){
            $("#busModalInsert").modal('hide');
            $("#busform")[0].reset();
            alert("izcar");
            alert($result);
            
        },
        error:  function(xhr,err){ 
            alert(xhr.responseText + err);
            
        }
    });
}

/*function displayBusesTable(){
    $.ajax({
        type:  "POST",
        url:   "Package/Controller/gestor.php",
        dataType: "json",
        data: {'tag': 'displayTableFlotilla'},
        beforeSend: function(){
            //Lo que se hace antes de enviar el formulario
        },
        success: function($result){
               $("#bodyTableFlotilla").html($result);
        },
        error:  function(xhr,err){ 
            alert(xhr.responseTex + err);
            
        }
    }); 
}*/

