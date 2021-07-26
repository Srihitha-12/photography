const username=document.getElementById('uname');
const phn= document.getElementById('phn');
const link=document.getElementById('link');
const code= document.getElementById('code');
const abtn=document.getElementById('btn');
const database=firebase.database();
const usersRef = database.ref('/orders');

function onBuy()
{
	window.location.href='gifts.html';
}
