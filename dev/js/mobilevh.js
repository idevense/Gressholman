/**
* File mobilevh.js.
*
* Updates the viewport height variable when resizing window and on launch
* Hack for avoiding the mobile menus messing up design by cropping stuff
*/
// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
let vw = window.innerWidth * 0.01;

// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty( '--vh', `${vh}px` );
document.documentElement.style.setProperty( '--vw', `${vw}px` );

// We listen to the resize event
window.addEventListener( 'resize', () => {
	setViewSize( 'resize' );
});

window.addEventListener( 'orientationchange', () => {
	setViewSize( 'orientationchange' );
});

ScreenOrientation.addEventListener( 'change', () => {

	// We execute the same script as before
	let vh = window.innerHeight * 0.01;
	let vw = window.innerWidth * 0.01;
	document.documentElement.style.setProperty( '--vh', `${vh}px` );
	document.documentElement.style.setProperty( '--vw', `${vw}px` );
 });

 function setViewSize( value ) {
    if ( value == 'resize' ) {

		// We execute the same script as before
		let vh = window.innerHeight * 0.01;
		let vw = window.innerWidth * 0.01;
		document.documentElement.style.setProperty( '--vh', `${vh}px` );
		document.documentElement.style.setProperty( '--vw', `${vw}px` );

    } else if  ( value == 'orientation' ) {

		// We execute the same script as before
		let vh = window.innerHeight * 0.01;
		let vw = window.innerWidth * 0.01;
		document.documentElement.style.setProperty( '--vh', `${vh}px` );
		document.documentElement.style.setProperty( '--vw', `${vw}px` );
    }
}
