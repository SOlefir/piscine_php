function delTask(event)
{
	var r = confirm("You really really really wan to delete this task?");
	if (r)
	{
		child = event.target;
		deleteCookie(child.id);
		event.target.remove();

	}
}

function deleteCookie(name) 
{
 	document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function setCookie(name,value)
{
document.cookie = name + "=" + value;
}

if (parseInt(getCookie("counter")))
	var counter = parseInt(getCookie("counter"));
else
	var counter = 0;



function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

$(document).ready(function(){

for (i = 0; i <= counter; i++)
{
	var id = "todo" + i;
	console.log(id);
	if (getCookie(id) !== "")
	{
		var text = getCookie(id);
		var $elem = $('<div/>',{
			"text" : text,
			"id" : id,
			"class" : "todo",
			"onclick" : "delTask(event)"
		});
		$("#ft_list").prepend($elem);
	}
}


$("#addNew").click(function() {
	var text = prompt("Enter TO DO");
	if (text === "")
		return;
	var $elem = $('<div/>',{
		"text" : text,
		"id" : ("todo" + (counter)),
		"class" : "todo",
		"onclick" : "delTask(event)"
	});
	$("#ft_list").prepend($elem);
	setCookie("todo" + (counter), text);
	setCookie("counter", counter);
	counter++;
});


});

