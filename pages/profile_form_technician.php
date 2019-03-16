<?php ?>
<form id="MyForm">
    <h1>Employee Profile</h1>
    Name:
    <input id="name" type="text"><br>
    Date of Birth:
    <input id="bday" type="date"><br>
    Phone number:
    <input id="pnumber" type="text" placeholder="###-###-####"><br>
    Email:
    <input id="email" type="text"><br>
    Address:
    <input id="address" type="text"><br>

    Description:
    <input type="text" name="inputBox" placeholder="Enter description here..."  id="descrip"></input><br><br>

    <button type="button" id="SubmitButton" onclick="validationForm()">Submit</button><br><br>
</form>
<div id="sname"></div>
<div id="sbday"></div>
<div id="spnumber"></div>
<div id="semail"></div>
<div id="saddress"></div>
<div id="sdescrip"></div>