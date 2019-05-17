//function click me
function clickme(a,b){//passed the value
	var xmlHttp = new XMLHttpRequest();//xml request
	xmlHttp.open('POST', '../pages/users/sort.php', true);//include the sort page
	var data = new FormData();//pass the data
	data.append('id',a);//id passed
	data.append("value",b);//value passed
	xmlHttp.onreadystatechange = function(){//state change
		if(xmlHttp.readyState > 3){
			var divn = document.getElementById('new');//gets the id
			divn.innerHTML = xmlHttp.responseText;//response
		}
	};
	xmlHttp.send(data);//send the data
 }



function myLoad(){//my load function
	var eak = document.getElementById('clickMe');//click me called
}

document.addEventListener('DOMContentLoaded', myLoad);//load