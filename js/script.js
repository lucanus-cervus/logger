let pass = document.getElementById("password");
let btnInscri = document.getElementById("btn-inscription");
let listItem = [document.getElementById("list-item1"), document.getElementById("list-item2"), document.getElementById("list-item3"), document.getElementById("list-item4"), document.getElementById("list-item5")]

pass.addEventListener("input", function(e){
    let passValue = document.getElementById("password").value;
    let regex = [/^(?=.*[a-z])/,/(?=.*[A-Z])/,/(?=.*\d)/,/(?=.*[^A-Za-z0-9])/];
    if(regex[0].test(passValue))
    {
        listItem[0].style.color = "black";
        if(regex[1].test(passValue))
        {
            listItem[1].style.color = "black";
            if(regex[2].test(passValue))
            {
                listItem[2].style.color = "black";
                if(regex[3].test(passValue))
                {
                    listItem[3].style.color = "black";
                    if(passValue.length > 8)
                    {
                        listItem[4].style.color = "black";
                        pass.style.border = "1px solid green";
                        btnInscri.removeAttribute("disabled", false);   
                    }
                }
            }
        }
    }
    else
    {
        pass.style.border = "1px solid red";
        document.getElementById("list-error").style.display = "block";
        btnInscri.setAttribute("disabled", true);
    }
})
