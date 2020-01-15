function delTask(event)
{
	var r = confirm("You really really really wan to delete this task?");
	if (r)
	{
		var child = event.target;
		var parent = child.parentNode;
		parent.removeChild(child);
		deleteCookie(child.id);
	}
	//alert(event.target.parentNode.id);
}

function setCookie(name,value)
{
document.cookie = name + "=" + value;
}

function deleteCookie(name) 
{
 	document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

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

if (parseInt(getCookie("counter")))
	var counter = parseInt(getCookie("counter"));
else
	var counter = 0;
function addNewTask()
{
	var newDiv = document.createElement("div");
	newDiv.setAttribute("id", "todo" + counter++);
	newDiv.setAttribute("onclick", "delTask(event)");
	var Text = prompt("Enter TO DO");
	var newText = document.createTextNode(Text);
	newDiv.appendChild(newText);
	document.getElementById('ft_list').insertBefore(newDiv, document.getElementById('ft_list').firstChild);
	setCookie("todo" + (counter - 1), Text);
	setCookie("counter", counter);
}

window.onload = function() {

if (getCookie("counter") == "")
	var counter = 0;
else
	counter = parseInt(getCookie("counter"));
document.getElementById('addNew').addEventListener('click', addNewTask);
console.log("window loaded!");
for (i = 0; i < counter; i++)
{
	var id = "todo" + i;
	console.log(id);
	if (getCookie(id) !== "")
	{
		var currVal = getCookie(id);
		var newDiv = document.createElement("div");
		newDiv.setAttribute("id", id);
		newDiv.setAttribute("onclick", "delTask(event)");
		var Text = currVal;
		var newText = document.createTextNode(Text);
		newDiv.appendChild(newText);
		document.getElementById('ft_list').insertBefore(newDiv, document.getElementById('ft_list').firstChild);	
	}
}
};