/**
 * Created by Victoria on 2015-04-08.
 */

function hoveredit(element)
{
    element.setAttribute('src', '../images/edit_hover.png');
}

function unhoveredit(element)
{
    element.setAttribute('src', '../images/edit.png');
}

function ajaxProfileForm(){
    /* Create xmlhttp object */
    var xmlhttp = false;
    /* For IE Javascript 5 or higher */
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
        /* For IE lower than Javascript 5 */
    catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    /* For Non-IE */
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    /* If xmlhttp object created then continue with AJAX request */
    if (xmlhttp != null) {

        /* Request to the server */
        xmlhttp.open('POST', "tables/profile_edit.php", true);
        /* Keep track of server request status */
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                /* Request to the server completed successfully */
                if (xmlhttp.status == 200 || xmlhttp.status == 304) {
                    /* Get response from Server and sets to whatever depending on update */
                    var response = xmlhttp.responseText;
                    document.getElementById("profileInfo").innerHTML = response;
                    Sortable.init();
                    //alert(response);
                    //var theTable = document.getElementById("forAjax");
                    //sorttable.makeSortable(theTable);
                }
                /* Error in requesting to the server */
                else {
                    alert("State Change was unsuccesful with : " + sendString);
                    alert(xmlhttp.status);
                }
            }
        };
        /* Create header for the POST request */
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* Send string to the Server where it can be retrieved based on the variable set to */
        xmlhttp.send();
        return false;
    }
}

function profileSubmit(){
    phone=document.getElementById("phone").value;
    address=document.getElementById("address").value;
    nickname=document.getElementById("nickname").value;
    email=document.getElementById("email").value;
    description=document.getElementById("description").value;

    ajaxProfileUpdate(phone,address,nickname,email,description);
}
function ajaxProfileUpdate(phone,address,nickname,email,description){

    sendString = "phone=" + phone
        + "&address=" + address
        + "&nickname=" + nickname
        + "&email=" + email
        + "&description=" + description;

    /* Create xmlhttp object */
    var xmlhttp = false;
    /* For IE Javascript 5 or higher */
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
        /* For IE lower than Javascript 5 */
    catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    /* For Non-IE */
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    /* If xmlhttp object created then continue with AJAX request */
    if (xmlhttp != null) {

        /* Request to the server */
        xmlhttp.open('POST', "tables/profile_update.php", true);
        /* Keep track of server request status */
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                /* Request to the server completed successfully */
                if (xmlhttp.status == 200 || xmlhttp.status == 304) {
                    /* Get response from Server and sets to whatever depending on update */
                    var response = xmlhttp.responseText;
                    document.getElementById("profileInfo").innerHTML = response;
                    Sortable.init();
                    //alert(response);
                    //var theTable = document.getElementById("forAjax");
                    //sorttable.makeSortable(theTable);
                }
                /* Error in requesting to the server */
                else {
                    alert("State Change was unsuccesful with : " + sendString);
                    alert(xmlhttp.status);
                }
            }
        };
        /* Create header for the POST request */
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* Send string to the Server where it can be retrieved based on the variable set to */
        xmlhttp.send(sendString);
        return false;
    }
}

function searchSoftware(){
    name=document.getElementById("name").value;
    code=document.getElementById("code").value;
    ajaxCreateSoftwareTable(name,code);
}

function searchHardware(){
    name=document.getElementById("name").value;
    code=document.getElementById("code").value;
    ajaxCreateHardwareTable(name,code);
}

function searchAllServices(){
    date = document.getElementById("date").value;
    technician = document.getElementById('technician').value;
    client = document.getElementById('client').value;
    ajaxCreateAllServicesTable(date, technician, client);
}

function searchServices(){
    date = document.getElementById("date").value;
    client = document.getElementById('client').value;
    ajaxCreateServicesTable(date, client);
}

function searchTechnicians(){
    code = document.getElementById("code").value;
    ajaxCreateTechniciansTable(code);
}

