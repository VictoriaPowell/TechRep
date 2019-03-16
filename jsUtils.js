function validationForm()
{
    var v=document.getElementById("name").value;
    var w=document.getElementById("bday").value;
    var x=document.getElementById("pnumber").value;
    var y=document.getElementById("email").value;
    var a=document.getElementById("address").value;
    var z=document.getElementById("descrip").value;
    var display;
    var dis;


    if(v != null)
    {
        document.getElementById("sname").style.visibility = 'visible';
        display=document.getElementById("sname");
        dis = document.createTextNode("Name: " + v);
        display.appendChild(dis);
    }

    if(w != null)
    {
        document.getElementById("sbday").style.visibility = 'visible';
        display=document.getElementById("sbday");
        dis = document.createTextNode("Date of Birth: " + w);
        display.appendChild(dis);
    }

    if(x != null)
    {
        document.getElementById("spnumber").style.visibility = 'visible';
        display=document.getElementById("spnumber");
        dis = document.createTextNode("Phone Number: " + x);
        display.appendChild(dis);
    }

    if(y != null)
    {
        document.getElementById("semail").style.visibility = 'visible';
        display=document.getElementById("semail");
        dis = document.createTextNode("Email Address: " + y);
        display.appendChild(dis);
    }

    if(a != null)
    {
        document.getElementById("saddress").style.visibility = 'visible';
        display=document.getElementById("saddress");
        dis = document.createTextNode("Address: " + a);
        display.appendChild(dis);
    }

    if(z != null)
    {
        document.getElementById("sdescrip").style.visibility = 'visible';
        display=document.getElementById("sdescrip");
        dis = document.createTextNode("Description: " + z);
        display.appendChild(dis);
    }
}
