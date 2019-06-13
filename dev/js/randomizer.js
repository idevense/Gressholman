var myNodeList = document.querySelectorAll( '.buttonbuyticket' );

for ( let i = 0; i < myNodeList.length; ++i ) {
	let randomNumber = Math.floor( Math.random() * 10 + 5 );
	myNodeList[i].style.animation = 'waggle 1s ease-out forwards' + `${randomNumber}s`;
	myNodeList[i].style.WebkitAnimation = 'waggle 1s ease-out forwards' + `${randomNumber}s`;
	console.log( myNodeList[i]);
}

		//
		//console.log( index + button + 'our own function worked' + randomNumber );

/*
function changeAnimationDelay() {
	var animationDelay = Math.floor( Math.random() * 10 + 5 );
	document.documentElement.style.setProperty( '--animation-delay', `${animationDelay}s` );

	//setProperty( animationDelay );
}
setInterval( changeAnimationDelay, 10000 );

//
*/