function searchInventory(){
    name=document.getElementById("name").value;
    code=document.getElementById("code").value;
    ajaxCreateInventoryTable(name,code);
}

function ajaxCreateHardwareTable(name, code){
    sendString = "name=" + name + "&code=" + code;

    /* Create xmlhttp object */
    var xmlhttp = false;
    /* For IE Javascript 5 or higher */
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
        /* For IE lower than Javascript 5 */
    catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    /* For Non-IE */
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    /* If xmlhttp object created then continue with AJAX request */
    if (xmlhttp != null) {

        /* Request to the server */
        xmlhttp.open('POST', "tables/product_hardware_table.php", true);
        /* Keep track of server request status */
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                /* Request to the server completed successfully */
                if (xmlhttp.status == 200 || xmlhttp.status == 304) {
                    /* Get response from Server and sets to whatever depending on update */
                    var response = xmlhttp.responseText;
                    document.getElementById("table").innerHTML = response;
                    Sortable.init();
                    //alert(response);
                    //var theTable = document.getElementById("forAjax");
                    //sorttable.makeSortable(theTable);
                }
                /* Error in requesting to the server */
                else {
                    alert("State Change was unsuccesful with : " + sendString);
                    alert(xmlhttp.status);
                }
            }
        };
        /* Create header for the POST request */
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* Send string to the Server where it can be retrieved based on the variable set to */
        xmlhttp.send(sendString);
        return false;
    }
}

function ajaxCreateSoftwareTable(name, code){
    sendString = "name=" + name + "&code=" + code;

    /* Create xmlhttp object */
    var xmlhttp = false;
    /* For IE Javascript 5 or higher */
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
        /* For IE lower than Javascript 5 */
    catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    /* For Non-IE */
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    /* If xmlhttp object created then continue with AJAX request */
    if (xmlhttp != null) {

        /* Request to the server */
        xmlhttp.open('POST', "tables/product_software_table.php", true);
        /* Keep track of server request status */
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                /* Request to the server completed successfully */
                if (xmlhttp.status == 200 || xmlhttp.status == 304) {
                    /* Get response from Server and sets to whatever depending on update */
                    var response = xmlhttp.responseText;
                    document.getElementById("table").innerHTML = response;
                    Sortable.init();
                    //alert(response);
                    //var theTable = document.getElementById("forAjax");
                    //sorttable.makeSortable(theTable);
                }
                /* Error in requesting to the server */
                else {
                    alert("State Change was unsuccesful with : " + sendString);
                    alert(xmlhttp.status);
                }
            }
        };
        /* Create header for the POST request */
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* Send string to the Server where it can be retrieved based on the variable set to */
        xmlhttp.send(sendString);
        return false;
    }
}

function ajaxCreateAllServicesTable(date, technician, client){
    sendString = "date="+ date + "&technician=" + technician + "&client=" + client;
    //alert(date);
    //alert(sendString);
    /* Create xmlhttp object */
    var xmlhttp = false;
    /* For IE Javascript 5 or higher */
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
        /* For IE lower than Javascript 5 */
    catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    /* For Non-IE */
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    /* If xmlhttp object created then continue with AJAX request */
    if (xmlhttp != null) {

        /* Request to the server */
        xmlhttp.open('POST', "tables/allServices_table.php", true);
        /* Keep track of server request status */
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                /* Request to the server completed successfully */
                if (xmlhttp.status == 200 || xmlhttp.status == 304) {
                    /* Get response from Server and sets to whatever depending on update */
                    var response = xmlhttp.responseText;
                    document.getElementById("table").innerHTML = response;
                    //alert(response);
                    //var theTable = document.getElementById("forAjax");
                    //sorttable.makeSortable(theTable);
                    Sortable.init();
                }
                /* Error in requesting to the server */
                else {
                    alert("State Change was unsuccesful with : " + sendString);
                    alert(xmlhttp.status);
                }
            }
        };
        /* Create header for the POST request */
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* Send string to the Server where it can be retrieved based on the variable set to */
        xmlhttp.send(sendString);
        return false;
    }
}

function ajaxCreateServicesTable(date, client){
    sendString = "date="+ date + "&client=" + client;
    //alert(date);
    //alert(sendString);
    /* Create xmlhttp object */
    var xmlhttp = false;
    /* For IE Javascript 5 or higher */
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
        /* For IE lower than Javascript 5 */
    catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    /* For Non-IE */
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    /* If xmlhttp object created then continue with AJAX request */
    if (xmlhttp != null) {

        /* Request to the server */
        xmlhttp.open('POST', "tables/services_table_technician.php", true);
        /* Keep track of server request status */
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                /* Request to the server completed successfully */
                if (xmlhttp.status == 200 || xmlhttp.status == 304) {
                    /* Get response from Server and sets to whatever depending on update */
                    var response = xmlhttp.responseText;
                    document.getElementById("table").innerHTML = response;
                    //alert(response);
                    //var theTable = document.getElementById("forAjax");
                    //sorttable.makeSortable(theTable);
                    Sortable.init();
                }
                /* Error in requesting to the server */
                else {
                    alert("State Change was unsuccesful with : " + sendString);
                    alert(xmlhttp.status);
                }
            }
        };
        /* Create header for the POST request */
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* Send string to the Server where it can be retrieved based on the variable set to */
        xmlhttp.send(sendString);
        return false;
    }
}

function ajaxCreateInventoryTable(name, code){
    sendString = "name=" + name + "&code=" + code;

    /* Create xmlhttp object */
    var xmlhttp = false;
    /* For IE Javascript 5 or higher */
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
        /* For IE lower than Javascript 5 */
    catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    /* For Non-IE */
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    /* If xmlhttp object created then continue with AJAX request */
    if (xmlhttp != null) {

        /* Request to the server */
        xmlhttp.open('POST', "tables/product_inventory_table.php", true);
        /* Keep track of server request status */
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                /* Request to the server completed successfully */
                if (xmlhttp.status == 200 || xmlhttp.status == 304) {
                    /* Get response from Server and sets to whatever depending on update */
                    var response = xmlhttp.responseText;
                    document.getElementById("table").innerHTML = response;
                    Sortable.init();
                    //alert(response);
                    //var theTable = document.getElementById("forAjax");
                    //sorttable.makeSortable(theTable);
                }
                /* Error in requesting to the server */
                else {
                    alert("State Change was unsuccesful with : " + sendString);
                    alert(xmlhttp.status);
                }
            }
        };
        /* Create header for the POST request */
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* Send string to the Server where it can be retrieved based on the variable set to */
        xmlhttp.send(sendString);
        return false;
    }
}

function ajaxCreateTechniciansTable(code){
    sendString = "code=" + code;

    /* Create xmlhttp object */
    var xmlhttp = false;
    /* For IE Javascript 5 or higher */
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
        /* For IE lower than Javascript 5 */
    catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (E) {
            xmlhttp = false;
        }
    }
    /* For Non-IE */
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    /* If xmlhttp object created then continue with AJAX request */
    if (xmlhttp != null) {

        /* Request to the server */
        xmlhttp.open('POST', "tables/technicians_table.php", true);
        /* Keep track of server request status */
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                /* Request to the server completed successfully */
                if (xmlhttp.status == 200 || xmlhttp.status == 304) {
                    /* Get response from Server and sets to whatever depending on update */
                    var response = xmlhttp.responseText;
                    document.getElementById("table").innerHTML = response;
                    Sortable.init();
                    //alert(response);
                    //var theTable = document.getElementById("forAjax");
                    //sorttable.makeSortable(theTable);
                }
                /* Error in requesting to the server */
                else {
                    alert("State Change was unsuccesful with : " + sendString);
                    alert(xmlhttp.status);
                }
            }
        };
        /* Create header for the POST request */
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* Send string to the Server where it can be retrieved based on the variable set to */
        xmlhttp.send(sendString);
        return false;
    }
}